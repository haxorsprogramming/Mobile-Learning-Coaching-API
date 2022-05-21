<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Apps_Auth extends Controller
{
    public function loginpage()
    {
        return view('apps.auth.login');
    }
    public function logout()
    {
        unset($_COOKIE['APP_TOKEN_8911']);
        return redirect('/apps-mobile');
    }
}
