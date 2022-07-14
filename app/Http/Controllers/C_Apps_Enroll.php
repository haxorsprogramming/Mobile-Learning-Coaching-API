<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\M_Jadwal_Pelajaran;

class C_Apps_Enroll extends Controller
{
    public function enroll()
    {
        $dataPelajaran = M_Jadwal_Pelajaran::all();
        $dr = ['dataPelajaran' => $dataPelajaran];
        return view('apps.main.enroll.enroll', $dr);
    }
    public function pilihPelajaran(Request $request, $kdJadwal)
    {
        $dataPelajaran = M_Jadwal_Pelajaran::where('kd_jadwal', $kdJadwal) -> first();
        $dr = ['dataPelajaran' => $dataPelajaran];
        return view('apps.main.enroll.pilihpelajaran', $dr);
    }
    public function prosesenrollpelajaran(Request $request)
    {
        $dr = ['status' => 'sukses'];
        
        return \Response::json($dr);
    }
    public function listenrollpelajaran()
    {
        
    }
}
