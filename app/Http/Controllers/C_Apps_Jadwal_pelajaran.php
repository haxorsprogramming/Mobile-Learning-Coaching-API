<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Apps_Jadwal_pelajaran extends Controller
{
    public function buatjadwalpelajaran()
    {
        return view('apps.main.jadwalpelajaran.jadwalpelajaran');
    }
}
