<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PaketController;

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

Route::get('/destinasi', [PaketController::class, 'destinasi'])->name('destinasi');
Route::get('tambah-destinasi', [PaketController::class, 'tambahDestinasi'])->name('tambah-destinasi');
Route::get('/penginapan', [PaketController::class, 'penginapan'])->name('penginapan');
Route::get('/tambah-penginapan', [PaketController::class, 'tambahPenginapan'])->name('tambah-penginapan');
Route::get('/transportasi', [PaketController::class, 'transportasi'])->name('transportasi');
Route::get('/tambah-transportasi', [PaketController::class, 'tambahTransportasi'])->name('tambah-transportasi');
Route::get('/custom', [PaketController::class, 'custom'])->name('custom');
Route::get('/booking', [PaketController::class, 'booking'])->name('booking');
