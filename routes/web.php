<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_API_Auth;

// API 
Route::post('/auth/login/proses', [C_API_Auth::class, 'loginproses']);

// Aplication 