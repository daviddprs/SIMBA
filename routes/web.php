<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Arahkan URL utama ("/") ke HomeController fungsi index
Route::get('/', [HomeController::class, 'index']);