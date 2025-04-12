<?php 
$servername = "localhost"; // Tukar jika berbeza
$username = "root"; // Tukar jika ada username lain
$password = ""; // Tukar jika ada password
$dbname = "pibg_smksat"; // Pastikan nama database betul

// Buat sambungan
$conn = new mysqli($servername, $username, $password, $dbname);

// Semak sambungan
if ($conn->connect_error) {
    die("Sambungan ke database gagal: " . $conn->connect_error);
}

// Tetapkan set aksara kepada UTF-8 untuk mengelakkan masalah aksara khas
$conn->set_charset("utf8mb4");

?>

