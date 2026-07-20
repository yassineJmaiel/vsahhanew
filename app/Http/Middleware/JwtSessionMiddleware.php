<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class JwtSessionMiddleware
{
    public function handle(Request $request, Closure $next)
    {

        $token = session('jwt_token');


        if (!$token) {
            return redirect('/login');
        }


        try {

            JWTAuth::setToken($token)->authenticate();

        } catch (\Exception $e) {

            session()->flush();

            return redirect('/login');

        }


        return $next($request);
    }
}