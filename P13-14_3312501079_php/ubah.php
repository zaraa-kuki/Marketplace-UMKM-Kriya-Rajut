<?php
include 'koneksi.php'; 

$nis = $_POST['nis'];
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$jk = $_POST['jk'];
$telepon = $_POST['telepon'];
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);

// Proses Foto
if (isset($_FILES['foto']['name']) && $_FILES['foto']['name'] != '') {
    $foto = $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/" . $foto);
    
    // Hapus foto lama
    $qOld = mysqli_query($koneksi, "SELECT foto FROM calon_mhs WHERE nis = '$nis'");
    $old = mysqli_fetch_assoc($qOld);
    if ($old['foto'] && file_exists("uploads/".$old['foto'])) {
        unlink("uploads/".$old['foto']);
    }
} else {
    $qOld = mysqli_query($koneksi, "SELECT foto FROM calon_mhs WHERE nis = '$nis'");
    $foto = mysqli_fetch_assoc($qOld)['foto'];
}

// Proses File Pendukung
if (isset($_FILES['file_pendukung']['name']) && $_FILES['file_pendukung']['name'] != '') {
    $file_pendukung = $_FILES['file_pendukung']['name'];
    move_uploaded_file($_FILES['file_pendukung']['tmp_name'], "uploads/" . $file_pendukung);
    
    // Hapus file lama
    $qOld = mysqli_query($koneksi, "SELECT file_pendukung FROM calon_mhs WHERE nis = '$nis'");
    $old = mysqli_fetch_assoc($qOld);
    if ($old['file_pendukung'] && file_exists("uploads/".$old['file_pendukung'])) {
        unlink("uploads/".$old['file_pendukung']);
    }
} else {
    $qOld = mysqli_query($koneksi, "SELECT file_pendukung FROM calon_mhs WHERE nis = '$nis'");
    $file_pendukung = mysqli_fetch_assoc($qOld)['file_pendukung'];
}

$queryUpdate = "UPDATE calon_mhs SET 
                nama = '$nama',
                jk = '$jk',
                telepon = '$telepon',
                alamat = '$alamat',
                foto = '$foto',
                file_pendukung = '$file_pendukung'
                WHERE nis = '$nis'";

if (mysqli_query($koneksi, $queryUpdate)) {
    header("Location: index.php?status=success");
} else {
    echo "Gagal: " . mysqli_error($koneksi);
}
?>