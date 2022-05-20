<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Admin_Jenis_Pelajaran extends Controller
{
    public function jenispelajaran()
    {
        return view('admin.main.jenispelajaran.jenispelajaran');
    }
}
