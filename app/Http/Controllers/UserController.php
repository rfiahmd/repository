<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'dosen' => User::role('dosen')->get(),
            'mahasiswa' => User::role('mahasiswa')->get(),
            'all' => User::all(),
        ];
        return view('cs.custommer-service', $data);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
