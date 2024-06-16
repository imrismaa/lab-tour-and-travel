<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PaketController;

Route::get('/', [LandingPageController::class, 'home']);


Route::get('/login', [LandingPageController::class, 'login'])->name('login');
Route::get('/register', [LandingPageController::class, 'register'])->name('register');
Route::get('/home', [LandingPageController::class, 'home']);


Route::get('/app-layout', function () {
    return view('layouts.app');
});

Route::get('/paket', [PaketController::class, 'index'])->name('paket');
Route::get('/detail-paket', [PaketController::class, 'detailPaket'])->name('detail-paket');

// pesan paket
Route::get('/pilih-paket', [PaketController::class, 'pilihPaket'])->name('pilih-paket');
Route::get('/data-diri', [PaketController::class, 'dataDiri'])->name('data-diri');
Route::get('/konfirmasi', [PaketController::class, 'konfirmasi'])->name('konfirmasi');
Route::get('/bukti-pembayaran', [PaketController::class, 'buktiPembayaran'])->name('bukti-pembayaran');

// custom
Route::get('/custom-paket', [PaketController::class, 'customPaket'])->name('customPaket');
Route::get('/custom-pilih-tiket', [PaketController::class, 'customPilihTiket'])->name('custom-pilih-tiket');
Route::get('/custom-data-diri', [PaketController::class, 'customDataDiri'])->name('custom-data-diri');
Route::get('/custom-konfirmasi', [PaketController::class, 'customKonfirmasi'])->name('custom-konfirmasi');

// user profile
Route::get('/waiting', [PaketController::class, 'waiting'])->name('waiting');
Route::get('/accepted', [PaketController::class, 'accepted'])->name('accepted');
Route::get('/rejected', [PaketController::class, 'rejected'])->name('rejected');
Route::get('/paid', [PaketController::class, 'paid'])->name('paid');
Route::get('/done', [PaketController::class, 'done'])->name('done');

// admin
Route::get('/dashboard-nav', [PaketController::class, 'dashboardAdmin'])->name('dashboard-nav');

Route::get('/destinasi', [PaketController::class, 'destinasi'])->name('destinasi');
Route::get('tambah-destinasi', [PaketController::class, 'tambahDestinasi'])->name('tambah-destinasi');

Route::get('/penginapan', [PaketController::class, 'penginapan'])->name('penginapan');
Route::get('/tambah-penginapan', [PaketController::class, 'tambahPenginapan'])->name('tambah-penginapan');

Route::get('/transportasi', [PaketController::class, 'transportasi'])->name('transportasi');
Route::get('/tambah-transportasi', [PaketController::class, 'tambahTransportasi'])->name('tambah-transportasi');

Route::get('/custom', [PaketController::class, 'custom'])->name('custom');

Route::get('/booking', [PaketController::class, 'booking'])->name('booking');

Route::get('/paket-admin', [PaketController::class, 'paket'])->name('paket-admin');

Route::get('/tambah-paket', [PaketController::class, 'tambahPaket'])->name('tambah-paket');
