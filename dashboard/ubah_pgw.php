<?php

require_once 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$bagian = $_POST['bagian'];

$query = "UPDATE pegawai SET nama = '$nama', bagian = '$bagian'  WHERE nik = '$nik'";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}
header("Location: pegawai.php");
exit;
?>