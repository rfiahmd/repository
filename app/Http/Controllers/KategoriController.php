<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Requests\KategoriRequest;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('kategori.kategori', compact('kategoris'));
    }

    public function store(KategoriRequest $request)
    {
        $data = $request->validated();
        $data['token_kategori'] = Str::random(12);
        Kategori::create($data);

        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function update(KategoriRequest $request, Kategori $kategori)
    {
        $data = $request->validated();
        $kategori->update($data);

        return redirect()->back()->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(Kategori $kategori)
    {
        try {
            $kategori->delete();
            return redirect()->back()->with('delete_success', 'Kategori berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('delete_error', 'Terjadi kesalahan, kategori gagal dihapus.');
        }
    }

}
