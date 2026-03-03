<?php
function konversi_bulan($b) {
    return match ($b) {
        1 => "Januari",
        2 => "Februari",
        3 => "Maret",
        4 => "April",
        5 => "Mei",
        6 => "Juni",
        7 => "Juli",
        8 => "Agustus",
        9 => "September",
        10 => "Oktober",
        11 => "November",
        12 => "Desember",
        default => "Bulan Kiamat",
    };
}

$t = 25; // Tanggal
$b = 2;  // Bulan (Februari)
$y = 2026; // Tahun

$converted_b = konversi_bulan($b);

echo $t . "/" . $converted_b . "/" . $y;
?>