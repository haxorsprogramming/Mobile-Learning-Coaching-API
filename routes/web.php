<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_API_Auth;
use App\Http\Controllers\C_Apps_Auth;
use App\Http\Controllers\C_Admin_Auth;
use App\Http\Controllers\C_Admin_Dashboard;
use App\Http\Controllers\C_Admin_Mentor;

// API 
Route::post('/auth/login/proses', [C_API_Auth::class, 'loginproses']);

// Aplication admin
Route::get('/admin/login', [C_Admin_Auth::class, 'loginpage']);
Route::get('/admin/dashboard', [C_Admin_Dashboard::class, 'dashboardpage']);
Route::get('/admin/dashboard/beranda', [C_Admin_Dashboard::class, 'berandapage']);

Route::get('/admin/mentor', [C_Admin_Mentor::class, 'mentorpage']);
Route::post('/admin/mentor/add/proses', [C_Admin_Mentor::class, 'prosestambahmentor']);
Route::post('/admin/mentor/delete/proses', [C_Admin_Mentor::class, 'proseshapusmentor']);

// Aplication user 
Route::get('/', [C_Apps_Auth::class, 'landingpage']);