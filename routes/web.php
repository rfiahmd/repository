<?php

use App\Http\Controllers\{FakultasController, DokumenController, JurusanController, KategoriController, ProfileController};
use Illuminate\Support\Facades\Route;

// ===================== ROUTE PUBLIK =====================
// Route::get('/', [DocumentController::class, 'index'])->name('home');
// Route::get('/documents/{id}', [DocumentController::class, 'show'])->name('documents.show');

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

// ===================== ROUTE YANG MEMBUTUHKAN LOGIN =====================
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    // Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');
    // Route::get('/dashboard', [DocumentController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', function () {
        return view('layouts.template');
    })->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ===================== ADMIN ROUTES =====================
    Route::prefix('admin')->middleware('role:admin')->group(function () {
        Route::middleware('can:kelola-kategori')->resource('kategori', KategoriController::class)->except(['create', 'edit']);
        Route::middleware('can:kelola-fakultas')->resource('fakultas', FakultasController::class)->except(['create', 'edit'])->parameters(['fakultas' => 'fakultas']);
        Route::middleware('can:kelola-prodi')->resource('jurusan', JurusanController::class)->except(['create', 'edit']);
        // Route::middleware('can:kelola-user')->resource('users', UserController::class);
        // Route::middleware('can:lihat-laporan')->get('/reports', [ReportController::class, 'index'])->name('reports.index');
        // Route::middleware('can:verifikasi-dokumen')->put('/documents/{id}/verify', [DocumentController::class, 'verify'])->name('documents.verify');
    });

    // ===================== DOSEN ROUTES =====================
    Route::prefix('dosen')->middleware('role:dosen')->group(function () {
        Route::middleware('can:upload-dokumen')->get('/dokumen/create', [DokumenController::class, 'create'])->name('documents.create');
        Route::middleware('can:upload-dokumen')->post('documents', [DokumenController::class, 'store'])->name('documents.store');
        Route::middleware('can:edit-dokumen')->get('documents/{document}/edit', [DokumenController::class, 'edit'])->name('documents.edit');
        Route::middleware('can:edit-dokumen')->put('documents/{document}', [DokumenController::class, 'update'])->name('documents.update');
        Route::get('dokumen', [DokumenController::class, 'index'])->name('dokumen.index');
    });
});

require __DIR__ . '/auth.php';
