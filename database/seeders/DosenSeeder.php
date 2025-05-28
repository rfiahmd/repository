<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            $email = "dosen{$i}@example.com";
            $name = "Dosen {$i}";

            $dosen = User::updateOrCreate(
                ['email' => $email],
                [
                    'name' => $name,
                    'password' => Hash::make('123'),
                    'email_verified_at' => now(),
                    'remember_token' => Str::random(10),
                ]
            );

            $dosen->assignRole('dosen');
        }
    }
}
