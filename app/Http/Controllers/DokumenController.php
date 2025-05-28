<?php

namespace App\Http\Controllers;

use App\Http\Requests\DokumenRequest;
use App\Models\Dokumen;
use App\Models\Fakultas;
use App\Models\Jurusan;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class DokumenController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            $dokumens = Dokumen::with(['kategori', 'fakultas', 'jurusan'])
                ->where('is_verified', true)
                ->latest()
                ->get();
        } else {
            $dokumens = Dokumen::with(['kategori', 'fakultas', 'jurusan'])
                ->where('user_id', $user->id)
                ->latest()
                ->get();
        }

        return view('dokumen.dokumen', compact('dokumens'));
    }

    public function create()
    {
        $data = [
            'dosens' => User::role('dosen')->get(),
            'kategori' => Kategori::all(),
            'fakultas' => Fakultas::all(),
        ];

        return view('dokumen.tambahdokumen', $data);
    }

    public function store(DokumenRequest $request)
    {
        $tokenDokumen = Str::upper(Str::random(12));
        $thumbnailPath = null;
        $filePath = null;

        if ($request->hasFile('thumbnail')) {
            $thumbnailFile = $request->file('thumbnail');
            $thumbnailName = time() . '_' . uniqid() . '.' . $thumbnailFile->getClientOriginalExtension();
            $thumbnailPath = $thumbnailFile->storeAs('dokumen/thumbnail', $thumbnailName, 'public');
        }

        if ($request->hasFile('file_dokumen')) {
            $dokumenFile = $request->file('file_dokumen');
            $dokumenName = time() . '_' . uniqid() . '.' . $dokumenFile->getClientOriginalExtension();
            $filePath = $dokumenFile->storeAs('dokumen/file', $dokumenName, 'public');
        }

        $dosenId = auth()->user()->hasRole('mahasiswa') ? $request->dosen_id : null;

        try {
            Dokumen::create([
                'judul' => $request->judul,
                'abstrak' => $request->abstrak,
                'kata_kunci' => $request->kata_kunci,
                'tahun_publikasi' => $request->tahun_publikasi,
                'token_dokumen' => $tokenDokumen,
                'user_id' => auth()->id(),
                'thumbnail_path' => $thumbnailPath,
                'file_path' => $filePath,
                'kategori_id' => $request->kategori,
                'fakultas_id' => $request->fakultas,
                'jurusan_id' => $request->jurusan,
                'dosen_id' => $dosenId,
                'is_verified' => false,
                'is_published' => false,
                'jumlah_diunduh' => 0,
            ]);

            return redirect()->route('dokumen.index')->with('success', 'Dokumen berhasil disimpan');
        } catch (\Exception $e) {
            if ($thumbnailPath && Storage::disk('public')->exists($thumbnailPath)) {
                Storage::disk('public')->delete($thumbnailPath);
            }
            if ($filePath && Storage::disk('public')->exists($filePath)) {
                Storage::disk('public')->delete($filePath);
            }

            return back()
                ->withErrors(['error' => 'Gagal menyimpan dokumen: ' . $e->getMessage()])
                ->withInput();
        }
    }

    public function show(Dokumen $dokumen)
    {
        //
    }

    public function edit(Dokumen $dokumen)
    {
        //
    }

    public function update(Request $request, Dokumen $dokumen)
    {
        //
    }

    public function destroy(Dokumen $document)
    {
        if ($document->is_verified) {
            return back()->withErrors(['error' => 'Dokumen yang sudah diverifikasi tidak dapat dihapus.']);
        }

        try {
            // Hapus file dari storage jika ada
            if ($document->thumbnail_path && Storage::disk('public')->exists($document->thumbnail_path)) {
                Storage::disk('public')->delete($document->thumbnail_path);
            }

            if ($document->file_path && Storage::disk('public')->exists($document->file_path)) {
                Storage::disk('public')->delete($document->file_path);
            }

            // Hapus dari database
            $document->delete();

            return back()->with('success', 'Dokumen berhasil dihapus.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Gagal menghapus dokumen: ' . $e->getMessage()]);
        }
    }

    public function getJurusan($fakultas_id)
    {
        $jurusan = Jurusan::where('fakultas_id', $fakultas_id)->get();
        return response()->json($jurusan);
    }
}
