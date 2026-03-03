<?php
session_start();
include 'koneksi.php';

$success = null;
$error = null;

 // Hapus session agar tidak muncul lagi saat refresh
if (isset($_SESSION['pesan_sukses'])) {
    $success = $_SESSION['pesan_sukses'];
    unset($_SESSION['pesan_sukses']);
} elseif (isset($_SESSION['pesan_error'])) {
    $error = $_SESSION['pesan_error'];
    unset($_SESSION['pesan_error']);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tambah trim() untuk menghapus spasi ekstra di awal/akhir
    $id_user = trim['id_user'];
    $user_input = trim['user'];
    $pass_input = $_POST['pass'];
    $role_input = $_POST['role'];

    if (empty($id_user) || empty($user_input) || empty($pass_input) || empty($role_input)) {
        $error = "Semua field wajib diisi!";
    } else {

        $hashed_pass = password_hash($pass_input, PASSWORD_DEFAULT);
        $query_insert = "INSERT INTO tabel_user (id, username, password, role) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($koneksi, $query_insert);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $id_user, $user_input, $hashed_pass, $role_input);
            
        // Kode redirect dan session (PRG Pattern)
            if (mysqli_stmt_execute($stmt)) {
                // Tambah htmlspecialchars() saat menyimpan username ke session
                $_SESSION['pesan_sukses'] = "Akun pengguna baru dengan username **" . htmlspecialchars($user_input) . "** berhasil didaftarkan! Silakan login.";
                header("Location: registrasi.php");
                exit();
            } else {
                // Error message diset ke session dan di-redirect
                $_SESSION['pesan_error'] = "Gagal mendaftarkan akun. Kemungkinan ID atau Username sudah terdaftar.";
                header("Location: registrasi.php");
                exit();
            }
            mysqli_stmt_close($stmt);
        } else {
            $error = "Kesalahan dalam persiapan query: " . mysqli_error($koneksi);
        }
    }

    if ($error) {
        $_SESSION['pesan_error'] = $error;
        header("Location: registrasi.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Akun Internal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4 shadow">
                    <h3 class="text-center">Daftar Akun pengguna</h3>

                    <?php if (isset($success)): ?>
                        <div class="alert alert-success mt-3"><?php echo $success; ?></div>
                    <?php elseif (isset($error)): ?>
                        <div class="alert alert-danger mt-3"><?php echo $error; ?></div>
                    <?php endif; ?>

                    <form method="POST" action="">
                    <div class="mb-3">
                        <label for="id_user" class="form-label">ID Pengguna</label>
                        <input type="text" class="form-control" id="id_user" name="id_user" required value="<?php echo isset($_POST['id_user']) ? htmlspecialchars($_POST['id_user']) : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="user" class="form-label">Username</label>
                        <input type="text" class="form-control" id="user_input" name="user" required value="<?php echo isset($_POST['user']) ? htmlspecialchars($_POST['user']) : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Level Akses (Role)</label>
                        <select class="form-select" id="role" name="role" required>
                            <option value="">Pilih Role...</option>
                            <option value="admin_login" <?php echo (isset($_POST['role']) && $_POST['role'] == 'admin_login') ? 'selected' : ''; ?>>Admin</option>
                            <option value="dosen_login" <?php echo (isset($_POST['role']) && $_POST['role'] == 'dosen_login') ? 'selected' : ''; ?>>Dosen</option>
                            <option value="pegawai_login" <?php echo (isset($_POST['role']) && $_POST['role'] == 'pegawai_login') ? 'selected' : ''; ?>>Pegawai</option>
                        </select>
                    </div>
                        <button type="submit" class="btn btn-primary w-100">Daftar Akun</button>
                    </form>
                </div>
                <div class="text-center mt-3">
                    <a href="login.php" class="btn btn-secondary">Sudah punya akun? Login di sini</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>