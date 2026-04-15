<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ListBarangController;

// --- Bagian Route Halaman Utama (Pake Route::view buat mockup sesuai modul) ---
Route::get('/welcome', function () {
    return view('welcome');
});

// Sesuai instruksi modul poin 5 (mockup route -> view) [cite: 113-120]
Route::view('/home', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/register', 'register');

// Halaman Utama / Loading
Route::view('/', 'index'); 

// Alur Pembelian
Route::view('/cart', 'cart');
Route::view('/checkout', 'checkout'); // Isi data diri
Route::view('/payment', 'payment');   // Pilih metode bayar
Route::view('/receipt', 'receipt');   // Upload & Lihat bukti

// --- Bagian Route untuk Login, Dashboard, dan Produk ---
Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);

// --- Bagian Tugas Praktikum 4 (Pake Controller) ---
// Ini buat nampilin data array yang di-looping di tabel [cite: 37-41]
Route::get('/list-barang', [ListBarangController::class, 'tampilkan']);

// --- Bagian Admin Group ---
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});