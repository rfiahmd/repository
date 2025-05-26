<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        $admin = User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('123'),
            ],
        );
        $admin->assignRole('admin');

        // Dosen
        $dosen = User::updateOrCreate(
            ['email' => 'dosen@gmail.com'],
            [
                'name' => 'Dosen',
                'password' => Hash::make('123'),
            ],
        );
        $dosen->assignRole('dosen');

        // Mahasiswa
        $mahasiswa1 = User::updateOrCreate(
            ['email' => 'mahasiswa1@gmail.com'],
            [
                'name' => 'Mahasiswa',
                'password' => Hash::make('123'),
            ],
        );
        $mahasiswa1->assignRole('mahasiswa');

        $mahasiswa2 = User::updateOrCreate(
            ['email' => 'mahasiswa2@gmail.com'],
            [
                'name' => 'Mahasiswa',
                'password' => Hash::make('123'),
            ],
        );
        $mahasiswa2->assignRole('mahasiswa');
    }
}
