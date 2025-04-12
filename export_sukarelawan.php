<?php
// Sambungkan ke database
include 'config.php';

// Set header untuk eksport fail Excel
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=senarai_sukarelawan.xls");
header("Pragma: no-cache");
header("Expires: 0");

// Dapatkan data sukarelawan
$query = "SELECT nama, email, telefon, bidang FROM sukarelawan ORDER BY id DESC";
$result = mysqli_query($conn, $query);

// Paparkan tajuk kolum
echo "Nama\tEmail\tTelefon\tBidang\n";

// Paparkan data baris demi baris
while ($row = mysqli_fetch_assoc($result)) {
    echo "{$row['nama']}\t{$row['email']}\t{$row['telefon']}\t{$row['bidang']}\n";
}

exit;
?>
