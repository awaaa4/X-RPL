<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if ($email == "admin@gmail.com" && $password == "123") {
            return response()->json([
                "status" => "success",
                "message" => "Login berhasil"
            ]);
        } else {
            return response()->json([
                "status" => "error",
                "message" => "Login gagal"
            ]);
        }
    }
}