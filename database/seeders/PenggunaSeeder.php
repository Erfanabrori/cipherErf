<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengguna::create([
            'nama' => 'Admin System',
            'email' => 'admin@laravel12.local',
            'password' => Hash::make('admin123'),
        ]);

        Pengguna::create([
            'nama' => 'User Test 1',
            'email' => 'user1@laravel12.local',
            'password' => Hash::make('user1234'),
        ]);

        Pengguna::create([
            'nama' => 'User Test 2',
            'email' => 'user2@laravel12.local',
            'password' => Hash::make('user1234'),
        ]);

        Pengguna::create([
            'nama' => 'John Doe',
            'email' => 'john@laravel12.local',
            'password' => Hash::make('password123'),
        ]);
    }
}
