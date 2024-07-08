<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SertifikatController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SertifikatController::class, 'showSertifikat']);
Route::post('/download', [SertifikatController::class, 'createPDF'])->name('sertifikate.create');
