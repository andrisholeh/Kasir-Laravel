<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'andri',
            'password' => Hash::make('1234'),
            'nama_lengkap' => 'Andri Sholeh',
            'role_id' => 1, // Admin
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
