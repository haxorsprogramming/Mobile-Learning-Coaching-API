<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\M_User;

class C_API_Auth extends Controller
{
    public function loginproses(Request $request)
    {
        // {'username':username, 'password':password}
        $tUser = M_User::where('username', $request -> username) -> count();
        if($tUser < 1){
            $status = "NO_USER";
        }else{
            $dUser = M_User::where('username', $request -> username) -> first();
            $cekUser = password_verify($request -> password, $dUser -> password);
            if($cekUser == true){
                $status = "SUCCESS";
            }else{
                $status = "WRONG_PASSWORD";
            }
            
        }
        $dr = ['status' => $status];
        return \Response::json($dr);
    }
}
