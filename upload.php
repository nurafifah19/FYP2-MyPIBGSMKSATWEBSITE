<?php 
$servername = "localhost";
$username = "root"; // Tukar jika ada username lain
$password = ""; // Letak password database jika ada
$database = "pibg_smksat"; // Pastikan database ini wujud

// Sambungkan ke database
$conn = new mysqli($servername, $username, $password, $database);

// Semak sambungan
if ($conn->connect_error) {
    die("Sambungan gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $amount = $_POST['amount'];

    // Pastikan borang diisi
    if (empty($name) || empty($amount) || !isset($_FILES['receipt'])) {
        die("Sila lengkapkan semua maklumat dan muat naik resit.");
    }

    $receipt = $_FILES['receipt'];
    $upload_dir = "uploads/";

    // Pastikan direktori 'uploads/' wujud
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Semak jenis fail yang dibenarkan
    $allowed_types = ['jpg', 'jpeg', 'png', 'pdf'];
    $file_ext = strtolower(pathinfo($receipt["name"], PATHINFO_EXTENSION));

    if (!in_array($file_ext, $allowed_types)) {
        die("Format fail tidak dibenarkan! Sila muat naik JPG, JPEG, PNG, atau PDF.");
    }

    // Nama fail unik (elak overwrite)
    $new_filename = time() . "_" . uniqid() . "." . $file_ext;
    $target_file = $upload_dir . $new_filename;

    // Semak & muat naik fail
    if (move_uploaded_file($receipt["tmp_name"], $target_file)) {
        // Simpan data dalam database
        $stmt = $conn->prepare("INSERT INTO sumbangan (nama, jumlah, resit) VALUES (?, ?, ?)");
        $stmt->bind_param("sds", $name, $amount, $new_filename);

        if ($stmt->execute()) {
            // Redirect kembali ke sumbangan.php dengan mesej berjaya
            header("Location: sumbangan.php?success=1");
            exit();
        } else {
            echo "Ralat: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Ralat memuat naik fail.";
    }
}

$conn->close();
?>
