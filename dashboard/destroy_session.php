<?php
session_start(); // Memulai session

// Menghapus semua session
session_unset();
session_destroy();

echo "Session telah dihapus. <a href='set_session.php'>Set Ulang Session</a>";
?>