<?php
// Sambungkan ke database
include 'config.php';

// Dapatkan parameter carian jika ada
$search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';

// Dapatkan senarai sukarelawan dari database berdasarkan carian
$query = "SELECT id, nama, email, telefon, bidang FROM sukarelawan WHERE nama LIKE '%$search%' OR bidang LIKE '%$search%' ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Sukarelawan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
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
            padding: 15px;
            margin-bottom: 20px;
        }
        .table th { 
            background: #424242; 
            color: white; 
        }
        .btn-dark:hover { 
            background: #212121; 
        }
    </style>
</head>
<body>
        <!-- Sidebar -->
        <div class="sidebar">
            <h4 class="text-center">Admin Panel</h4>
            <a href="Admindashboard.php">🖼 Laman Utama</a>
            <a href="senaraisumbangan.php">📄 Resit Sumbangan</a>
            <a href="senaraisukarelawan.php">🙋‍♂️ Senarai Sukarelawan</a>
            <a href="Admin_aktiviti.php">📅 Aktiviti & Program</a>
            <a href="logoutAdmin.php">🚪 Logout</a>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="container">
                <div class="card">
                    <h2 class="text-center">Senarai Sukarelawan</h2>
                    <div class="search-box text-center mb-3">
                        <form method="GET" action="">
                            <input type="text" name="search" class="form-control w-50 d-inline" placeholder="Cari Nama / Bidang" value="<?php echo htmlspecialchars($search); ?>">
                            <button type="submit" class="btn btn-dark">Cari</button>
                            <a href="export_sukarelawan.php" class="btn btn-success">Muat Turun Excel</a>
                        </form>
                    </div>
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No. Telefon</th>
                                <th>Bidang</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['nama']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['telefon']); ?></td>
                                <td><?php echo htmlspecialchars($row['bidang']); ?></td>
                                <td>
                                    <a href="AdminEdit_sukarelawan.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="delete_sukarelawan.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda pasti ingin memadam data ini?');">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>

