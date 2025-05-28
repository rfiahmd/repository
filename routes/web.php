<?php

use App\Http\Controllers\{
    DashboardController,
    FakultasController,
    DokumenController,
    JurusanController,
    KategoriController,
    ProfileController
};
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// ===================== ROUTE PUBLIK =====================
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

// ===================== ROUTE YANG MEMBUTUHKAN LOGIN =====================
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        $role = Auth::user()->getRoleNames()->first();
        return redirect()->route('dashboard.role', ['role' => $role]);
    })->name('dashboard');
    Route::get('/dashboard-{role}', [DashboardController::class, 'show'])
        ->where('role', 'admin|dosen|mahasiswa')
        ->name('dashboard.role');

    // dokumen
    Route::get('/dokumens', [DokumenController::class, 'index'])->name('dokumen.index');
    Route::get('/get-jurusan/{fakultas_id}', [DokumenController::class, 'getJurusan']);

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ===================== ADMIN ROUTES =====================
    Route::prefix('admin')->middleware('role:admin')->group(function () {
        Route::middleware('can:kelola-kategori')->resource('kategori', KategoriController::class)->except(['create', 'edit']);
        Route::middleware('can:kelola-fakultas')->resource('fakultas', FakultasController::class)->except(['create', 'edit']);
        Route::middleware('can:kelola-prodi')->resource('jurusan', JurusanController::class)->except(['create', 'edit']);

        // Verifikasi dokumen dosen
        Route::middleware('can:verifikasi-dokumen')->put('/documents/{id}/verify', [DokumenController::class, 'verifyDosen'])->name('documents.verify.dosen');

        // Laporan & User Management (aktifkan kalau siap)
        // Route::middleware('can:kelola-user')->resource('users', UserController::class);
        // Route::middleware('can:lihat-laporan')->get('/reports', [ReportController::class, 'index'])->name('reports.index');
    });

    // ===================== DOSEN ROUTES =====================
    Route::prefix('dosen')->middleware('role:dosen')->group(function () {
        // CRUD dokumen (dosen)
        Route::middleware('can:upload-dokumen')->get('/dokumen/create', [DokumenController::class, 'create'])->name('documents.create');
        Route::middleware('can:upload-dokumen')->post('/documents', [DokumenController::class, 'store'])->name('documents.store');

        Route::middleware('can:edit-dokumen')->get('/documents/{document}/edit', [DokumenController::class, 'edit'])->name('documents.edit');
        Route::middleware('can:edit-dokumen')->put('/documents/{document}', [DokumenController::class, 'update'])->name('documents.update');

        Route::middleware('can:hapus-dokumen')->delete('/documents/{document}', [DokumenController::class, 'destroy'])->name('documents.destroy');


        // Verifikasi dokumen mahasiswa bimbingan
        Route::middleware('can:verifikasi-dokumen-mahasiswa')->put('/documents/{id}/verify-mahasiswa', [DokumenController::class, 'verifyMahasiswa'])->name('documents.verify.mahasiswa');
    });

    // ===================== MAHASISWA ROUTES =====================
    Route::prefix('mahasiswa')->middleware('role:mahasiswa')->group(function () {
        // CRUD dokumen (mahasiswa)
        Route::middleware('can:upload-dokumen')->get('/dokumen/create', [DokumenController::class, 'create'])->name('mahasiswa.documents.create');
        Route::middleware('can:upload-dokumen')->post('/documents', [DokumenController::class, 'store'])->name('mahasiswa.documents.store');

        Route::middleware('can:edit-dokumen')->get('/documents/{document}/edit', [DokumenController::class, 'edit'])->name('mahasiswa.documents.edit');
        Route::middleware('can:edit-dokumen')->put('/documents/{document}', [DokumenController::class, 'update'])->name('mahasiswa.documents.update');

        Route::middleware('can:hapus-dokumen')->delete('/documents/{document}', [DokumenController::class, 'destroy'])->name('mahasiswa.documents.destroy');

        Route::get('/dokumen', [DokumenController::class, 'index'])->name('mahasiswa.dokumen.index');
    });
});

require __DIR__ . '/auth.php';
