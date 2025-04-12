<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus gambar dahulu
    $queryGambar = "SELECT gambar FROM gambar WHERE aktiviti_id='$id'";
    $resultGambar = mysqli_query($conn, $queryGambar);
    
    while ($gambar = mysqli_fetch_assoc($resultGambar)) {
        $filePath = "uploads/" . $gambar['gambar'];
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }

    mysqli_query($conn, "DELETE FROM gambar WHERE aktiviti_id='$id'");
    mysqli_query($conn, "DELETE FROM aktiviti WHERE id='$id'");

    echo "<script>alert('Aktiviti berjaya dipadam!'); window.location.href='Admin_aktiviti.php';</script>";
}
?>
