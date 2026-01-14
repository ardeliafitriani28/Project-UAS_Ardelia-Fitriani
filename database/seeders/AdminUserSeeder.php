<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Jalankan database seeds.
     */
    public function run(): void
    {
        // Menghapus user dengan email ini jika sudah ada agar tidak duplikat
        User::where('email', 'admin@blog.com')->delete();

        // Membuat user admin baru
        User::create([
            'name' => 'Admin Ardelia',
            'email' => 'admin@blog.com',
            'password' => Hash::make('password123'),
        ]);
    }
}