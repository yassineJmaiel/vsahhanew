<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    //

    public function showLogin()
    {
        return view('testlogin');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([

            'email'=>'required|email',

            'password'=>'required'

        ]);

        if(!$token = auth('api')->attempt($credentials))
        {
            return back()->withErrors([

                'email'=>'Invalid credentials'

            ]);
        }

        session()->put('jwt_token',$token);

        session()->put('user',auth('api')->user());

        return redirect('/dashboard');
    }

public function logout()
{
    $token = session('jwt_token');

    if ($token) {

        try {

            JWTAuth::setToken($token)->invalidate();

        } catch (\Exception $e) {

            // token already invalid
        }
    }

    session()->flush();

    return redirect()->route('login');
}
}