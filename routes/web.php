<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [LandingPageController::class, 'home']);


Route::get('/app-layout', function () {
    return view('layouts.app');
});

Route::get('/paket', function () {
    return view('paket.paket');
});

// admin
Route::get('/admin-paket', function () {
    return view('admin.admin-paket');
});