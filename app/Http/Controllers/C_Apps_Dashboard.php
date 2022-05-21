<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class C_Apps_Dashboard extends Controller
{
    public function dashboardpage()
    {
        return view('apps.main.dashboard');
    }
}
