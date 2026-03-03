<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_database"; //Nama Database
// melakukan koneksi ke db
$koneksi = mysqli_connect(hostname: $host, username: $user, password: $pass, database: $db);
if(!$koneksi){
echo "Gagal konek: " . die(mysqli_error($koneksi));
}
?>