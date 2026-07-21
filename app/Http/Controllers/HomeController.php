<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Akan memanggil file view 'beranda.blade.php'
        return view('beranda');
    }
}