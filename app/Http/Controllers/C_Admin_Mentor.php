<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\M_User;
use App\Models\M_User_Profile;

class C_Admin_Mentor extends Controller
{
    public function mentorpage()
    {
        $dataMentor = M_User::where('role', 'mentor') -> get();
        $dr = ['dataMentor' => $dataMentor];
        return view('admin.main.mentor.mentor', $dr);
    }
    public function prosestambahmentor(Request $request)
    {
        // create user 
        M_User::firstOrCreate(
            ['username' => $request -> username],
            [
                'role' => 'mentor',
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
    public function proseshapusmentor(Request $request)
    {
        M_User::where('username', $request -> username) -> delete();
        M_User_Profile::where('username', $request -> username) -> delete();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
