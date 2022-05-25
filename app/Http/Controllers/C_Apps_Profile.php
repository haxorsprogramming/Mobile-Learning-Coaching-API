<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\C_Helper;
use App\Models\M_User_Profile;

class C_Apps_Profile extends Controller
{

    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }

    public function profile()
    {
        $userData = $this -> helperCtr -> getUserData();
        $dataUser = M_User_Profile::where('username', $userData -> username) -> first();
        $dr = ['jk' => 'P', 'dataUser' => $dataUser];
        return view('apps.main.profile.profile', $dr);
    }
}
