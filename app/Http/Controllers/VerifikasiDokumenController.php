<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;

class VerifikasiDokumenController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Jika admin: verifikasi dokumen dosen
        if ($user->hasRole('admin')) {
            $dokumens = Dokumen::where('is_verified', false)
                ->whereHas('user', function ($query) {
                    $query->role('dosen');
                })
                ->with(['user', 'kategori', 'fakultas', 'jurusan'])
                ->get();
        }
        // Jika dosen: verifikasi dokumen mahasiswa
        elseif ($user->hasRole('dosen')) {
            $dokumens = Dokumen::where('is_verified', false)
                ->where('dosen_id', $user->id)
                ->whereHas('user', function ($query) {
                    $query->role('mahasiswa');
                })
                ->with(['user', 'kategori', 'fakultas', 'jurusan'])
                ->get();
        } else {
            abort(403);
        }

        return view('verifikasi.verifikasi-view', compact('dokumens'));
    }

    public function unverify($id)
    {
        $dokumen = Dokumen::with('user')->findOrFail($id);
        $user = auth()->user();

        // Admin bisa unverify semua
        if ($user->hasRole('admin')) {
            $dokumen->is_verified = false;
            $dokumen->is_published = false;
            $dokumen->save();

            return redirect()->back()->with('success', 'Verifikasi dokumen berhasil dibatalkan oleh admin.');
        }

        // Dosen hanya boleh unverify dokumen mahasiswa (bimbingannya, jika perlu dicek)
        if ($user->hasRole('dosen') && $dokumen->user->hasRole('mahasiswa')) {

            $dokumen->is_verified = false;
            $dokumen->is_published = false;
            $dokumen->save();

            return redirect()->back()->with('success', 'Verifikasi dokumen mahasiswa berhasil dibatalkan.');
        }

        // Jika bukan admin atau dosen, tolak akses
        abort(403, 'Anda tidak memiliki izin untuk membatalkan verifikasi dokumen ini.');
    }


    public function verifyDosen($id)
    {
        $dokumen = Dokumen::findOrFail($id);

        if (!$dokumen->user || !$dokumen->user->hasRole('dosen')) {
            return redirect()->back()->with('error', 'Dokumen ini bukan milik dosen.');
        }

        $dokumen->is_verified = true;
        $dokumen->is_published = true;
        $dokumen->save();

        return redirect()->back()->with('success', 'Dokumen berhasil diverifikasi.');
    }

    public function verifyMahasiswa($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        $user = auth()->user();

        // Pastikan dokumen milik mahasiswa
        if (!$dokumen->user || !$dokumen->user->hasRole('mahasiswa')) {
            return redirect()->back()->with('error', 'Dokumen ini bukan milik mahasiswa.');
        }

        // Pastikan yang verifikasi adalah dosen pembimbing dokumen ini
        if ($dokumen->dosen_id !== $user->id) {
            return redirect()->back()->with('error', 'Anda bukan dosen pembimbing dokumen ini.');
        }

        // Jika lolos validasi, lakukan verifikasi
        $dokumen->is_verified = true;
        $dokumen->is_published = true;
        $dokumen->save();

        return redirect()->back()->with('success', 'Dokumen mahasiswa berhasil diverifikasi.');
    }

    public function show($id)
    {
        $dokumen = Dokumen::with('user')->findOrFail($id);
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            return view('verifikasi.verifikasi-detail', compact('dokumen'));
        }

        if ($user->hasRole('dosen')) {
            if (
                $dokumen->user_id === $user->id ||
                $dokumen->user->pembimbing_id === $user->id
            ) {
                return view('verifikasi.verifikasi-detail', compact('dokumen'));
            }

            abort(403, 'Anda tidak memiliki izin untuk melihat dokumen ini.');
        }

        if ($user->hasRole('mahasiswa')) {
            if ($dokumen->user_id === $user->id) {
                return view('verifikasi.verifikasi-detail', compact('dokumen'));
            }

            abort(403, 'Anda tidak memiliki izin untuk melihat dokumen ini.');
        }

        abort(403, 'Akses ditolak.');
    }
}
