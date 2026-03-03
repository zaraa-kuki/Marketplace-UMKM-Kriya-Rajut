<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_input = $_POST['user']; 
    $pass_input = $_POST['pass'];
    $user_input = mysqli_real_escape_string($koneksi, $user_input);

    $data_user = null;

    // --- TABEL MAHASISWA ---
    $query_mhs = "SELECT nim as id, password, nama, 'mahasiswa_login' as status_level FROM mahasiswa WHERE nim = ?";
    $stmt = mysqli_prepare($koneksi, $query_mhs);
    mysqli_stmt_bind_param($stmt, "s", $user_input);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) > 0) {
        $data_user = mysqli_fetch_assoc($result);
    } else {

        // --- TABEL ADMIN ---
        $query_admin = "SELECT username as id, password, username as nama, 'admin_login' as status_level FROM tabel_user WHERE username = ?";
        
        $stmt_admin = mysqli_prepare($koneksi, $query_admin);
        mysqli_stmt_bind_param($stmt_admin, "s", $user_input);
        mysqli_stmt_execute($stmt_admin);
        $result_admin = mysqli_stmt_get_result($stmt_admin);
        
        if (mysqli_num_rows($result_admin) > 0) {
            $data_user = mysqli_fetch_assoc($result_admin);
        }
    }
    
    // --- VERIFIKASI DAN PEMBUATAN SESI ---
    if ($data_user && password_verify($pass_input, $data_user['password'])) {
        
        $_SESSION['id'] = $data_user['id']; 
        $_SESSION['nama'] = $data_user['nama'];
        $_SESSION['status'] = $data_user['status_level'];
        
        header("Location: dashboard.php"); 
        exit();

    } else {
        $error = "Username atau Password salah!";
    }
    
    if (isset($stmt)) mysqli_stmt_close($stmt);
    if (isset($stmt_admin)) mysqli_stmt_close($stmt_admin);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card p-4 shadow">
                    <h3 class="text-center">Login</h3>

                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    
                    <form method="POST" action="">
                        <div clas="mb-3">
                            <label for="user" class="form-label">Username</label>
                            <input type="text" class="form-control" id="user" name="user" required>
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" id="pass" name="pass" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                    <p class="text-center mt-3">
                        Belum punya akun? <a href="registrasi.php" data-bs-toggle="modal" data-bs-target="registerModal">Buat akun</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script>
    // Menghilangkan pesan error setelah 3 detik
    const alertBox = document.querySelector('.alert');
    if (alertBox) {
        setTimeout(() => {
            alertBox.style.transition = "opacity 0.5s";
            alertBox.style.opacity = "0";
            setTimeout(() => alertBox.remove(), 500);
        }, 3000); 
    }
    </script>
</body>
</html>