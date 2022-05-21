<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\M_Jenis_Pelajaran;

class C_Apps_Jadwal_pelajaran extends Controller
{
    public function buatjadwalpelajaran()
    {
        $jenisPelajaran = M_Jenis_Pelajaran::all();
        $dr = ['jenisPelajaran' => $jenisPelajaran];
        return view('apps.main.jadwalpelajaran.buatjadwalpelajaran', $dr);
    }
}
