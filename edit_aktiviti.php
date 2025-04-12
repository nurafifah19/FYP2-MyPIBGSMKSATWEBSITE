<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM aktiviti WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $aktiviti = mysqli_fetch_assoc($result);

    // Ambil gambar sedia ada
    $queryGambar = "SELECT * FROM gambar WHERE aktiviti_id = '$id'";
    $resultGambar = mysqli_query($conn, $queryGambar);
    $gambarList = mysqli_fetch_all($resultGambar, MYSQLI_ASSOC);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);
    $tajuk = mysqli_real_escape_string($conn, $_POST['tajuk']);
    $rumusan = mysqli_real_escape_string($conn, $_POST['rumusan']);
    $tarikh = mysqli_real_escape_string($conn, $_POST['tarikh']);

    // Kemas kini maklumat aktiviti
    $sql = "UPDATE aktiviti SET tajuk='$tajuk', rumusan='$rumusan', tarikh='$tarikh' WHERE id='$id'";
    mysqli_query($conn, $sql);

    // Tambah gambar baharu
    if (!empty($_FILES['gambar']['name'][0])) {
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        foreach ($_FILES['gambar']['tmp_name'] as $key => $tmp_name) {
            $fileName = basename($_FILES['gambar']['name'][$key]);
            $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $newFileName = time() . '_' . uniqid() . '.' . $fileExt;
            $targetFile = $uploadDir . $newFileName;
            
            if (in_array($fileExt, $allowedExtensions) && move_uploaded_file($tmp_name, $targetFile)) {
                $sqlGambar = "INSERT INTO gambar (aktiviti_id, gambar) VALUES ('$id', '$newFileName')";
                mysqli_query($conn, $sqlGambar);
            }
        }
    }
    echo "<script>alert('Aktiviti berjaya dikemaskini!'); window.location.href='Admin_aktiviti.php';</script>";
}

// Hapus gambar jika diminta
if (isset($_GET['delete_img'])) {
    $gambar_id = intval($_GET['delete_img']);
    $query = "SELECT gambar FROM gambar WHERE id='$gambar_id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        unlink("uploads/" . $row['gambar']);
        mysqli_query($conn, "DELETE FROM gambar WHERE id='$gambar_id'");
    }
    echo "<script>alert('Gambar berjaya dipadam!'); window.location.href='edit_aktiviti.php?id=$id';</script>";
}
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Aktiviti</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
   <div class="container mt-5">
        <h3 class="text-center text-danger">Edit Maklumat Aktiviti</h3>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $aktiviti['id']; ?>">
            
            <div class="mb-3">
                <label class="form-label">Tajuk:</label>
                <input type="text" name="tajuk" class="form-control" value="<?php echo htmlspecialchars($aktiviti['tajuk']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Rumusan:</label>
                <textarea name="rumusan" class="form-control" required><?php echo htmlspecialchars($aktiviti['rumusan']); ?></textarea>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Tarikh:</label>
                <input type="date" name="tarikh" class="form-control" value="<?php echo $aktiviti['tarikh']; ?>" required>
            </div>
            
            <h5>Gambar Sedia Ada:</h5>
            <div class="row">
                <?php foreach ($gambarList as $gambar) { ?>
                    <div class="col-md-3 text-center">
                        <img src="uploads/<?php echo $gambar['gambar']; ?>" class="img-fluid rounded mb-2" style="width: 100px; height: 100px; object-fit: cover;">
                        <br>
                        <a href="edit_aktiviti.php?id=<?php echo $id; ?>&delete_img=<?php echo $gambar['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Padam gambar ini?');">Padam</a>
                    </div>
                <?php } ?>
            </div>
            
            <div class="mb-3 mt-3">
                <label class="form-label">Tambah Gambar Baharu:</label>
                <input type="file" name="gambar[]" class="form-control" multiple accept="image/*">
            </div>
            
            <button type="submit" class="btn btn-success w-100">Simpan Perubahan</button>
            <a href="Admin_aktiviti.php" class="btn btn-secondary w-100 mt-2">Kembali ke Senarai Aktiviti</a>
        </form>
    </div>
</body>
</html>

