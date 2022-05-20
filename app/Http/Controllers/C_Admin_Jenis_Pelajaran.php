<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\M_Jenis_Pelajaran;

class C_Admin_Jenis_Pelajaran extends Controller
{
    public function jenispelajaran()
    {
        $dataPelajaran = M_Jenis_Pelajaran::all();
        $dr = ['dataPelajaran' => $dataPelajaran];
        return view('admin.main.jenispelajaran.jenispelajaran', $dr);
    }
    public function prosestambahjenispelajaran(Request $request)
    {
        $jp = new M_Jenis_Pelajaran();
        $jp -> kd_pelajaran = Str::uuid();
        $jp -> nama = $request -> nama;
        $jp -> keterangan = $request -> keterangan;
        $jp -> save();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
    public function proseshapusjenispelajaran(Request $request)
    {
        // {'kdPelajaran':kdPelajaran}
        M_Jenis_Pelajaran::where('kd_pelajaran', $request -> kdPelajaran) -> delete();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
