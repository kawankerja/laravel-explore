<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KirimEmailController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [KirimEmailController::class, 'index']);
