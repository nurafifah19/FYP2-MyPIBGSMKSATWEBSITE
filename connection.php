<?php
$servername = "localhost";
$username = "root"; // Tukar jika perlu
$password = ""; // Tukar jika perlu
$database = "pibg_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Sambungan gagal: " . $conn->connect_error);
}
?>
