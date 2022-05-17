<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Admin_Auth extends Controller
{
    public function loginpage()
    {
        return view("admin.auth.loginpage");
    }
}
