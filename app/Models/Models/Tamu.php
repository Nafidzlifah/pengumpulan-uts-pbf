<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    protected $table = 'tamu';

    protected $fillable = [
        'nama',
        'no_identitas',
        'alamat_asal',
        'ke_rumah',
        'alasan_kunjungan',
        'waktu_masuk',
        'waktu_keluar',
        'status',
    ];
}
