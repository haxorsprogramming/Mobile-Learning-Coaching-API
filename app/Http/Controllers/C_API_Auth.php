<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_API_Auth extends Controller
{
    public function loginproses(Request $request)
    {
        $username = $request -> username;
        $dr = ['status' => 'sukses', 'username' => $username];
        return \Response::json($dr);
    }
}
