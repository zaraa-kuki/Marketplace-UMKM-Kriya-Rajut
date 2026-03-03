<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Data_Calon_Mahasiswa.xls");
include 'koneksi.php';
echo "<table border='1'>";
echo "<thead>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Alamat</th>
        </tr>
    </thead>";

$query = mysqli_query($koneksi, "SELECT * FROM calon_mhs");
while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr>
            <td>{$row['nis']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['jk']}</td>
            <td>{$row['telepon']}</td>
            <td>{$row['alamat']}</td>
        </tr>";
}
echo "</table>";
?>