<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aktiviti_id = $_POST['aktiviti_id'];
    $uploadDir = "uploads/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if (!empty($_FILES['gambar']['name'][0])) {
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        foreach ($_FILES['gambar']['tmp_name'] as $key => $tmp_name) {
            $fileName = basename($_FILES['gambar']['name'][$key]);
            $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $newFileName = time() . '_' . uniqid() . '.' . $fileExt;
            $targetFile = $uploadDir . $newFileName;

            if (in_array($fileExt, $allowedExtensions) && move_uploaded_file($tmp_name, $targetFile)) {
                $sqlGambar = "INSERT INTO gambar (aktiviti_id, gambar) VALUES ('$aktiviti_id', '$newFileName')";
                mysqli_query($conn, $sqlGambar);
            }
        }
    }

    echo "<script>alert('Gambar berjaya ditambah!'); window.location.href='Admin_aktiviti.php';</script>";
}

$aktiviti_id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Gambar Aktiviti</title>
</head>
<body>
    <h2>Tambah Gambar Aktiviti</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="aktiviti_id" value="<?php echo $aktiviti_id; ?>">
        
        <label>Pilih Gambar:</label>
        <input type="file" name="gambar[]" multiple accept="image/*">
        
        <button type="submit">Tambah Gambar</button>
    </form>
</body>
</html>
