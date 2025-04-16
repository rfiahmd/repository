<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permission untuk Manajemen Kategori, fakultas, Prodi
        Permission::create(['name' => 'kelola-kategori']); // Gabungkan CRUD kategori - Admin saja
        Permission::create(['name' => 'kelola-fakultas']); // Gabungkan CRUD fakultas - Admin saja
        Permission::create(['name' => 'kelola-prodi']); // Gabungkan CRUD prodi - Admin saja

        // Permission untuk Dokumen
        Permission::create(['name' => 'upload-dokumen']);
        Permission::create(['name' => 'edit-dokumen']);
        Permission::create(['name' => 'hapus-dokumen']);
        Permission::create(['name' => 'verifikasi-dokumen']); // Khusus admin

        // Permission untuk User
        Permission::create(['name' => 'kelola-user']); // Admin saja

        // Permission Laporan
        Permission::create(['name' => 'lihat-laporan']);

        // Buat Role
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'dosen']);
        Role::create(['name' => 'mahasiswa']);

        // Assign Permission ke Role Admin
        $admin = Role::findByName('admin');
        $admin->givePermissionTo([
            'kelola-kategori',
            'kelola-fakultas',
            'kelola-prodi',
            'verifikasi-dokumen',
            'kelola-user',
            'lihat-laporan',
            'upload-dokumen',
            'edit-dokumen',
            'hapus-dokumen'
        ]);

        // Assign Permission ke Role Dosen
        $dosen = Role::findByName('dosen');
        $dosen->givePermissionTo([
            'upload-dokumen',
            'edit-dokumen',
            'hapus-dokumen'
        ]);

        // Role Mahasiswa tidak perlu permission (hanya lihat/unduh dokumen)
    }
}
