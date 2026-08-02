<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\PartnerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware('jwt.session')->group(function () {
    Route::get('/dashboard', function () {
        return view('testdashboard');
    })->name('dashboard');

    Route::get('/partnermanagement', function () {
        return view('partnermanagement');
    })->name('partnermanagement');

    Route::get('/group-management', function () {
        return view('group-management');
    })->name('groupmanagement');

    Route::get('/partners', function () {
        return view('partners.index');
    })->name('partners.index');

    Route::get('/add-partner', function () {
        return view('add-partner-form');
    })->name('add-partner');

    Route::get('/add-group', function () {
        return view('add-group-form');
    })->name('add-group');
});



Route::resource('partners', PartnerController::class);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');