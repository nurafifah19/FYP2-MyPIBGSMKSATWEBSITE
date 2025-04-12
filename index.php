<?php
// Sambungan ke database
$conn = new mysqli("localhost", "root", "", "pibg_smksat");
if ($conn->connect_error) {
    die("Sambungan gagal: " . $conn->connect_error);
}

// Ambil aktiviti terbaru
$sqlAktiviti = "SELECT id, tajuk, tarikh, rumusan FROM aktiviti ORDER BY tarikh DESC LIMIT 1";
$resultAktiviti = $conn->query($sqlAktiviti);
$aktiviti = $resultAktiviti->fetch_assoc();
$aktivitiId = $aktiviti['id'];

// Ambil gambar berdasarkan aktiviti terbaru
$sqlGambar = "SELECT gambar FROM gambar WHERE aktiviti_id = $aktivitiId";
$resultGambar = $conn->query($sqlGambar);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman Rasmi PIBG SMKSAT</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Georgia, serif;
            margin: 0;
            padding: 0;
            background-color: #f9f6f6;
            color: #333;
        }
        header {
            background: url('back3.png') no-repeat center center/cover;
            color: white;
            padding: 2.5rem 0;
            text-align: center;
            font-size: 1.2rem;
        }
        .header-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo {
            height: 80px;
            margin-right: 20px;
        }
        
        nav {
            display: flex;
            justify-content: center;
            background-color: #b22222; /* Darker Maroon */
            padding: 0.45rem; 
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 1rem;
            font-weight: bold;
            padding: 0.5rem 1rem;
            transition: background 0.3s ease-in-out;
            font-size: 1.1rem;
        }

        nav a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }
        
       
        .container {
            padding: 2rem;
            max-width: 1250px;
            margin: auto;
        }
        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            margin: 0.5rem 0;
            text-align: center;
        }
        .card h2 {
            color: #800000;
            margin-bottom: 1rem;
        }
        footer {
            text-align: center;
            padding: 1rem;
            background-color: #800000;
            color: white;
            margin-top: 1rem;
        }
        .btn {
            display: inline-block;
            margin: 0.5rem;
            padding: 0.75rem 1.5rem;
            background-color: #b22222;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #800000;
        }
        
        .welcome-section {
            display: flex;
            justify-content: center; 
            align-items: center;
            width: 100%;
            padding: 1rem 0;
        }

        .welcome-section .card {
            display: flex;
            flex-direction: row;
            align-items: center;
            max-width: 1200px;
            width: 95%;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 0 auto; 
        }

        .welcome-section .welcome-text {
            flex: 1;
            text-align: justify;
            padding-right: 20px;
        }

        .welcome-section .welcome-image {
            flex: 1;
            text-align: center; /* Pastikan gambar di tengah */
        }

        .welcome-section .welcome-image img {
            width: 150%;
            max-width: 500px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .school-info {
    background: #fff3f3;
    border-left: 5px solid #b22222;
    padding: 15px;
    margin-top: 5px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.school-info h3 {
    color: #b22222;
}
.school-info .btn {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 15px;
    background-color: #b22222;
    color: white;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background 0.3s;
}
.school-info .btn:hover {
    background-color: #800000;
}

/* Dropdown Container */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Button */
.dropbtn {
    background-color: #b22222;
    color: white;
    padding: 0.5rem 1rem;
    font-size: 1.1rem;
    font-weight: bold;
    border: none;
    cursor: pointer;
}

/* Dropdown Content */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

/* Links inside Dropdown */
.dropdown-content a {
    color: black;
    padding: 10px;
    text-decoration: none;
    display: block;
    font-size: 1rem;
}

/* Change Background on Hover */
.dropdown-content a:hover {
    background-color: #f1f1f1;
}

/* Show Dropdown on Hover */
.dropdown:hover .dropdown-content {
    display: block;
}

.dropbtn {
    font-family: Georgia, serif;  /* Sama seperti teks lain */
    font-weight: bold;
    font-size: 1.1rem;
    background-color: #b22222;
    color: white;
    padding: 0.5rem 1rem;
    border: none;
    cursor: pointer;
    transition: background 0.3s ease-in-out;
}

/* Pastikan hover effect sama dengan menu lain */
.dropbtn:hover {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
}

/* Styling untuk Maklumat Sekolah */
        .school-info-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .school-info {
            background: #fff3f3;
            border-left: 5px solid #b22222;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            flex: 1;
            min-width: 300px;
            text-align: center;
        }
        .school-info h3 {
            color: #b22222;
        }
        .school-info .btn {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background-color: #b22222;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .school-info .btn:hover {
            background-color: #800000;
        }

        /* Responsif - jika skrin kecil, tukar kepada 1 atau 2 lajur */
        @media (max-width: 900px) {
            .school-info-container {
                flex-direction: column;
                align-items: center;
            }
            .school-info {
                width: 100%;
                max-width: 400px;
            }
        }

        /* ---- Gaya Slideshow TAK GUNA ---- */



        .fade {
            animation: fadeEffect 2s ease-in-out;
        }
        @keyframes fadeEffect {
            from { opacity: 0.4; }
            to { opacity: 1; }
        }

        /* Butang Navigation */
        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            font-size: 18px;
            border-radius: 5px;
        }
        .prev { left: 10px; }
        .next { right: 10px; }
        .prev:hover, .next:hover { 
            background-color: rgba(0, 0, 0, 0.8); 
        }
        
        
        
        .admin-button {
    display: inline-block;
    padding: 10px 10px;
    background-color: #8B0000; /* Warna butang asal - merah gelap */
    color: white; /* Warna tulisan putih */
    text-decoration: none; /* Buang garis bawah */
    font-weight: bold;
    font-size: 12px;
    border-radius: 5px; /* Buat butang ada lengkung */
    transition: 0.3s; /* Efek hover lembut */
}

/* Hover Effect */
.admin-button:hover {
    background-color: #FFD700; /* Tukar warna hover ke emas */
    color: black; /* Tukar warna tulisan ke hitam */
}








.slideshow-container {
    position: relative;
    width: 80%;
    max-width: 800px;
    margin: auto;
    margin-top: 20px; /* Pastikan ia tidak melekat dengan header */
    z-index: 1; /* Letakkan ia di bawah header */
}
.slideshow-container img {
    max-height: 600px; /* Hadkan ketinggian gambar */
    object-fit: cover; /* Pastikan gambar tidak herot */
}
.slideshow-text {
    background: rgba(0, 0, 0, 0.5); /* Warna gelap separa transparent */
    color: white; /* Pastikan teks jelas */
    padding: 10px;
    border-radius: 5px;
}


.slides {
    display: none;
    width: 100%;
    height: 600px;
    object-fit: cover;
}


img {
    vertical-align: middle;
    max-width: 100%; /* Tukar width kepada max-width */
    height: auto;
}


/* Butang navigasi kiri & kanan */
.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: auto;
    padding: 10px 16px;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    font-size: 18px;
    border-radius: 50%;
    cursor: pointer;
    transition: 0.3s ease-in-out;
}


