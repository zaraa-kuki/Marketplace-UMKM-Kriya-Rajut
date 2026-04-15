<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    // 1. Tambahin fungsi getData di sini [cite: 14]
    public function getData()
    {
        $dataBarang = [
            ['id' => 1, 'nama' => 'Beras Pandan Wangi', 'harga' => 15000],
            ['id' => 2, 'nama' => 'Tepung Terigu', 'harga' => 20000],
            ['id' => 3, 'nama' => 'Baygon Cair', 'harga' => 13500],
            ['id' => 4, 'nama' => 'Penyedap Royco', 'harga' => 3200],
            ['id' => 5, 'nama' => 'Minyak Goreng', 'harga' => 14000],
        ];
        return $dataBarang; // [cite: 16-35]
    }

    // 2. Ubah fungsi tampilkan biar nggak pake ($id, $nama) lagi 
    public function tampilkan()
    {
        $data = $this->getData(); // Ambil data dari fungsi di atas [cite: 39]
        return view('list_barang', compact('data')); // Kirim ke view list_barang [cite: 40]
    }
}