<?php  
include 'config.php';

// Semak sambungan database
if (!$conn) {
    die("Sambungan database gagal: " . mysqli_connect_error());
}

// Semak jika pengguna telah mendaftar
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM sukarelawan WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query gagal: " . mysqli_error($conn));
    } 

    $sukarelawan = mysqli_fetch_assoc($result);

    if (!$sukarelawan) {
        die("Ralat: ID tidak wujud dalam database!");
    }
} else {
    echo "<script>alert('Ralat: Tiada ID yang diterima!'); window.location.href='daftarsukarelawan.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sukarelawan</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #e6f0e6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 100%;
            max-width: 400px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #a32020;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #333;
            text-align: left;
            margin: 5px 0;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            text-align: center;
        }
        .btn-primary {
            background-color: #a32020;
            color: white;
        }
        .btn-secondary {
            background-color: #333;
            color: white;
        }
        .profil-info p {
            margin-bottom: 10px;
            font-size: 18px; /* Saiz teks lebih selesa */
            line-height: 1.5; /* Jarak antara baris */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Profil Sukarelawan</h2>
        <div class="profil-info">
    <p><strong>Nama Penuh:</strong> <?php echo htmlspecialchars($sukarelawan['nama']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($sukarelawan['email']); ?></p>
    <p><strong>No. Telefon:</strong> <?php echo htmlspecialchars($sukarelawan['telefon']); ?></p>
    <p><strong>Bidang Sukarelawan:</strong> <?php echo htmlspecialchars($sukarelawan['bidang']); ?></p>
</div>


        <a href="edit_sukarelawan.php?id=<?php echo $sukarelawan['id']; ?>" class="btn btn-primary">Kemas Kini Maklumat</a>
        <a href="sukarelawanPIBG.php" class="btn btn-secondary">Laman Peluang Sukarelawan</a>
    </div>
</body>
</html>
