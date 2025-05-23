<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $table = 'warga';

    protected $fillable = [
        'nama',
        'nik',
        'kk',
        'alamat_rumah',
        'no_rumah',
        'no_hp',
        'email',
        'password',
    ];
}
