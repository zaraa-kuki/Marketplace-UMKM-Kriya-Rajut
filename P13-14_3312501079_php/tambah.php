<?php
include 'koneksi.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

// Validasi file gambar (foto)
$foto = $_FILES['foto']['name'];
$ukuran_foto = $_FILES['foto']['size'];
$tmp_foto = $_FILES['foto']['tmp_name'];
$ekstensi_foto_diperbolehkan = array('jpg', 'jpeg', 'png');

// Cara ambil ekstensi: pecah dulu stringnya jadi array pake explode
$x_foto = explode('.', $foto); 
$ekstensi_foto = strtolower(end($x_foto));
$path_foto = "uploads/" . $foto;

// Validasi file dokumen (file pendukung)
$file_pendukung = $_FILES['file_pendukung']['name'];
$ukuran_file_pendukung = $_FILES['file_pendukung']['size'];
$tmp_file_pendukung = $_FILES['file_pendukung']['tmp_name'];
$ekstensi_file_diperbolehkan = array('pdf', 'docx');
$x_file_pendukung = explode('.', $file_pendukung);
$ekstensi_file_pendukung = strtolower(end($x_file_pendukung));
$path_file_pendukung = "uploads/" . $file_pendukung;

// Validasi apakah NIS sudah ada di database
$checkNISQuery = "SELECT * FROM calon_mhs WHERE nis='$nis'";
$result = mysqli_query($koneksi, $checkNISQuery);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Data dengan NIS $nis sudah ada!'); window.history.back();</script>";
    exit();
}

// Validasi ekstensi dan ukuran file
if (in_array($ekstensi_foto, $ekstensi_foto_diperbolehkan) && $ukuran_foto <= 2000000) {
    if (in_array($ekstensi_file_pendukung, $ekstensi_file_diperbolehkan) && $ukuran_file_pendukung <= 1000000) {
        
        // Cek apakah folder uploads ada, kalau gak ada dibuatin
        if (!is_dir('uploads')) {
            mkdir('uploads');
        }

        // Pindahkan file ke folder tujuan
        if (move_uploaded_file($tmp_foto, $path_foto) && move_uploaded_file($tmp_file_pendukung, $path_file_pendukung)) {
            // Simpan data ke database
            $query = "INSERT INTO calon_mhs (nis, nama, jk, telepon, alamat, foto, file_pendukung) VALUES ('$nis', '$nama', '$jk', '$telepon', '$alamat', '$foto', '$file_pendukung')";

            if (mysqli_query($koneksi, $query)) {
                echo "<script>alert('Data berhasil ditambahkan'); window.location='index.php';</script>";
            } else {
                echo "<script>alert('Gagal database: " . mysqli_error($koneksi) . "'); window.history.back();</script>";
            }
        } else {
            echo "<script>alert('Gagal mengunggah file ke folder uploads'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('File dokumen tidak valid (harus pdf/docx) atau kegedean!'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('File gambar tidak valid (harus jpg/png) atau kegedean!'); window.history.back();</script>";
}
?>