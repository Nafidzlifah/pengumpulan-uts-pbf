<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satpam extends Model
{
    use HasFactory;

    protected $table = 'satpam';

    protected $fillable = [
        'nama',
        'no_hp',
        'shift',
        'email',
        'password',
    ];
}
