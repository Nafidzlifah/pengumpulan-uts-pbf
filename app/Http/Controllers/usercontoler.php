<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontoler extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'List of users']);
    }

    public function store(Request $request)
    {
        // Logic untuk menyimpan data
        return response()->json(['message' => 'User created'], 201);
    }
}
