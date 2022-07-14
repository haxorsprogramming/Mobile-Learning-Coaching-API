<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Controllers\C_Helper;
use App\Models\M_Jadwal_Pelajaran;
use App\Models\M_Enrollment;

class C_Apps_Enroll extends Controller
{
    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }

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
        $userData = $this -> helperCtr -> getUserData();
        $enroll = new M_Enrollment();
        $enroll -> token_enroll = Str::uuid();
        $enroll -> kd_jadwal_pelajaran = $request -> kdJadwal;
        $enroll -> username_murid = $userData -> username;
        $enroll -> username_mentor = '-';
        $enroll -> waktu_daftar = date('Y-m-d H:i:s');
        $enroll -> save();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
    public function listenrollpelajaran()
    {
        $dr = ['status' => 200];
        return view('apps.main.enroll.listpelajaran', $dr);
    }
}
