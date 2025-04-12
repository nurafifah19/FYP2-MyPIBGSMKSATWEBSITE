<!DOCTYPE html> 
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info - Laman Rasmi PIBG SMK Sultan Ahmad Tajuddin</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body { 
            font-family: Georgia, serif; 
            background-color: #f9f6f6; 
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

        nav {
            display: flex;
            justify-content: center;
            background-color: #b22222;
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

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            font-family: Georgia, serif; 
            background-color: #b22222;
            color: white;
            padding: 0.5rem 1rem;
            font-size: 1.1rem;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 10px;
            text-decoration: none;
            display: block;
            font-size: 1rem;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .content {
            max-width: 800px;
            margin: 2rem auto;
            padding: 1rem;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .info img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #800000;
            color: white;
            margin-top: 2rem;
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
    </nav>
    
    <div class="content">
        <h2><center>Info Terkini</center></h2>

        <br><br>
        <h3>Takwim Baru Persekolahan Sesi 2025</h3>
        <div class="info">
            <img src="takwimsekolah2025.jpg" alt="Takwim Persekolahan 2025">
            <p><strong>Takwim Baru Persekolahan Sesi 2025</strong></p>
            <p>Pastikan anda menyemak tarikh penting seperti :</p>
            <ul>
                <li>✅ Tarikh mula dan akhir penggal .</li>
                <li>✅ Cuti penggal & cuti akhir tahun .</li>
                <li>✅ Hari persekolahan mengikut negeri .</li>
            </ul>
            <p>Sila rujuk takwim penuh untuk perancangan aktiviti anak-anak anda .</p>
            <p>Pastikan juga anak-anak hadir ke sekolah tepat pada masanya !</p>
        </div>

        <!-- Info Cuti Perayaan -->
        <br><br>
        <h3>Takwim Cuti Perayaan Sekolah Sesi 2025/2026</h3>
        <div class="info">
            <img src="takwimcutiperayaanskolah2025.jpg" alt="Takwim Cuti Perayaan 2025">
            <h3>Takwim Cuti Perayaan Sekolah Sesi 2025/2026</h3>

            <p><strong>📌 Cuti Perayaan Hari Raya Aidilfitri</strong></p>
            <p>🗓 <strong>Tarikh :</strong> 31 Mac 2025 ( Isnin ) & 1 April 2025 ( Selasa )</p>
            <p>✅ <strong>Cuti Tambahan KPM :</strong></p>
            <ul>
                <li><strong>Kumpulan A :</strong> 30 Mac ( Ahad ) , 2 April ( Rabu ) , 3 April ( Khamis )</li>
                <li><strong>Kumpulan B :</strong> 2 April ( Rabu ) , 3 April ( Khamis ) , 4 April ( Jumaat )</li>
            </ul>

            <p><strong>📌 Cuti Perayaan Deepavali</strong></p>
            <p>🗓 <strong>Tarikh :</strong> 20 Oktober 2025 ( Isnin )</p>
            <p>✅ <strong>Cuti Tambahan KPM :</strong></p>
            <ul>
                <li><strong>Kumpulan A :</strong> 19 Oktober ( Ahad ) & 21 Oktober ( Selasa )</li>
                <li><strong>Kumpulan B :</strong> 21 Oktober ( Selasa ) & 22 Oktober ( Rabu )</li>
                <li><strong>Negeri Sarawak sahaja :</strong> 20 Oktober ( Isnin )</li>
            </ul>

            <p><strong>📌 Cuti Perayaan Lain</strong></p>
            <ul>
                <li><strong>Tahun Baru Cina :</strong> 29 & 30 Januari 2025</li>
                <li><strong>Pesta Kaamatan :</strong> 30 & 31 Mei 2025 ( Sabah & WP Labuan )</li>
                <li><strong>Hari Gawai Dayak :</strong> 1 & 2 Jun 2025 ( Sarawak )</li>
                <li><strong>Hari Krismas :</strong> 25 Disember 2025</li>
            </ul>

            <p><strong>💡 Nota :</strong></p>
            <ul>
                <li><strong>Kumpulan A :</strong> Sekolah di Johor , Kedah , Kelantan , Terengganu</li>
                <li><strong>Kumpulan B :</strong> Sekolah di negeri lain termasuk Sabah , Sarawak , WP Kuala Lumpur , WP Labuan & WP Putrajaya</li>
            </ul>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 PIBG SMKSAT. Hak Cipta Terpelihara.</p>
    </footer>
</body>
</html>
