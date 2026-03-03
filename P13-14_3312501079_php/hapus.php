<?php
include 'koneksi.php';
$nis = $_GET['nis'];

$query = mysqli_query($koneksi, "SELECT * FROM calon_mhs WHERE nis = '$nis'");
$data = mysqli_fetch_assoc($query);

unlink("uploads/" . $data['foto']);
unlink("uploads/" . $data['file_pendukung']);

mysqli_query($koneksi, "DELETE FROM calon_mhs WHERE nis = '$nis'");
echo "<script>alert('Data berhasil dihapus'); window.location='index.php';</script>";
?>