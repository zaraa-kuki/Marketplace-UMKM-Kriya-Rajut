<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Ini buat nampilin SEMUA produk (Halaman Utama Katalog)
    public function index()
    {
        $products = [
            ['title' => 'Tas Rajut', 'image' => 'tasrajut.jpeg', 'desc' => 'Tas rajut warna lembut untuk hangout.'],
            ['title' => 'Boneka', 'image' => 'boneka.jpeg', 'desc' => 'Boneka rajut handmade lucu dan imut.'],
            ['title' => 'Gantungan', 'image' => 'gantungan.jpeg', 'desc' => 'Gantungan kunci rajut mungil dan lucu.'],
            ['title' => 'Topi', 'image' => 'topipantai.jpeg', 'desc' => 'Topi rajut hangat dan nyaman.'],
            ['title' => 'Taplak Meja', 'image' => 'taplakmeja.jpeg', 'desc' => 'Taplak rajut motif bunga untuk dekorasi.'],
            ['title' => 'Syal Panjang', 'image' => 'syal.jpeg', 'desc' => 'Syal rajut warna cerah untuk musim dingin.'],
            ['title' => 'Cardigan Rajut', 'image' => 'cardigan.jpeg', 'desc' => 'Cardigan rajut untuk musim dingin.'],
            ['title' => 'Sarung bantal', 'image' => 'sarungbantal.png', 'desc' => 'Sarung bantal rajut lucu motif bunga.'],
        ];

        return view('pages.list_product', compact('products'));
    }

    // Kategori Pakaian
    public function kategoriPakaian()
    {
        $products = [
            ['title' => 'Syal Panjang', 'image' => 'syal.jpeg', 'desc' => 'Syal rajut warna cerah untuk musim dingin.'],
            ['title' => 'Cardigan Rajut', 'image' => 'cardigan.jpeg', 'desc' => 'Cardigan rajut untuk musim dingin.'],
        ];

        return view('pages.list_product', compact('products'));
    }
    
    // Kategori Aksesoris
    public function kategoriAksesoris()
    {
        $products = [
            ['title' => 'Topi', 'image' => 'topipantai.jpeg', 'desc' => 'Topi rajut hangat dan nyaman.'],
            ['title' => 'Gantungan', 'image' => 'gantungan.jpeg', 'desc' => 'Gantungan kunci rajut mungil dan lucu.'],
        ];
        return view('pages.list_product', compact('products'));
    }

    // Kategori Dekorasi
    public function kategoriDekorasi()
    {
        $products = [
            ['title' => 'Taplak Meja', 'image' => 'taplakmeja.jpeg', 'desc' => 'Taplak rajut motif bunga untuk dekorasi.'],
            ['title' => 'Sarung Bantal', 'image' => 'sarungbantal.png', 'desc' => 'Sarung bantal rajut lucu motif bunga.'],
        ];
        return view('pages.list_product', compact('products'));
    }

    // Kategori Amigurumi
    public function kategoriAmigurumi()
    {
        $products = [
            ['title' => 'Boneka', 'image' => 'boneka.jpeg', 'desc' => 'Boneka rajut handmade lucu dan imut.'],
        ];
        return view('pages.list_product', compact('products'));
    }

    // Kategori Tas & Wadah
    public function kategoriTas()
    {
        $products = [
            ['title' => 'Tas Rajut', 'image' => 'tasrajut.jpeg', 'desc' => 'Tas rajut warna lembut untuk hangout.'],
        ];
        return view('pages.list_product', compact('products'));
    }
}