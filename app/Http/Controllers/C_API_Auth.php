<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

use App\Models\M_User;

class C_API_Auth extends Controller
{
    public function loginproses(Request $request)
    {
        // {'username':username, 'password':password}
        $tUser = M_User::where('username', $request -> username) -> count();
        if($tUser < 1){
            $role = "";
            $status = "NO_USER";
        }else{
            $dUser = M_User::where('username', $request -> username) -> first();
            $cekUser = password_verify($request -> password, $dUser -> password);
            if($cekUser == true){
                $key = env('JWT_KEY');
                $payload = array(
                    "username" => $request -> username
                );
                $jwt = JWT::encode($payload, $key, 'HS256');
                // setcookie("APP_TOKEN_4412", $jwt);
                setcookie("APP_TOKEN_8911", $jwt, time() + (86400 * 30), "/"); // 86400 = 1 day
                $role = $dUser -> role;
                $status = "SUCCESS";
                $request -> session() -> put('username', $request -> username);
            }else{
                $role = "";
                $status = "WRONG_PASSWORD";
            }
            
        }
        $dr = ['status' => $status, 'role' => $role];
        return \Response::json($dr);
    }
    
}
