<?php

namespace App\Http\Controllers;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;

class C_Helper extends Controller
{
    public function getUserData()
    {
        $key = env('JWT_KEY');
        $jwt = $_COOKIE['APP_TOKEN_8911'];
        $data = JWT::decode($jwt, new Key($key, 'HS256'));
        return $data;
    }
}
