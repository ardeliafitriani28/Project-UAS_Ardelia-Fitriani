<?php

namespace database\seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin Ardelia',
            'email' => 'admin@blog.com',
            'password' => Hash::make('password123'),
        ]);
    }
}