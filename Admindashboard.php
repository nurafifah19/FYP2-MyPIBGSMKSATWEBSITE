<?php 
session_start();
include 'config.php';

// Semak sama ada admin sudah login
if (!isset($_SESSION['admin_id'])) {
    header("Location: loginAdmin.php");
    exit();
}

$admin_nama = $_SESSION['admin_nama'];

// Ambil jumlah sumbangan
$query_sumbangan = "SELECT SUM(jumlah) AS total_sumbangan FROM sumbangan";
$result_sumbangan = mysqli_query($conn, $query_sumbangan);
$data_sumbangan = mysqli_fetch_assoc($result_sumbangan);
$total_sumbangan = $data_sumbangan['total_sumbangan'] ?? 0;

// Ambil jumlah sukarelawan
$query_sukarelawan = "SELECT COUNT(*) AS total_sukarelawan FROM sukarelawan";
$result_sukarelawan = mysqli_query($conn, $query_sukarelawan);
$data_sukarelawan = mysqli_fetch_assoc($result_sukarelawan);
$total_sukarelawan = $data_sukarelawan['total_sukarelawan'] ?? 0;

// Ambil jumlah aktiviti berlangsung
$query_aktiviti = "SELECT COUNT(*) AS total_aktiviti FROM aktiviti WHERE status = 'aktif'";
$result_aktiviti = mysqli_query($conn, $query_aktiviti);
$data_aktiviti = mysqli_fetch_assoc($result_aktiviti);
$total_aktiviti = $data_aktiviti['total_aktiviti'] ?? 0;

?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Georgia, serif;
            background-color: #F2F6F9;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: #343A40;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            color: white;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 15px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center">Admin Panel</h4>
        <a href="senaraisumbangan.php">📄 Resit Sumbangan</a>
        <a href="senaraisukarelawan.php">🙋‍♂️ Senarai Sukarelawan</a>
        <a href="Admin_aktiviti.php">📅 Aktiviti & Program</a>
        <a href="logoutAdmin.php">🚪 Logout</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h2 class="text-danger fw-bold">Selamat Datang, <?php echo $admin_nama; ?>!</h2>
        <p class="text-muted">Berikut adalah ringkasan sistem PIBG.</p>

        <div class="row">
            <div class="col-md-4">
                <div class="card p-3">
                    <h5 class="fw-bold">💰 Jumlah Sumbangan</h5>
                    <p>RM <?php echo number_format($total_sumbangan, 2); ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h5 class="fw-bold">🙋‍♂️ Jumlah Sukarelawan</h5>
                    <p><?php echo $total_sukarelawan; ?> Orang</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h5 class="fw-bold">📅 Aktiviti Berlangsung</h5>
                    <p><?php echo $total_aktiviti; ?> Program Aktif</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
