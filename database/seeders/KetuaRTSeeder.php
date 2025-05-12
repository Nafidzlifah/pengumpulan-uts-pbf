<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class KetuaRTSeeder extends Seeder
{
    public function run()
    {
        DB::table('ketua_rt')->insert([
            'nama' => 'Pak RT',
            'no_hp' => '081398765432',
            'email' => 'pakrt@example.com',
            'password' => Hash::make('password'),
            'periode_mulai' => 2024,
            'periode_selesai' => 2027,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
