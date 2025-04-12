<?php
if (isset($_GET['file'])) {
    $file = basename($_GET['file']); // Dapatkan nama fail
    $filepath = 'uploads/' . $file; // Lokasi fail dalam folder 'uploads'

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        readfile($filepath);
        exit;
    } else {
        echo "Fail tidak dijumpai.";
    }
}
?>
