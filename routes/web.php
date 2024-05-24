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
Route::get('/admin-nav', function () {
    return view('admin.dashboard-nav');
});

Route::get('/destinasi', function () {
    return view('admin.destinasi');
});