<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ListBarangController;

// --- Bagian Route Halaman Utama ---
// Sekarang kalau buka 127.0.0.1:8000 langsung ke halaman produk
Route::get('/', function () {
    return redirect('/produk-namonic');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::view('/home', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/register', 'register');

// --- Alur Pembelian ---
Route::view('/cart', 'cart');
Route::view('/checkout', 'checkout');
Route::view('/payment', 'payment');
Route::view('/receipt', 'receipt');

// --- Bagian Route untuk Login & Dashboard ---
Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);

// --- Bagian Tugas Praktikum 4 (Pake Controller) ---
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

// ============================================================
// --- TUGAS PRAKTIKUM 6 (MVC & Component) ---
// ============================================================

// Halaman Semua Produk (Data diambil dari ProdukController@index)
Route::get('/produk-namonic', [ProdukController::class, 'index']);

// Halaman Kategori
Route::get('/kategori/pakaian', [ProdukController::class, 'kategoriPakaian']);
Route::get('/kategori/aksesoris', [ProdukController::class, 'kategoriAksesoris']);
Route::get('/kategori/dekorasi', [ProdukController::class, 'kategoriDekorasi']);
Route::get('/kategori/amigurumi', [ProdukController::class, 'kategoriAmigurumi']);
Route::get('/kategori/tas-wadah', [ProdukController::class, 'kategoriTas']);