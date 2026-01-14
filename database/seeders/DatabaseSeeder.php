<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus admin lama jika ada agar tidak duplikat
        User::where('email', 'admin@blog.com')->delete();

        // Buat admin baru
        User::create([
            'name' => 'Admin Ardelia',
            'email' => 'admin@blog.com',
            'password' => Hash::make('password123'),
        ]);
    }
}