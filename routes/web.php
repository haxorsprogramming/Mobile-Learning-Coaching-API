<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_API_Auth;
use App\Http\Controllers\C_Apps_Auth;
use App\Http\Controllers\C_Apps_Dashboard;
use App\Http\Controllers\C_Apps_Jadwal_pelajaran;
use App\Http\Controllers\C_Admin_Auth;
use App\Http\Controllers\C_Admin_Dashboard;
use App\Http\Controllers\C_Admin_Mentor;
use App\Http\Controllers\C_Admin_Murid;
use App\Http\Controllers\C_Admin_Jenis_Pelajaran;

// ----------------------- API ------------------------------------------- // 
Route::post('/auth/login/proses', [C_API_Auth::class, 'loginproses']);


// ----------------------- ROOT ------------------------------------------ // 
Route::get('/', function () { return 'APLIKASI MOBILE LEARNING TAHSIN PADA HAFALAN AL-QUR’AN MENGGUNAKAN METODE COACHING BERBASIS ANDROID'; });

// --------------------- ADMIN ------------------------------------------- //
# Auth
Route::get('/admin/login', [C_Admin_Auth::class, 'loginpage']);
Route::get('/admin/logout', [C_Admin_Auth::class, 'logout']);
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
Route::post('/admin/jenis-pelajaran/add/proses', [C_Admin_Jenis_Pelajaran::class, 'prosestambahjenispelajaran']);
Route::post('/admin/jenis-pelajaran/delete/proses', [C_Admin_Jenis_Pelajaran::class, 'proseshapusjenispelajaran']);

// ----------------- APPLICATION USER ------------------------------------ //
# Auth 
Route::get('/apps-mobile', [C_Apps_Auth::class, 'loginpage']);
Route::get('/apps-mobile/logout', [C_Apps_Auth::class, 'logout']);
# Dashboard 
Route::get('/apps-mobile/dashboard', [C_Apps_Dashboard::class, 'dashboardpage']);
Route::get('/apps-mobile/beranda', [C_Apps_Dashboard::class, 'berandapage']);
# Buat pelajaran 
Route::get('/apps-mobile/pelajaran/buat', [C_Apps_Jadwal_pelajaran::class, 'buatjadwalpelajaran']);
