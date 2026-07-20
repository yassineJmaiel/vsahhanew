<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([

            'email'=>'required|email',

            'password'=>'required'

        ]);

        if(!$token = auth('api')->attempt($credentials))
        {
            return response()->json([

                'success'=>false,

                'message'=>'Invalid credentials'

            ],401);
        }

        return response()->json([

            'success'=>true,

            'token'=>$token,

            'user'=>auth('api')->user()

        ]);
    }

    public function logout()
    {
        auth('api')->logout();

        return response()->json([

            'success'=>true

        ]);
    }

    public function me()
    {
        return response()->json(auth('api')->user());
    }
}
