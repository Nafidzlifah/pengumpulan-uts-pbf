<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KetuaRT extends Model
{
    use HasFactory;

    protected $table = 'ketua_rt';

    protected $fillable = [
        'nama',
        'no_hp',
        'email',
        'password',
        'periode_mulai',
        'periode_selesai',
    ];
}
