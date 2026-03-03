<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Calon Mahasiswa</title>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Data Calon Mahasiswa</h2>
    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Data</button>

    <!-- Tombol Export -->
     <div class="mb-3">
        <a href="export_excel.php" class="btn btn-primary">Export Excel</a>
        <a href="export_pdf.php" class="btn btn-danger">Export PDF</a>
     </div>
     
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Foto</th>
                <th>File Pendukung</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $query = mysqli_query($koneksi, "SELECT * FROM calon_mhs");
            while ($data = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?= $data['nis'];?></td>
                <td><?= $data['nama'];?></td>
                <td><?= $data['jk'];?></td>
                <td><?= $data['telepon'];?></td>
                <td><?= $data['alamat'];?></td>
                <td><img src="uploads/<?= $data['foto']; ?>" alt="Foto" width="100"></td>
                <td><a href="uploads/<?= $data['file_pendukung']; ?>" target="_blank">Download</a></td>
                <td>
                    <button class="btn btn-warning btn-edit"
                        data-nis="<?= $data['nis']; ?>"
                        data-nama="<?= $data['nama']; ?>"
                        data-jk="<?= $data['jk']; ?>"
                        data-telepon="<?= $data['telepon']; ?>"
                        data-alamat="<?= $data['alamat']; ?>"
                        data-foto="<?= $data['foto']; ?>"
                        data-filependukung="<?= $data['file_pendukung']; ?>">Edit
                    </button>
                    <a href="hapus.php?nis=<?= $data['nis']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="tambah.php" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nis" class="form-label">NIS</label>
                    <input type="text" class="form-control" id="nis" name="nis" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jk" name="jk" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto" required>
                </div>
                <div class="mb-3">
                    <label for="file_pendukung" class="form-label">File Pendukung</label>
                    <input type="file" class="form-control" id="file_pendukung" name="file_pendukung" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="ubah.php" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="editNis" name="nis">
                <div class="mb-3">
                    <label for="edit-nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="edit-nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="edit-jk" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="edit-jk" name="jk" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="edit-telepon" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="edit-telepon" name="telepon" required>
                </div>
                <div class="mb-3">
                    <label for="edit-alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="edit-alamat" name="alamat" required></textarea>
                </div>
                <div class="mb-3 text-center">
                    <label class="form-label fw-bold">Foto Saat ini</label><br>
                    <img id="editFotoPreview" src="" alt="Foto" width="150" class="mb-3 border rounded shadow-sm">
                    <div class="mt-2 text-start">
                        <label for="editFoto" class="form-label">Ganti Foto (Opsional)</label>
                        <input type="file" class="form-control" id="editFoto" name="foto">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">File Pendukung Saat ini</label><br>
                    <a id="editFilePreview" href="#" target="_blank" class="btn btn-info btn-sm mb-3">Buka File</a><br>
                    <label for="editFilePendukung" class="form-label">Ganti File Pendukung (Opsional)</label>
                    <input type="file" class="form-control" id="editFilePendukung" name="file_pendukung">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button> 
            </div>
        </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.querySelectorAll('.btn-edit').forEach(button => {
        button.addEventListener('click', function () {
            // 1. Ambil data dari atribut tombol
            const nis = this.dataset.nis;
            const nama = this.dataset.nama;
            const jk = this.dataset.jk;
            const telepon = this.dataset.telepon;
            const alamat = this.dataset.alamat;
            const foto = this.dataset.foto;
            const file = this.dataset.filependukung;

            // 2. Isi data ke form modal edit
            document.getElementById('editNis').value = nis;
            document.getElementById('edit-nama').value = nama;
            document.getElementById('edit-jk').value = jk;
            document.getElementById('edit-telepon').value = telepon;
            document.getElementById('edit-alamat').value = alamat;

            // 3. Preview Foto
            const fotoPreview = document.getElementById('editFotoPreview');
            if(foto) {
                fotoPreview.src = 'uploads/' + foto;
                fotoPreview.style.display = 'inline-block';
            } else {
                fotoPreview.style.display = 'none';
            }

            // 4. Preview File Pendukung
            const filePreview = document.getElementById('editFilePreview');
            if(file) {
                filePreview.href = 'uploads/' + file;
                filePreview.style.display = 'inline-block';
            } else {
                filePreview.style.display = 'none';
            }

            // 5. Trigger Modal pake cara Bootstrap 5 yang bener
            const editModalEl = document.getElementById('editModal');
            const modal = bootstrap.Modal.getOrCreateInstance(editModalEl);
            modal.show();
        });
    });
</script>
</body>
</html>