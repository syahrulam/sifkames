<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'), // Ganti dengan password yang lebih aman
            'role' => 'admin', // Menetapkan role sebagai admin
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
