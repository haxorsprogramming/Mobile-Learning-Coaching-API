<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\C_Helper;
use App\Models\M_User_Profile;

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
        $username = $userData -> username;
        $dataUser = M_User_Profile::where('username', $username) -> first();
        // echo $username;
        $dr = ['dataUser' => $dataUser];
        return view('apps.main.beranda', $dr);
    }

}
