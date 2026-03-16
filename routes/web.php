<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ListBarangController;

// --- Bagian Route Halaman Utama ---
Route::get('/welcome', function () {
    return view('welcome');
});

// --- Bagian Route untuk Login, Dashboard, dan Produk ---
Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);

// --- Bagian Latihan Sebelumnya ---
Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

// --- Bagian Admin Group ---
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});