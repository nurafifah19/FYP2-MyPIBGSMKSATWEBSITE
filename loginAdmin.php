<?php 
session_start();
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $kata_laluan = $_POST['kata_laluan'];

    // Semak maklumat login dalam database
    $query = "SELECT * FROM admin WHERE email = '$email' AND kata_laluan = '$kata_laluan'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $admin = mysqli_fetch_assoc($result);
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_nama'] = $admin['nama'];

        // Redirect ke halaman khas admin
        header("Location: Admindashboard.php");
        exit();
    } else {
        $error_message = "Login gagal! Sila semak email dan kata laluan.";
    }
}
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Georgia, serif;
            background-color: #F2F6F9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .btn-primary {
            background-color: #C82333;
            border: none;
        }
        .btn-primary:hover {
            background-color: #A71D2A;
        }
        
        
        
        .custom-home-btn {
            background-color: #E74C3C; 
            color: white;
            border: none;
            font-size: 12px;
            padding: 8px;
        }
        .custom-home-btn:hover {
            background-color: #A71D2A; /* Warna hover sama seperti Login */
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h3 class="text-center text-danger fw-bold">Login Admin</h3>
        <p class="text-center text-muted">Masukkan maklumat anda untuk akses panel admin.</p>

        <?php if (isset($error_message)) : ?>
            <div class="alert alert-danger text-center" role="alert">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Kata Laluan</label>
                <input type="password" name="kata_laluan" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-2">Login</button>
            
            <a href="index.php" class="btn custom-home-btn w-100 mt-0">Laman Utama</a>

        </form>
    </div>

</body>
</html>
