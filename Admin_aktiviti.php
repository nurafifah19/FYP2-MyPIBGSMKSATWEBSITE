<?php  
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tajuk = mysqli_real_escape_string($conn, $_POST['tajuk']);
    $rumusan = mysqli_real_escape_string($conn, $_POST['rumusan']);
    $tarikh = mysqli_real_escape_string($conn, $_POST['tarikh']);
    
    $sql = "INSERT INTO aktiviti (tajuk, rumusan, tarikh) VALUES ('$tajuk', '$rumusan', '$tarikh')";
    if (mysqli_query($conn, $sql)) {
        $aktiviti_id = mysqli_insert_id($conn);
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        
        if (!empty($_FILES['gambar']['name'][0])) {
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            foreach ($_FILES['gambar']['tmp_name'] as $key => $tmp_name) {
                $fileName = basename($_FILES['gambar']['name'][$key]);
                $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                $newFileName = time() . '_' . uniqid() . '.' . $fileExt;
                $targetFile = $uploadDir . $newFileName;

                if (in_array($fileExt, $allowedExtensions) && move_uploaded_file($tmp_name, $targetFile)) {
                    $sqlGambar = "INSERT INTO gambar (aktiviti_id, gambar) VALUES ('$aktiviti_id', '$newFileName')";
                    mysqli_query($conn, $sqlGambar);
                }
            }
        }

        echo "<script>alert('Aktiviti dan gambar berjaya ditambah!'); window.location.href='Admin_aktiviti.php';</script>";
    } else {
        echo "<script>alert('Ralat: Tidak dapat menambah aktiviti.');</script>";
    }
}

// Ambil data aktiviti
$query = "SELECT * FROM aktiviti ORDER BY tarikh DESC";
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urus Aktiviti & Program</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
        .table th { background: #424242; color: white; }
        .btn-dark:hover { background: #212121; }
        .carousel-item img { width: 100px; height: 100px; object-fit: cover; }
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
                    <h2 class="text-center">Tambah Aktiviti & Program</h2>
                    <form method="POST" enctype="multipart/form-data" class="mt-4">
                        <div class="mb-3">
                            <label for="tajuk" class="form-label">Tajuk :</label>
                            <input type="text" name="tajuk" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="rumusan" class="form-label">Rumusan :</label>
                            <textarea name="rumusan" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tarikh" class="form-label">Tarikh :</label>
                            <input type="date" name="tarikh" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Pilih Gambar:</label>
                            <input type="file" name="gambar[]" class="form-control" multiple accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-success">Tambah Aktiviti</button>
                    </form>
                </div>

                <div class="card mt-4">
                    <h2 class="text-center">Senarai Aktiviti</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Rumusan</th>
                                <th>Tarikh</th>
                                <th>Gambar</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['tajuk']); ?></td>
                                <td><?php echo htmlspecialchars($row['rumusan']); ?></td>
                                <td><?php echo htmlspecialchars($row['tarikh']); ?></td>
                                <td>
                                    <?php
                                    $aktiviti_id = $row['id'];
                                    $queryGambar = "SELECT gambar FROM gambar WHERE aktiviti_id = '$aktiviti_id'";
                                    $resultGambar = mysqli_query($conn, $queryGambar);
                                    
                                    if (mysqli_num_rows($resultGambar) > 0) {
                                        echo '<div id="carousel'.$aktiviti_id.'" class="carousel slide" data-bs-ride="carousel">';
                                        echo '<div class="carousel-inner">';
                                        $active = "active";
                                        while ($gambar = mysqli_fetch_assoc($resultGambar)) {
                                            echo '<div class="carousel-item '.$active.'">';
                                            echo '<img src="uploads/'.$gambar['gambar'].'" class="d-block mx-auto">';
                                            echo '</div>';
                                            $active = "";
                                        }
                                        echo '</div>';
                                        echo '<button class="carousel-control-prev" type="button" data-bs-target="#carousel'.$aktiviti_id.'" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>';
                                        echo '<button class="carousel-control-next" type="button" data-bs-target="#carousel'.$aktiviti_id.'" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>';
                                        echo '</div>';
                                    } else {
                                        echo 'Tiada gambar';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="edit_aktiviti.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="delete_aktiviti.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Padam aktiviti?');">Padam</a>
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


