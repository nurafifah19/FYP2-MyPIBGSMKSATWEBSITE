<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumbangan - PIBG SMK Sultan Ahmad Tajuddin</title>
    <link rel="stylesheet" href="styles.css">
    <style>
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

        /* --- Bahagian Utama --- */
        .container { 
            padding: 2rem; 
            max-width: 850px; 
            margin: auto; 
            text-align: center; 
        }

        .content-box {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 1.8rem;
            color: #b22222;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        /* --- Butang Sumbangan --- */
        .donation-btn {
            display: block;
            background-color: #c3ff6d;
            color: black;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 6px;
            margin: 15px auto;
            font-size: 1.2rem;
            font-weight: bold;
            transition: background 0.3s ease-in-out;
            width: 270px;
        }

        .donation-btn:hover {
            background-color: #c3ff6d;
        }

        .donation-btn.secondary {
            background-color: #000080;
        }

        .donation-btn.secondary:hover {
            background-color: #000066;
        }

        /* --- Footer --- */
        footer {
            text-align: center;
            padding: 1rem;
            background-color: #800000;
            color: white;
            margin-top: 2rem;
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

    <!-- Kandungan Utama -->
    <div class="container">
        <div class="content-box">
            <h2>Sumbangan PIBG SMK Sultan Ahmad Tajuddin</h2>
            <p>
                PIBG SMK Sultan Ahmad Tajuddin mengalu-alukan sumbangan daripada ibu bapa, alumni dan masyarakat 
                dalam usaha menyokong pembangunan akademik, kokurikulum, serta kesejahteraan pelajar. 
                Setiap sumbangan yang diberikan akan digunakan bagi meningkatkan kemudahan sekolah serta menjalankan 
                pelbagai program bermanfaat.
            </p>
            
            <p>
                Sumbangan ini bukan sahaja membantu meningkatkan mutu pembelajaran dan pengajaran di sekolah, 
                malah turut memberi impak positif kepada pembangunan sahsiah dan kesejahteraan pelajar. 
                Dengan sokongan anda, PIBG dapat merancang dan melaksanakan lebih banyak program serta inisiatif yang 
                memberi manfaat kepada seluruh komuniti sekolah.
            </p>

            <p><strong>Kami amat menghargai keprihatinan dan kesudian anda untuk bersama-sama menjayakan misi ini.</strong></p>

            <!-- Butang Sumbangan -->
            <a href="sumbangan.php" class="donation-btn">Buat Sumbangan Sekarang</a>

        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 PIBG SMKSAT. Hak Cipta Terpelihara.</p>
    </footer>

</body>
</html>
