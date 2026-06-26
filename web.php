<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController; // Panggil ProdukController
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\HomeController;
use App\Models\menu;

// Rute Halaman Depan Terpisah
Route::get('/', [HomeController::class, 'index']);
Route::get('/profil', [HomeController::class, 'profil']);
Route::get('/artikel', [HomeController::class, 'artikel']);
Route::get('/galeri', [HomeController::class, 'galeri']);
Route::get('/contact', [HomeController::class, 'contact']);

// Route Autentikasi Manual
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Grup Route Admin Terproteksi Middleware Manual
Route::middleware(['admin.auth'])->prefix('admin')->group(function () {
    
    // Halaman Utama Dashboard Admin
    Route::get('/dashboard', [App\Http\Controllers\AuthController::class, 'dashboard']);

    // Rute CRUD Produk (Menu Kantin)
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk', [ProdukController::class, 'store']);
    Route::get('/produk/{id}/edit', [ProdukController::class, 'edit']);
    Route::post('/produk/{id}', [ProdukController::class, 'update']);
    Route::delete('/produk/{id}', [ProdukController::class, 'destroy']);
    
    // Rute Kasir & Transaksi (Tambahan Baru)
    Route::get('/transaksi', [TransaksiController::class, 'index']);
    Route::post('/transaksi', [TransaksiController::class, 'store']);
    Route::get('/transaksi', [TransaksiController::class, 'index']);
    
    //Rute cetak nota
    Route::get('/transaksi/{id}/cetak', [TransaksiController::class, 'cetak']);
});