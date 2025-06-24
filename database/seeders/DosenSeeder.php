<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker; // Import Faker Factory

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID'); // Inisialisasi Faker dengan locale Indonesia

        // Buat 5 data dosen
        for ($i = 0; $i < 5; $i++) {
            $name = $faker->name();
            $email = $faker->unique()->safeEmail();

            // --- PERUBAHAN DI SINI UNTUK USERNAME ---
            // 1. Ubah nama ke huruf kecil
            $lowerCaseName = strtolower($name);
            // 2. Hapus semua spasi dan karakter non-alfanumerik (kecuali angka dan huruf)
            // Ini akan membuat "Dosen Satu" menjadi "dosensatu"
            $baseUsername = preg_replace('/[^a-z0-9]/', '', $lowerCaseName);

            // Pastikan baseUsername tidak kosong jika nama hanya berisi karakter aneh
            if (empty($baseUsername)) {
                $baseUsername = 'dosen_' . Str::random(5); // Fallback jika nama tidak menghasilkan username yang valid
            }
            // --- AKHIR PERUBAHAN USERNAME ---

            $username = $baseUsername . $faker->unique()->randomNumber(3); // Tambahkan angka random agar unik

            // Pastikan username tidak terlalu panjang untuk kolom database
            if (strlen($username) > 255) { // Sesuaikan 255 dengan panjang kolom username Anda
                $username = substr($username, 0, 255);
            }

            // Generate NIP/NIM
            $nipNim = $faker->unique()->numerify('##########'); // 10 digit angka

            $dosen = User::updateOrCreate(
                ['email' => $email], // Kriteria pencarian: jika email sudah ada, update. Jika tidak, buat baru.
                [
                    'name' => $name,
                    'username' => $username,
                    'nip_nim' => $nipNim,
                    'password' => Hash::make('123'), // Password default
                    'email_verified_at' => now(),
                    'remember_token' => Str::random(10),
                ]
            );

            // Asumsikan Anda menggunakan Spatie/Laravel-Permission untuk role
            $dosen->assignRole('dosen');
        }
    }
}
