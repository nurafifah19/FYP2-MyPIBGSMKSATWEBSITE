<?php 
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM sukarelawan WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
} else {
    echo "ID tidak sah!";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $bidang = $_POST['bidang'];

    $updateQuery = "UPDATE sukarelawan SET nama='$nama', email='$email', telefon='$telefon', bidang='$bidang' WHERE id=$id";
    if (mysqli_query($conn, $updateQuery)) {
    echo "<script>alert('Maklumat berjaya dikemas kini!'); window.location.href='profil_sukarelawan.php?id=$id';</script>";
    } else {
        echo "Ralat: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sukarelawan</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e3edea;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            width: 420px;
            text-align: center;
        }

        h2 {
            color: #b22222;
            margin-bottom: 10px;
        }

        p {
            font-size: 14px;
            color: #555;
            margin-bottom: 20px;
        }

        input[type="text"], input[type="email"] {
            width: 95%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-submit {
            background-color: #b22222;
            color: white;
        }

        .btn-submit:hover {
            background-color: #8b1a1a;
        }

        .btn-back {
            background-color: #333;
            color: white;
        }

        .btn-back:hover {
            background-color: #222;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Edit Maklumat Sukarelawan</h2>
        <p>Sila kemas kini maklumat anda .</p>
        <form method="post">
            <input type="text" name="nama" value="<?php echo htmlspecialchars($row['nama']); ?>" required placeholder="Nama Penuh">
            <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required placeholder="Email">
            <input type="text" name="telefon" value="<?php echo htmlspecialchars($row['telefon']); ?>" required placeholder="No. Telefon">
            <input type="text" name="bidang" value="<?php echo htmlspecialchars($row['bidang']); ?>" required placeholder="Bidang Sukarelawan">
            <button type="submit" class="btn btn-submit">Simpan</button>
        </form>
        <a href="profil_sukarelawan.php?id=<?php echo $sukarelawan['id']; ?>">
            <button class="btn btn-back">Profil Sukarelawan</button>
        </a>
    </div>

</body>
</html>
