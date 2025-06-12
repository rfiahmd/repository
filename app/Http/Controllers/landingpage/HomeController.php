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
    public function document()
    {
        $kategoris = Kategori::all();
        $dokumen = Dokumen::all();
        return view('landing.documents', compact('dokumen', 'kategoris'));
    }
    public function search(Request $request)
    {
        $search_type = $request->input('search_type', 'judul'); // Default ke 'judul' jika tidak ada
        $judul_query = $request->input('judul_query');
        $abstrak_query = $request->input('abstrak_query');
        $kategori_id = $request->input('kategori_id');

        $dokumens = Dokumen::with('kategori'); // Eager load relasi kategori

        // Terapkan kondisi pencarian berdasarkan search_type yang aktif
        if ($search_type == 'judul' && !empty($judul_query)) {
            $dokumens->where('judul', 'like', '%' . $judul_query . '%');
        } elseif ($search_type == 'abstrak' && !empty($abstrak_query)) {
            $dokumens->where('abstrak', 'like', '%' . $abstrak_query . '%');
        } elseif ($search_type == 'kategori' && !empty($kategori_id)) {
            $dokumens->where('kategori_id', $kategori_id);
        }

        $dokumens = $dokumens->orderBy('created_at', 'desc')->paginate(10);

        $kategoris = Kategori::all(); // Ambil semua kategori untuk dropdown di form

        // Mengirim kembali nilai-nilai pencarian untuk mempertahankan state form
        return view('landing.documents', compact(
            'dokumens',
            'kategoris',
            'search_type',
            'judul_query',
            'abstrak_query',
            'kategori_id'
        ));
    }
    
}
