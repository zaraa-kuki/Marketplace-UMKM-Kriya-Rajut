<?php
function get_members() {
    return ["ani", "budi", "cici", "doni", "eko", "fulan"];
}

function cek_membership($nama) {
    $daftar = get_members();
    if (in_array($nama, $daftar)) {
        return true;
    } else {
        return false;
    }
}

function get_diskon() {
    return 30/100;
}

function get_member_diskon() {
    return 50/100;
}

function total_belanja($h, $j) {
    return $h * $j;
}

function total_diskon($h, $j, $m) {
    if (cek_membership($m) == true) {
        return $h * $j * get_member_diskon();
    } else {
        return $h * $j * get_diskon();
    }
}

$harga = 10000;  // Contoh input harga
$jumlah = 2;     // Contoh input jumlah
$member = "nadia"; // Contoh input nama member

// --- PROSES HITUNG ---
$total_akhir = total_belanja($harga, $jumlah) - total_diskon($harga, $jumlah, $member);

// --- OUTPUT ---
echo "Total harga setelah diskon adalah " . $total_akhir;
?>