<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TamuSeeder extends Seeder
{
    public function run()
    {
        DB::table('tamu_pendatang')->insert([
            'nama' => 'Andi Pratama',
            'no_identitas' => '3275123456789001',
            'alamat_asal' => 'Jl. Kenanga No.45',
            'ke_rumah' => 'Budi Santoso',
            'alasan_kunjungan' => 'Silaturahmi',
            'waktu_masuk' => now(),
            'status' => 'masuk',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