.prev { left: 0; }
.next { right: 0; }

.prev:hover, .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

        
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <img src="LOGOPIBGSMKSAT.png" alt="PIBG Logo" class="logo">
            <h1>Laman Rasmi PIBG SMK Sultan Ahmad Tajuddin</h1>
        </div>
    </header>
    
    <nav>
        <a href="index.php">Utama</a>
        <a href="tentangkami.php">Tentang Kami</a>
        
        <div class="dropdown">
           <button class="dropbtn">Aktiviti & Program</button>
        <div class="dropdown-content">
            <a href="aktiviti&program.php">Aktiviti & Program</a>
            <a href="sukarelawanPIBG.php">Peluang Sukarelawan PIBG</a>
        </div>
    </div>
        
        <div class="dropdown">
           <button class="dropbtn">Info</button>
        <div class="dropdown-content">
            <a href="info.php">Info Terkini</a>
            <a href="infosumbangan.php">Sumbangan</a>
        </div>
    </div>
        
        <a href="hubungikami.php">Hubungi Kami</a>
        <a href="loginAdmin.php" class="admin-button">ADMIN PIBG SMKSAT</a>
    </nav>
    <br>
    <div class="welcome-section">
        <div class="card">
            <div class="welcome-text">
                <h2><center>Selamat datang ke laman rasmi PIBG SMK Sultan Ahmad Tajuddin !</center></h2>
                <p>Laman ini dibangunkan untuk memudahkan para pengunjung mendapatkan maklumat mengenai sekolah ini dan perkhidmatan yang disediakan . Kami berharap laman ini dapat menjadi sumber informasi utama bagi ibu bapa , 
                pelajar dan warga sekolah dalam mendapatkan berita yang terkini , pengumuman rasmi , serta aktiviti yang dianjurkan oleh PIBG .
            </p>
            <p>
                PIBG SMK Sultan Ahmad Tajuddin sangat komited dalam memastikan kebajikan dan kecemerlangan akademik pelajar sentiasa 
                diutamakan . Kami sentiasa berusaha untuk meningkatkan kerjasama antara ibu bapa dan pihak sekolah dalam 
                mewujudkan persekitaran pembelajaran yang kondusif serta berdaya saing . Oleh itu , kami mengalu-alukan sebarang 
                cadangan dan maklum balas bagi menambah baik lagi usaha kami.
            </p>
            <p>
                Terima kasih atas sokongan anda dan semoga laman ini memberi manfaat kepada semua !
                
            </div>
            
            <div class="welcome-image">
                <img src="cgsmksat.png" alt="Gambar Guru dan Kakitangan">
            </div>
        </div>
    </div>
    
    
    <div class="container">
    <div class="card">
        <h2>Aktiviti & Program</h2>

        <!-- Slideshow Container -->
        <div class="slideshow-container">
    <?php while ($row = $resultGambar->fetch_assoc()) { ?>
        <div class="slides fade">
            <img src="uploads/<?php echo $row['gambar']; ?>" style="width:100%">
        </div>
    <?php } ?>

    <!-- Butang navigasi -->
    <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
    <button class="next" onclick="plusSlides(1)">&#10095;</button>
