<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        return view('paket.paket');
    }

    public function admin()
    {
        return view('admin.dashboard-nav');
    }

    public function destinasi()
    {
        return view('admin.destinasi');
    }
}
