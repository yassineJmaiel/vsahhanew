<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/







Route::middleware('jwt.session')->group(function () {
    Route::get('/dashboard', function () {
        return view('testdashboard');
    })->name('dashboard');

    Route::get('/partnermanagement', function () {
        return view('partnermanagement');
    })->name('partnermanagement');
});

Route::get('/login',[AuthController::class,'showLogin'])->name('login');

Route::post('/login',[AuthController::class,'login'])->name('login.post');

Route::post('/logout',[AuthController::class,'logout'])->name('logout');