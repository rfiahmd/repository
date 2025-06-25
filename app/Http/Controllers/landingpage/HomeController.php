<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('landing.home', compact('kategoris'));
    }

    public function document(Request $request)
    {
        $kategoris = Kategori::all();

        $dokumen = Dokumen::where('is_published', true)
            ->when($request->kategori_id, function ($query) use ($request) {
                $query->where('kategori_id', $request->kategori_id);
            })
            ->orderByDesc('created_at')
            ->paginate(10)
            ->withQueryString();

        return view('landing.documents', compact('dokumen', 'kategoris'));
    }

    public function search(Request $request)
    {
        $search_type = $request->input('search_type', 'judul'); // Default ke 'judul' jika tidak ada
        $judul_query = $request->input('judul_query');
        $abstrak_query = $request->input('abstrak_query');
        $kategori_id = $request->input('kategori_id');

        $dokumen = Dokumen::with('kategori'); // Eager load relasi kategori

        // Terapkan kondisi pencarian berdasarkan search_type yang aktif
        if ($search_type == 'judul' && !empty($judul_query)) {
            $dokumen->where('judul', 'like', '%' . $judul_query . '%');
        } elseif ($search_type == 'abstrak' && !empty($abstrak_query)) {
            $dokumen->where('abstrak', 'like', '%' . $abstrak_query . '%');
        } elseif ($search_type == 'kategori' && !empty($kategori_id)) {
            $dokumen->where('kategori_id', $kategori_id);
        }

        $dokumen = $dokumen->orderBy('created_at', 'desc')->paginate(10);

        $kategoris = Kategori::all(); // Ambil semua kategori untuk dropdown di form

        // Mengirim kembali nilai-nilai pencarian untuk mempertahankan state form
        return view('landing.documents', compact(
            'dokumen',
            'kategoris',
            'search_type',
            'judul_query',
            'abstrak_query',
            'kategori_id'
        ));
    }
}
