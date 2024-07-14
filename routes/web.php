<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitiesController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(CitiesController::class)->group(function () {
    Route::get('/kota', 'index')->name('kota.index');
    Route::get('/export', 'export')->name('export.index');
    Route::post('/city-import', 'import')->name('import.index');
});
