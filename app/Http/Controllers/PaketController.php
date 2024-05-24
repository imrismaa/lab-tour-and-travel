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
        return view('admin.admin-paket');
    }
}
