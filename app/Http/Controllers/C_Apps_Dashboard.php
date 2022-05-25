<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\C_Helper;
use App\Models\M_User_Profile;
use App\Models\M_User;

class C_Apps_Dashboard extends Controller
{

    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }

    public function dashboardpage()
    {
        return view('apps.main.dashboard');
    }

    public function berandapage()
    {
        $userData = $this -> helperCtr -> getUserData();
        $dataUser = M_User_Profile::where('username', $userData -> username) -> first();
        $dataUserRole = M_User::where('username', $userData -> username) -> first();
        $role = $dataUserRole -> role;
        // // echo $username;
        $dr = ['dataUser' => $dataUser, 'role' => $role];
        return view('apps.main.beranda', $dr);
    }

}
