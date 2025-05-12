<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class WargaSeeder extends Seeder
{
    public function run()
    {
        DB::table('warga')->insert([
            'nama' => 'Budi Santoso',
            'nik' => '3210123456789012',
            'kk' => '3210123456789000',
            'alamat_rumah' => 'Jl. Melati No.12',
            'no_rumah' => '12',
            'no_hp' => '081234567890',
            'email' => 'budi@example.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
