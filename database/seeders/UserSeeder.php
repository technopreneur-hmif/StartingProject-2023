<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama_user' => 'Alvin Yoga Kesuma',
            'username' => 'alvin',
            'email' => 'alvin@gmail.com',
            'role' => 'pemilih',
            'password' => bcrypt('password')
        ]);

        User::create([
            'nama_user' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('password')
        ]);
    }
}
