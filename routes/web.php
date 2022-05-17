<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_API_Auth;
use App\Http\Controllers\C_Apps_Auth;
use App\Http\Controllers\C_Admin_Auth;
use App\Http\Controllers\C_Admin_Dashboard;

// API 
Route::post('/auth/login/proses', [C_API_Auth::class, 'loginproses']);

// Aplication admin
Route::get('/admin/login', [C_Admin_Auth::class, 'loginpage']);
Route::get('/admin/dashboard', [C_Admin_Dashboard::class, 'dashboardpage']);

// Aplication user 
Route::get('/', [C_Apps_Auth::class, 'landingpage']);