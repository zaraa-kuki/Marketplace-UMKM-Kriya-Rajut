<?php
// --- VARIABEL & TIPE DATA ---
$nama_siswa = "Zaraa";           // String
$nilai_tugas = 85;               // Integer
$sudah_selesai = true;           // Boolean

// --- FUNGSI 1: Menentukan Predikat (A, B, atau C) ---
function tentukan_predikat($nilai) {
    if ($nilai >= 85) {
        return "A (Sempurna)";
    } elseif ($nilai >= 75) {
        return "B (Bagus)";
    } else {
        return "C (Cukup)";
    }
}

// --- FUNGSI 2: Menampilkan Status Kelulusan ---
function tampilkan_hasil($nama, $nilai, $status) {
    // Memanggil Fungsi 1 di dalam Fungsi 2
    $predikat = tentukan_predikat($nilai);
    
    echo "--- LAPORAN TUGAS --- <br>";
    echo "Nama: " . $nama . "<br>";
    echo "Nilai: " . $nilai . "<br>";
    echo "Predikat: " . $predikat . "<br>";
    
    if ($status == true) {
        echo "Status: Tugas sudah dikirim ke Guru! ✅";
    } else {
        echo "Status: Tugas masih nyangkut di VS Code ❌";
    }
}

// --- PEMANGGILAN FUNGSI ---
tampilkan_hasil($nama_siswa, $nilai_tugas, $sudah_selesai);
?>