</div>

        <p style="text-align: center;">
            Kami sentiasa menganjurkan pelbagai aktiviti dan program yang melibatkan penyertaan aktif ibu bapa, 
            guru serta pelajar bagi memperkukuh kerjasama dan mempererat hubungan dalam komuniti sekolah.
        </p>

        <ul style="list-style: none; padding: 0; text-align: center;">
            <li>✅ <strong><?php echo $aktiviti['tajuk']; ?></strong> – <?php echo $aktiviti['rumusan']; ?></li>
        </ul>

        <p style="text-align: center;">
            Setiap aktiviti yang dianjurkan bukan sahaja memberi manfaat kepada individu yang terlibat tetapi juga menyumbang 
            kepada kemajuan serta kesejahteraan sekolah secara keseluruhan.
        </p>

        <p style="text-align: center;">
            🔍 <strong>Ingin tahu lebih lanjut?</strong> Klik butang <strong>"Lebih Lanjut"</strong> untuk melihat 
            galeri aktiviti kami!
        </p>

        <a href="aktiviti&program.php" class="btn">Lebih Lanjut</a>
    </div>
</div>

<?php $conn->close(); ?>

    <script>
        let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("slides");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1; }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 3000); // Tukar gambar setiap 3 saat
}

function plusSlides(n) {
    slideIndex += n - 1;
    showSlides();
}
</script>
    
    
    <div class="container">
        <div class="school-info-container">
            <div class="school-info">
                <h3>Kata Aluan YDP PIBG SMK Sultan Ahmad Tajuddin</h3>
                <p>
                    بِسْمِ اللَّهِ الرَّحْمٰنِ الرَّحِيْمِ  
                </p>
                <p>
                    Assalamualaikum warahmatullahi wabarakatuh dan salam sejahtera .
                </p>
                <p>
                    Terlebih dahulu , saya ingin mengucapkan setinggi-tinggi penghargaan kepada semua 
                    ibu bapa dan guru atas sokongan serta kerjasama yang telah diberikan kepada 
                    PIBG SMK Sultan Ahmad Tajuddin . PIBG bukan sekadar sebuah organisasi , tetapi 
                    merupakan jambatan penghubung antara pihak sekolah dan ibu bapa dalam usaha 
                    memastikan kejayaan serta kesejahteraan anak-anak kita .
                </p>

                <p>Di era digital ini , PIBG SMKSAT mengambil inisiatif untuk memperkenalkan 
                    laman web rasmi ini sebagai satu platform interaktif
                </p>
                    <a href="tentangkami.php" class="btn">Lebih Lanjut</a>
            </div>

            <div class="school-info">
                <h3>Peluang Sukarelawan PIBG SMKSAT</h3>
                <p><strong>"Jadilah sebahagian daripada perubahan ! Sertai pasukan 
                    sukarelawan PIBG dan bersama-sama kita membina persekitaran sekolah yang lebih baik ."</strong></p>
                    <h3>Kenapa Sertai Sukarelawan?</h3>
                    <ul style="list-style: none; padding: 0; text-align: center;">
                        <li>✅ Menambah pengalaman dalam kerja komuniti .</li>
                        <li>✅ Membantu membangunkan persekitaran sekolah yang lebih baik .</li>
                        <li>✅ Mengeratkan hubungan antara ibu bapa , guru dan pelajar .</li>
                        <li>✅ Memberi impak positif kepada masyarakat .</li>
                    </ul>
                <a href="sukarelawanPIBG.php" class="btn">Jom Sertai !</a>
            </div>
        </div>
    </div>

    <div class="container"> 
    <div class="card">
        <h2>Sumbangan PIBG SMK Sultan Ahmad Tajuddin</h2>
        <p>PIBG SMK Sultan Ahmad Tajuddin mengalu-alukan sumbangan daripada ibu bapa , 
            alumni dan masyarakat bagi menyokong pembangunan akademik , kokurikulum serta kesejahteraan pelajar . 
            Sumbangan ini akan digunakan untuk menambah baik kemudahan sekolah dan melaksanakan pelbagai program bermanfaat .</p>

        <p><strong>Kenapa sumbangan anda penting ?</strong></p>
        <ul style="list-style: none; padding: 0; text-align: center;">
            <li>✅ Meningkatkan kemudahan pembelajaran seperti makmal komputer dan perpustakaan .</li>
            <li>✅ Menyokong aktiviti kokurikulum termasuk sukan , kelab dan persatuan pelajar .</li>
            <li>✅ Membantu pelajar kurang berkemampuan mendapatkan bantuan keperluan pendidikan .</li>
            <li>✅ Menyediakan program motivasi dan seminar untuk meningkatkan prestasi akademik pelajar .</li>
            <li>✅ Memperkukuh hubungan antara ibu bapa , guru dan masyarakat dalam membina sekolah yang lebih cemerlang .</li>
        </ul>

        <p><strong>Bagaimana sumbangan anda digunakan ?</strong></p>
        <p>Setiap sumbangan yang diterima akan disalurkan secara telus untuk tujuan berikut :</p>
        <ul style="list-style: none; padding: 0; text-align: center;">
            <li>📌 Peningkatan infrastruktur sekolah seperti kelas pintar dan dewan serba guna .</li>
            <li>📌 Penambahbaikan kemudahan asas seperti tandas , kantin dan kawasan rekreasi pelajar .</li>
            <li>📌 Penganjuran bengkel dan kursus tambahan bagi membantu pelajar mencapai kejayaan akademik .</li>
        </ul>

        <a href="infosumbangan.php" class="btn">Ketahui Cara Menyumbang</a>
    </div>
</div>



    <footer>
        <p>&copy; 2025 PIBG SMKSAT . Hak Cipta Terpelihara .</p>
    </footer>
</body>
</html>
