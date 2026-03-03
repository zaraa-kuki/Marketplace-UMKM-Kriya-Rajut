<?php

require_once 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];

$query = "UPDATE mahasiswa SET nama = '$nama', jurusan = '$jurusan', angkatan = '$angkatan' WHERE nim = '$nim'";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}
header("Location: mahasiswa.php");
exit;
?>