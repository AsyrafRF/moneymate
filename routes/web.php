<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'beranda'])->name('beranda');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');
Route::get('/informasi', [HomeController::class, 'informasi'])->name('informasi');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [HomeController::class, 'storeKontak'])->name('kontak.store');