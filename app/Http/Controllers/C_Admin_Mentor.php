<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Admin_Mentor extends Controller
{
    public function mentorpage()
    {
        return view('admin.main.mentor.mentor');
    }
    public function prosestambahmentor(Request $request)
    {
        // 'nama' : document.querySelector("#txtNama").value,
        //             'username' : document.querySelector("#txtUsername").value,
        //             'password' : document.querySelector("#txtPassword").value,
        //             'jk' : document.querySelector("#txtJk").value,
        //             'alamat' : document.querySelector("#txtAlamat").value,
        //             'hp' : document.querySelector("#txtHp").value
        
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
