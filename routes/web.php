<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_API_Auth;
use App\Http\Controllers\C_Apps_Auth;
use App\Http\Controllers\C_Admin_Auth;
use App\Http\Controllers\C_Admin_Dashboard;
use App\Http\Controllers\C_Admin_Mentor;
use App\Http\Controllers\C_Admin_Murid;
use App\Http\Controllers\C_Admin_Jenis_Pelajaran;

// ----------------------- API ------------------------------------------- // 
Route::post('/auth/login/proses', [C_API_Auth::class, 'loginproses']);

// --------------------- ADMIN ------------------------------------------- //
# Auth
Route::get('/admin/login', [C_Admin_Auth::class, 'loginpage']);
# Dashboard
Route::get('/admin/dashboard', [C_Admin_Dashboard::class, 'dashboardpage']);
Route::get('/admin/dashboard/beranda', [C_Admin_Dashboard::class, 'berandapage']);
# Mentor page
Route::get('/admin/mentor', [C_Admin_Mentor::class, 'mentorpage']);
Route::post('/admin/mentor/add/proses', [C_Admin_Mentor::class, 'prosestambahmentor']);
Route::post('/admin/mentor/delete/proses', [C_Admin_Mentor::class, 'proseshapusmentor']);
# Murid Page
Route::get('/admin/murid', [C_Admin_Murid::class, 'muridpage']);
Route::post('/admin/murid/add/proses', [C_Admin_Murid::class, 'prosestambahmurid']);
Route::post('/admin/murid/delete/proses', [C_Admin_Murid::class, 'proseshapusmurid']);
# Jenis pelajaran 
Route::get('/admin/jenis-pelajaran', [C_Admin_Jenis_Pelajaran::class, 'jenispelajaran']);


// ----------------- APPLICATION USER ------------------------------------ //
Route::get('/', [C_Apps_Auth::class, 'landingpage']);