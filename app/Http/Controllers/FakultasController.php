<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Http\Requests\FakultasRequest;
use Illuminate\Support\Str;

class FakultasController extends Controller
{

    // Show fakultas
    public function index()
    {
        return view('fakultas.fakultas', [
            'fakultas' => Fakultas::all(),
        ]);
    }

    // Create fakultas
    public function store(FakultasRequest $request)
    {
        Fakultas::create([
            'token_fakultas' => Str::random(12),
            'nama_fakultas' => $request->nama_fakultas,
            'kode_fakultas' => $request->kode_fakultas,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->back()->with('success', 'Fakultas berhasil ditambahkan.');
    }

    // Update fakultas
    public function update(FakultasRequest $request, $id)
    {
        $fakultas = Fakultas::findOrFail($id);
        $updated = $fakultas->update($request->validated());

        if ($updated) {
            return redirect()->back()->with('success', 'Fakultas berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Fakultas gagal diperbarui.');
        }
    }

    //Hapus fakultas
    public function destroy(Fakultas $fakultas)
    {
        $fakultas->delete();

        return redirect()->back()->with('delete_success', 'Fakultas berhasil dihapus.');
    }
}
