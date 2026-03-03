<?php
// inclue database connnection file
include 'koneksi.php';
$nidn = $_GET['nidn'];
$result = mysqli_query($koneksi, "DELETE FROM dosen WHERE nidn= '$nidn'");
header("Location;dosen.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Daftar Dosen</title>

    <style>
        .nav-link:hover {
            background-color: gold;
            color: white !important;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">SELAMAT DATANG ADMIN</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="ms-auto d-flex align-items-center">
                    <div class="icon">
                        <i class="fas fa-envelope-square me-3"></i>
                        <i class="fas fa-bell-slash me-3"></i>
                        <i class="fas fa-user-circle me-3"></i>
                        <i class="fas fa-sign-out-alt me-3"></i>
                    </div>
                </div>
            </div>

        </div>
    </nav>

    <div class="row g-0 mt-5">

    <!-- SIDEBAR -->
    <div class="col-md-2 bg-info mt-2 pt-4">
        <ul class="nav flex-column ms-3 mb-5">
            <li class="nav-item">
                <a class="nav-link active text-white" href="dashboard.php">
                        <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                </a>
               <hr class="bg-secondary">
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="mahasiswa.php">
                    <i class="fas fa-user-graduate me-2"></i> Daftar Mahasiswa
                </a>
                 <hr class="bg-secondary">
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="dosen.php">
                    <i class="fas fa-chalkboard-teacher me-2"></i> Daftar Dosen
               </a>
                <hr class="bg-secondary">
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="pegawai.php">
                    <i class="fas fa-users me-2"></i> Daftar Pegawai
                </a>
                 <hr class="bg-secondary">
            </li>
        </ul>
    </div>

    <!-- CONTENT -->
    <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-chalkboard-teacher me-2"></i> Daftar Dosen</h3>
        <hr>
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
            <i class="fas fa-plus-circle me-2"></i> TAMBAH DATA DOSEN
        </button>

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahDataLabel">Tambah Data Dosen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="tambah_dsn.php" method="POST">
                        <div class="mb-3">
                            <label for="nidn" class="form-label">NIDN</label>
                            <input type="text" class="form-control" id="nidn" name="nidn" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Dosen</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NIDN</th>
                        <th scope="col">NAMA DOSEN</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">JABATAN</th>
                      
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'koneksi.php';
                    $query = mysqli_query($koneksi, "SELECT * FROM dosen");
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nidn']; ?></td>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['alamat']; ?></td>
                            <td><?= $data['jabatan']; ?></td>
                            <td>
                                <button class="btn btn-success btn-sm me-1 edit-button" data-bs-toggle="modal"
                                    data-bs-target="#editDataModal" data-nidn="<?php echo $data['nidn']; ?>"
                                    data-nama="<?php echo $data['nama']; ?>" data-alamat="<?php echo $data['alamat']; ?>"
                                    data-jabatan="<?php echo $data['jabatan']; ?>">
                                    <i class="fas fa-edit"></i> Edit
                                </button>

                                <a href="hapus_dsn.php?nidn=<?php echo $data['nidn']; ?>" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
            <!-- Modal Edit Data -->
    <div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="editDataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDataLabel">Edit Data Dosen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="ubah_dsn.php" method="POST">
                        <div class="mb-3">
                            <label for="edit-nidn" class="form-label">NIDN</label>
                            <input type="text" class="form-control" id="edit-nidn" name="nidn" required>
                        </div>                        
                        <div class="mb-3">
                            <label for="edit-nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="edit-nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="edit-alamat" name="alamat" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="edit-jabatan" name="jabatan" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
            document.addEventListener('DOMContentLoaded', function () {
                const editButtons = document.querySelectorAll('.edit-button');

                editButtons.forEach(button => {
                    button.addEventListener('click', function () {

                        const nidn = this.getAttribute('data-nidn');
                        const nama = this.getAttribute('data-nama');
                        const alamat = this.getAttribute('data-alamat');
                        const jabatan = this.getAttribute('data-jabatan');

                        document.getElementById('edit-nidn').value = nidn;
                        document.getElementById('edit-nama').value = nama;
                        document.getElementById('edit-alamat').value = alamat;
                        document.getElementById('edit-jabatan').value = jabatan;
                    });
                });
            });
        </script>
</body>
</html>