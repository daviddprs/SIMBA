<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Tampilkan halaman dashboard admin.
     */
    public function index()
    {
        $totalBerita = Berita::count();
        $totalUser   = User::count();
        $beritaTerbaru = Berita::with('user')->latest()->take(5)->get();

        return view('dashboard.index', compact('totalBerita', 'totalUser', 'beritaTerbaru'));
    }
}
