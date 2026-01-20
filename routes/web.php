<?php

use App\Http\Controllers\ManagementController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::post('/daftar/sineas', [PageController::class, 'store'])->name('daftarSineas');
Route::get('/management/index', [ManagementController::class, 'index'])->name( 'index');
Route::get('/management/pendaftaran', [PageController::class, 'sinea'])->name('pendaftaran');
Route::post('/management/pendaftaran/delete/{id}', [PageController::class, 'delete'])->name('delete-daftar');
Route::post('/management/pendaftaran/update/{id}', [PageController::class, 'update'])->name('update-daftar');
Route::get('/management/sinea', [ManagementController::class,'show'])->name('inputSinea');


