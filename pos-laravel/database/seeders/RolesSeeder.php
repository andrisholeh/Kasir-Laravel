<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'nama_role' => 'Admin',
                'keterangan' => 'Administrator utama',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_role' => 'Kasir',
                'keterangan' => 'Kasir toko',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_role' => 'Owner',
                'keterangan' => 'Pemilik toko',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
