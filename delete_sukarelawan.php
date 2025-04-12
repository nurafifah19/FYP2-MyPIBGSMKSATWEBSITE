<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM sukarelawan WHERE id = $id";

    if (mysqli_query($conn, $deleteQuery)) {
        echo "<script>alert('Rekod berjaya dipadam!'); window.location.href='senaraisukarelawan.php';</script>";
    } else {
        echo "Ralat: " . mysqli_error($conn);
    }
} else {
    echo "ID tidak sah!";
}
?>
