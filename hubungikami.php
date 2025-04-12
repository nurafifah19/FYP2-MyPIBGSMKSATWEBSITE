<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Laman Rasmi PIBG SMK Sultan Ahmad Tajuddin</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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

        .container {
            padding: 2rem;
            max-width: 800px;
            margin: auto;
            text-align: center;
        }

        .contact-info {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 1.5rem;
        }

        .contact-info p {
            font-size: 1.2rem;
            margin: 0.5rem 0;
        }

        .contact-form {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 1.5rem;
            text-align: left;
        }

        .contact-form label {
            font-weight: bold;
            display: block;
            margin-top: 1rem;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .contact-form button {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.75rem 1.5rem;
            background-color: #800000;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #b22222;
        }

        .map {
            margin-top: 2rem;
        }

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

.social-media {
            text-align: center;
            margin-top: 15px;
        }

        .social-media a {
            display: inline-block;
            margin: 10px;
            padding: 10px 15px;
            font-size: 18px;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }

        .fb { background-color: #1877F2; }
        .ig { background: linear-gradient(45deg, #f9ce34, #ee2a7b, #6228d7); }
        .wa { background-color: #25D366; }

        .social-media a i {
            margin-right: 8px;
        }
        .social-media a:hover {
            opacity: 0.8;
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

    <div class="container">
        <h3>Hubungi PIBG SMKSAT</h3>

        <div class="contact-info">
            <p><strong>Email :</strong> info@pibgsmksat.edu.my</p>
            <p><strong>Telefon :</strong> +605-716 1055</p>
            <p><strong>Alamat :</strong> Sekolah Menengah Kebangsaan Sultan Ahmad Tajuddin ,
                Jalan Permatang Pasir , 34950 Bandar Baharu , Kedah </p>
            
            <div class="social-media">
            <a href="https://www.facebook.com/smksat2020/" target="_blank" class="fb">
                <i class="fa-brands fa-facebook"></i> Facebook
            </a>
            <a href="https://www.instagram.com/smk_sultanahmadtajuddin/" target="_blank" class="ig">
                <i class="fa-brands fa-instagram"></i> Instagram
            </a>
            <a href="https://wa.me/60163179824" target="_blank" class="wa">
                <i class="fa-brands fa-whatsapp"></i> WhatsApp
            </a>
        </div>
            
        </div>

        <div class="contact-form">
            <h2>Hantar Mesej kepada Kami</h2>
            <form action="contact_process.php" method="post">
                <label for="name">Nama Anda:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Emel Anda:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Mesej:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Hantar</button>
            </form>
        </div>

       
        
        <div class="map">
    <h2>Lokasi Kami</h2>
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.587251103101!2d100.50706043649042!3d5.141830756284959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ab1e0ff935c27%3A0xb90886beb0e93c81!2sSekolah%20Menengah%20Kebangsaan%20Sultan%20Ahmad%20Tajuddin!5e0!3m2!1sms!2smy!4v1741972389334!5m2!1sms!2smy" 
        width="100%" height="500" 
        style="border:0;" allowfullscreen="" loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

    </div>

    <footer>
        <p>&copy; 2025 PIBG SMKSAT . Hak Cipta Terpelihara .</p>
    </footer>
</body>
</html>

