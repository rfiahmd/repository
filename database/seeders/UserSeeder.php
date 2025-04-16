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
        $mahasiswa = User::updateOrCreate(
            ['email' => 'mahasiswa@gmail.com'],
            [
                'name' => 'Mahasiswa',
                'password' => Hash::make('123'),
            ],
        );
        $mahasiswa->assignRole('mahasiswa');
    }
}
