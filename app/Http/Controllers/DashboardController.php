<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function show(string $role)
    {
        $user = Auth::user();

        // Cek apakah role yang diakses sesuai dengan role user
        if (!$user->hasRole($role)) {
            abort(403, 'Anda tidak memiliki akses ke dashboard ini.');
        }

        // Kirim role ke view utama
        return view('dashboard.dashboard', ['role' => $role]);
    }
}
