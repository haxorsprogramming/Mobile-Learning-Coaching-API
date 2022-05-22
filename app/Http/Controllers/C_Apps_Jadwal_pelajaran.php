<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Controllers\C_Helper;
use App\Models\M_Jadwal_Pelajaran;
use App\Models\M_Jenis_Pelajaran;

class C_Apps_Jadwal_pelajaran extends Controller
{

    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }

    public function buatjadwalpelajaran()
    {
        $jenisPelajaran = M_Jenis_Pelajaran::all();
        $dr = ['jenisPelajaran' => $jenisPelajaran];
        return view('apps.main.jadwalpelajaran.buatjadwalpelajaran', $dr);
    }
    public function prosesbuatpelajaran(Request $request)
    {
        $userData = $this -> helperCtr -> getUserData();
        // {'jenis':jenis, 'judul':judul, 'keterangan':keterangan, 'tanggal':tanggal}
        $jp = new M_Jadwal_Pelajaran();
        $jp -> kd_jadwal = Str::uuid();
        $jp -> kd_pelajaran = $request -> jenis;
        $jp -> keterangan = $request -> keterangan;
        $jp -> username_mentor = $userData -> username;
        $jp -> waktu_mulai = $request -> tanggal;
        $jp -> save();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
    public function listjadwalpelajaran()
    {

    }
    
}
