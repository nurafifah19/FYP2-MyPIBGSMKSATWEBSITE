<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumbangan Online - PIBG SMKSAT</title>
    <style> 
    body { 
        font-family: Arial, sans-serif; 
        margin: 20px; 
        padding: 0; 
        background-color: #f4f4f4; 
    }
    .container { 
        max-width: 650px; 
        margin: auto; 
        background: white; 
        padding: 20px; 
        border-radius: 8px; 
        box-shadow: 0 0 10px rgba(0,0,0,0.1); 
    }
    h2 { 
        text-align: center; 
    }
    .bank-details { 
        background: #eef; 
        padding: 15px; 
        border-radius: 5px; 
    }
    .upload-form { 
        margin-top: 20px; 
    }
    label { 
        font-weight: bold; 
        display: block; 
        margin-top: 10px; 
    }
    input { 
        width: 97%; 
        padding: 10px; 
        margin-top: 5px; 
        border: 1px solid #ccc; 
        border-radius: 5px; 
    }
    button { 
        width: 100%; 
        padding: 10px;
        margin-top: 5px; 
        border: 1px solid #ccc; 
        border-radius: 5px;
        background: #555; 
        color: white; 
        border: none; 
        cursor: pointer; 
    }
    button:hover { 
        background: #555; 
    }
    
    /* Styling untuk dua butang sebelah-sebelah */
    .button-container {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
    }
    .button-container a {
        flex: 1;
        text-align: center;
        padding: 10px;
        border-radius: 5px;
        text-decoration: none;
        color: black;
        font-weight: bold;
        margin: 0 5px;
    }
    .btn-whatsapp {
        background: #c3ff6d; 
    }
    .btn-back {
        background: #c3ff6d; 
    }
    .btn-whatsapp:hover {
        background: #c3ff6d;
    }
    .btn-back:hover {
        background: #c3ff6d;
    }
    
    /* Popup Styling */
    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
        text-align: center;
        z-index: 1000;
    }
    .popup button {
        background: #28a745;
        color: white;
        border: none;
        padding: 10px;
        margin-top: 10px;
        cursor: pointer;
    }
</style>

</head>
<body>
    <div class="container">
        <h2>Sumbangan Online</h2>
        <div class="bank-details">
            <p><strong>Maklumat Akaun PIBG:</strong></p>
            <p>Nama Akaun: PIBG SMK Sultan Ahmad Tajuddin</p>
            <p>Bank: Maybank</p>
            <p>No. Akaun: 1234 5678 9012</p>
            <p>Rujukan: Sumbangan PIBG</p>
        </div>
        <div class="upload-form">
            <h3>Muat Naik Resit Sumbangan</h3>
            <form id="donationForm" action="upload.php" method="POST" enctype="multipart/form-data">
                <label for="name">Nama Penyumbang:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="amount">Jumlah Sumbangan (RM):</label>
                <input type="number" id="amount" name="amount" required>
                
                <label for="receipt">Muat Naik Resit:</label>
                <input type="file" id="receipt" name="receipt" accept="image/*,application/pdf" required>
                
                <button type="submit">Hantar Resit</button>
            </form>
        </div>
        
        <div class="button-container">
            <a href="https://wa.me/60163179824?text=Saya telah membuat sumbangan ke akaun PIBG." target="_blank" class="btn-whatsapp">
                Hubungi PIBG di WhatsApp
            </a>
            <a href="infosumbangan.php" class="btn-back">
                Kembali ke Info Sumbangan
            </a>
        </div>


    </div>
    
    <!-- Popup Message -->
    <div id="successPopup" class="popup">
        <p>Sumbangan berjaya direkod ! Terima Kasih Atas Sumbangan Yang Anda Berikan . </p>
        <button onclick="closePopup()">Tutup</button>
    </div>
    
    <script>
        document.getElementById("donationForm").addEventListener("submit", function(event) {
          
            document.getElementById("successPopup").style.display = "block"; // Papar pop-up
        });
        
        function closePopup() {
    document.getElementById("successPopup").style.display = "none"; // Tutup popup
    document.getElementById("donationForm").reset(); // Kosongkan borang
}

    </script>
    
    <script>
    // Semak URL jika ada parameter success=1
    window.onload = function() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('success')) {
            document.getElementById("successPopup").style.display = "block"; // Papar popup
        }
    };

    function closePopup() {
        document.getElementById("successPopup").style.display = "none"; // Tutup popup
        window.location.href = "infosumbangan.php"; // Halaman senarai sumbangan
    }
</script>


</body>
</html>

