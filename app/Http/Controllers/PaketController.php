<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        return view('paket.paket');
    }

    public function detailPaket()
    {
        return view('paket.detail-paket');
    }

    public function dashboardAdmin()
    {
        return view('layout.dashboard-nav');
    }

    public function destinasi()
    {
        return view('admin.destinasi');
    }

    public function tambahDestinasi()
    {
        return view('admin.tambah-destinasi');
    }

    public function penginapan() 
    {
        return view('admin.penginapan');
    }

    public function tambahPenginapan()
    {
        return view('admin.tambah-penginapan');
    }

    public function transportasi()
    {
        return view('admin.transportasi');
    }

    public function tambahTransportasi()
    {
        return view('admin.tambah-transportasi');
    }
    
    public function custom()
    {
        return view('admin.custom');
    }
    public function booking()
    {
        return view('admin.booking');
    }
    public function paket()
    {
        return view('admin.paket');
    }
    public function tambahPaket()
    {
        return view('admin.tambah-paket');
    }




    public function pilihPaket()
    {
        return view('pesan-paket.pilih-paket');
    }
    public function dataDiri()
    {
        return view('pesan-paket.data-diri');
    }
}
