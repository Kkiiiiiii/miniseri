<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::post('/daftar/sineas', [PageController::class, 'store'])->name('daftarSineas');
Route::get('/management', [PageController::class, 'show'])->name('index');


