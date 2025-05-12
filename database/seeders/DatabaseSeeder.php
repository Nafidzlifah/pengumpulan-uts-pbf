<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            WargaSeeder::class,
            TamuSeeder::class,
            SatpamSeeder::class,
            KetuaRTSeeder::class,
            PengajuanSuratSeeder::class,
            PengaduanSeeder::class,
        ]);
    }
}
