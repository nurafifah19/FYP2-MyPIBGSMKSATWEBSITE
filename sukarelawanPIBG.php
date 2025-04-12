<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peluang Sukarelawan - PIBG SMKSAT</title>
    <style>
        /* --- bahagian header dan footer website yang selari --*/
        /* --- Gaya Asas --- */
        body { 
            font-family: Georgia, serif; 
            background-color: #f8f8f8; 
            color: #333; 
            margin: 0; 
            padding: 0; 
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

        /* --- Navigasi Menu --- */
        nav {
            display: flex;
            justify-content: center;
            background-color: #b22222;
            padding: 0.5rem;
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
        
        /* --- Footer --- */
        footer {
            text-align: center;
            padding: 1rem;
            background-color: #800000;
            color: white;
            margin-top: 2rem;
        }
        /* --- bahagian header dan footer website yang selari --*/
        
 
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2, h3 { text-align: center; }
        .program {
            background: #eef;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
        }
        .button {
            display: block;
            width: 97%;
            text-align: center;
            font-size: 15px;
            font-weight: bold;
            padding: 14px;
            margin-top: 10px;
            border-radius: 8px;
            text-decoration: none;
            color: white;
            transition: 0.3s;
            border: none;
            cursor: pointer;
        }
        .btn-register { background: #28a745; }
        .btn-register:hover { background: #218838; }
        .faq {
            margin-top: 20px;
            background: #fffae6;
            padding: 15px;
            border-radius: 5px;
        }
        
        .intro-section {
    text-align: center;
    background: #fff3e0;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.highlight {
    font-size: 18px;
    font-style: italic;
    color: #b22222;
}

.info-box {
    background: #fffae6;
    padding: 15px;
    border-radius: 5px;
    margin: 10px auto;
    width: 80%;
}

ul {
    text-align: left;
    list-style: none;
    padding-left: 0;
}

ul li::before {
    content: "✔";
    color: #28a745;
    padding-right: 8px;
}

        
    </style>
</head>
<body>
    
    <!-- Header -->
    <header>
        <div class="header-container">
            <img src="LOGOPIBGSMKSAT.png" alt="PIBG Logo" class="logo">
            <h1>Laman Rasmi PIBG SMK Sultan Ahmad Tajuddin</h1>
        </div>
    </header>
    
    <!-- Navigasi -->
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
    </nav>
    <br><br>
    <div class="container">
        
    <h2>Peluang Sukarelawan PIBG SMKSAT</h2>
        
        <div class="intro-section">
    <p class="highlight">
        "Jadilah sebahagian daripada perubahan! Sertai pasukan sukarelawan PIBG dan bersama-sama kita membina persekitaran sekolah yang lebih baik."
    </p>
    
    <div class="info-box">
        <h3>Kenapa Sertai Sukarelawan?</h3>
        <ul>
            <li>Menambah pengalaman dalam kerja komuniti.</li>
            <li>Membantu membangunkan persekitaran sekolah yang lebih baik.</li>
            <li>Mengeratkan hubungan antara ibu bapa, guru, dan pelajar.</li>
            <li>Memberi impak positif kepada masyarakat.</li>
        </ul>
    </div>
</div>



        <div class="program">
            <h3>Gotong-Royong Sekolah</h3>
            <p><strong>Tarikh :</strong> 20 MeI 2025</p>
            <p><strong>Masa :</strong> 8:00 AM - 12:00 PM</p>
            <p>Bantu membersihkan kawasan sekolah bersama komuniti PIBG .</p>
            <a href="daftarsukarelawan.php" class="button btn-register">Daftar Sebagai Sukarelawan</a>
        </div>

        <div class="program">
            <h3>Program Motivasi Pelajar</h3>
            <p><strong>Tarikh :</strong> 5 Jun 2025</p>
            <p><strong>Masa :</strong> 10:00 AM - 2:00 PM</p>
            <p>Bantu memberi motivasi dan inspirasi kepada pelajar .</p>
            <a href="daftarsukarelawan.php" class="button btn-register">Daftar Sebagai Sukarelawan</a>
        </div>
    
        <div class="program">
            <h3>Program Lawatan Kasih : Menyantuni Anak Yatim , Warga Emas & Pelajar Memerlukan</h3>
            <p><strong>Tarikh :</strong> 26 Julai  2025</p>
            <p><strong>Masa:</strong> 10:00 AM - 2:00 PM</p>
            <p>Sertai program Lawatan Kasih , di mana kita akan melawat rumah anak yatim , warga emas , serta pelajar yang memerlukan bantuan .<br><br>
                Program ini bertujuan untuk memberikan sokongan moral , 
                berkongsi keceriaan dan menyumbangkan keperluan asas kepada mereka yang kurang bernasib baik .</p>
            <a href="daftarsukarelawan.php" class="button btn-register">Daftar Sebagai Sukarelawan</a>
        </div>

        <div class="faq"> 
    <h3>Soalan Lazim</h3>
    <p><strong>Siapa boleh menjadi sukarelawan?</strong><br>Mana-mana ibu bapa atau ahli komuniti yang berminat.</p>
    <p><strong>Apa manfaat menjadi sukarelawan?</strong><br>Menambah pengalaman, membantu komuniti, dan membina hubungan baik dengan pihak sekolah.</p>
    <p><strong>Adakah saya perlu komitmen jangka panjang?</strong><br>Tidak, anda boleh memilih untuk menyertai satu aktiviti sahaja atau menyertai lebih banyak program mengikut kesesuaian masa anda.</p>
    <p><strong>Bagaimana cara untuk mendaftar?</strong><br>Anda hanya perlu mengisi borang pendaftaran dalam talian di laman ini dan pihak kami akan menghubungi anda dengan butiran lanjut.</p>
    <p><strong>Adakah saya perlu membayar untuk menjadi sukarelawan?</strong><br>Tidak, menjadi sukarelawan adalah percuma. Malah, segala sumbangan tenaga dan masa anda sangat dihargai.</p>
    <p><strong>Adakah sukarelawan akan diberikan sijil penghargaan?</strong><br>Ya, pihak sekolah akan menyediakan sijil penghargaan kepada sukarelawan yang terlibat sebagai tanda penghargaan.</p>
    <p><strong>Bolehkah pelajar turut serta sebagai sukarelawan?</strong><br>Ya, pelajar boleh menyertai aktiviti sukarelawan yang sesuai dengan usia mereka dan mendapat bimbingan daripada guru serta ibu bapa.</p>
    <p><strong>Bagaimana saya boleh tahu aktiviti yang akan datang?</strong><br>Semua aktiviti akan dikemas kini di laman web ini dan anda juga boleh menyertai kumpulan WhatsApp/Telegram sukarelawan untuk mendapatkan info terkini.</p>
</div>

    </div>
    
    <!-- Footer -->
    <footer>
        <p>&copy; 2025 PIBG SMKSAT. Hak Cipta Terpelihara.</p>
    </footer>
    
</body>
</html>
