<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\M_User;
use App\Models\M_User_Profile;

class C_Admin_Murid extends Controller
{
    public function muridpage()
    {
        $dataMurid = M_User::where('role', 'murid') -> get();
        $dr = ['dataMurid' => $dataMurid];
        return view('admin.main.murid.murid', $dr);
    }
    public function prosestambahmurid(Request $request)
    {
        // create user 
        M_User::firstOrCreate(
            ['username' => $request -> username],
            [
                'role' => 'murid',
                'password' => password_hash($request -> password, PASSWORD_DEFAULT)
            ]
        );
        // create user profile 
        M_User_Profile::firstOrCreate(
            ['username' => $request -> username],
            [
                'nama' => $request -> nama,
                'jk' => $request -> jk,
                'alamat' => $request -> alamat,
                'hp' => $request -> hp
            ]
        );
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
    public function proseshapusmurid(Request $request)
    {
        M_User::where('username', $request -> username) -> delete();
        M_User_Profile::where('username', $request -> username) -> delete();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
