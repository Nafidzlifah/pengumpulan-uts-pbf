<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontoler;

Route::get('/users', [usercontoler::class, 'index']);
// Route::post('/users', [admin::class, 'index']);

