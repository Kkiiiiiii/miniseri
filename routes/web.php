<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::post('/daftar/sineas', [PageController::class, 'store'])->name('daftarSineas');
Route::get('/management/index', [PageController::class, 'show'])->name('index');
Route::get('/management/pendaftaran', [PageController::class, 'sinea'])->name('pendaftaran');
Route::post('/management/pendaftaran/delete/{id}', [PageController::class, 'delete'])->name('delete-daftar');


