<?php

require_once 'koneksi.php';

$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];

$query = "UPDATE dosen SET nama = '$nama', alamat = '$alamat', jabatan = '$jabatan' WHERE nidn = '$nidn'";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}
header("Location: dosen.php");
exit;
?>