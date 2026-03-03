<?php
session_start(); // Memulai session

// Memeriksa apakah session 'nama' tersedia
if(isset($_SESSION['nama'])) {
    echo "Nama: " . $_SESSION['nama'] . "<br>";
    echo "Role: " . $_SESSION['role'] . "<br>";
    echo "<a href='destroy_session.php'>Hapus Session</a>";
} else {
    echo "Session belum dibuat. Silakan buat session terlebih dahulu di <a href='set_session.php'>set_session.php</a>.";
}
?>