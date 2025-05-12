<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PengajuanSuratSeeder extends Seeder
{
    public function run()
    {
        DB::table('pengajuan_surat')->insert([
            'warga_id' => 1,
            'jenis_surat' => 'domisili',
            'keterangan' => 'Surat keterangan domisili untuk keperluan administrasi',
            'status' => 'menunggu',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
