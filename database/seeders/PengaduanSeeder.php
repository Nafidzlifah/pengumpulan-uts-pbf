<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PengaduanSeeder extends Seeder
{
    public function run()
    {
        DB::table('pengaduan')->insert([
            'warga_id' => 1,
            'isi_pengaduan' => 'Lampu jalan depan rumah mati.',
            'status' => 'menunggu',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
