<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class SatpamSeeder extends Seeder
{
    public function run()
    {
        DB::table('satpam')->insert([
            'nama' => 'Satpam 1',
            'no_hp' => '081212121212',
            'shift' => 'pagi',
            'email' => 'satpam1@example.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
