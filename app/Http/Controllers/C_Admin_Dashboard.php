<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Admin_Dashboard extends Controller
{
    public function dashboardpage()
    {
        return view('admin.main.dashboard');
    }
}
