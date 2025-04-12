<?php
$servername = "localhost"; // Tukar jika berbeza
$username = "root"; // Tukar jika ada username lain
$password = ""; // Tukar jika ada password
$dbname = "pibg_smksat"; // Pastikan nama database betul

// Buat sambungan
$conn = new mysqli($servername, $username, $password, $dbname);

// Semak sambungan
if ($conn->connect_error) {
    die("Sambungan gagal: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sebagai Sukarelawan</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #f0f0f0, #d9e4dd);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        h2 {
            color: #b22222;
            font-weight: 600;
        }
        p {
            color: #555;
            font-size: 14px;
            margin-bottom: 20px;
        }
        input, select, button {
            width: 95%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 16px;
        }
        button {
            background-color: #b22222;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border: none;
            transition: 0.3s;
        }
        button:hover {
            background-color: #8b1a1a;
        }
        .secondary-btn {
            background-color: #444;
        }
        .secondary-btn:hover {
            background-color: #222;
        }
    </style>
</head>
<body>
    <br>
    <div class="container">
        <h2>Daftar Sebagai Sukarelawan</h2>
        <p>Isi maklumat anda untuk menyertai program sukarelawan PIBG.</p>
        <form action="proses_daftar.php" method="POST">
            <input type="text" name="nama" placeholder="Nama Penuh" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="telefon" placeholder="No. Telefon" required>
            <input type="bidang" name="bidang" placeholder="Bidang Sukarelawan" required>
            
            <button type="submit">Daftar Sekarang</button>
        </form>
    </div>
    <br>
</body>
</html>

