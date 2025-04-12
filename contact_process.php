<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Emel PIBG yang akan menerima mesej
    $to = "nrafifah7@gmail.com"; 
    $subject = "Mesej dari MyPIBG SMKSAT";

    // Ambil data dari borang
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Format mesej yang akan dihantar
    $fullMessage = "Nama: $name\nEmel: $email\n\nMesej:\n$message";

    // Header emel untuk elak masuk SPAM
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    // Hantar emel menggunakan fungsi mail()
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "<script>alert('Mesej berjaya dihantar! PIBG akan menghubungi anda.'); window.location.href='hubungikami.php';</script>";
    } else {
        echo "<script>alert('Ralat: Tidak dapat menghantar mesej. Sila cuba lagi.'); window.location.href='hubungikami.php';</script>";
    }
} else {
    header("Location: hubungikami.php");
    exit();
}
?>
