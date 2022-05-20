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
}
