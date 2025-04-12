<?php
include 'config.php'; // Sambungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari borang
    $nama = $conn->real_escape_string($_POST['nama']);
    $email = $conn->real_escape_string($_POST['email']);
    $telefon = $conn->real_escape_string($_POST['telefon']);
    $bidang = $conn->real_escape_string($_POST['bidang']);

    // Semak jika semua input diisi
    if (!empty($nama) && !empty($email) && !empty($telefon) && !empty($bidang)) {
        // Masukkan data ke dalam database
        $sql = "INSERT INTO sukarelawan (nama, email, telefon, bidang) 
                VALUES ('$nama', '$email', '$telefon', '$bidang')";

        if ($conn->query($sql) === TRUE) {
    // Ambil ID yang baru dimasukkan
    $id_baru = $conn->insert_id;

    // Redirect ke halaman profil dengan ID yang betul
    echo "<script>alert('Pendaftaran berjaya!'); window.location.href='profil_sukarelawan.php?id=$id_baru';</script>";
}
 else {
            echo "Ralat: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "<script>alert('Sila isi semua maklumat!'); window.history.back();</script>";
    }
}

$conn->close();
?>
