<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WordController::class, 'index'])->name('word.index');
Route::get('/export', [WordController::class, 'exportWord'])->name('export.index');
