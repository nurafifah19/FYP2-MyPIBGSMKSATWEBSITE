<?php
include 'config.php';

$query = "SELECT * FROM aktiviti ORDER BY tarikh DESC";
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktiviti & Program - Laman Rasmi PIBG SMK Sultan Ahmad Tajuddin</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
    font-family: Georgia, serif; 
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

        .container {
            padding: 2rem;
            max-width: 800px;
            margin: auto;
        }
        .post-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            margin: 1rem 0;
            text-align: center;
        }
        .swiper {
            width: 100%;
            height: 600px;
            border-radius: 10px;
            overflow: hidden;
        }
        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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
        <h2>Senarai Aktiviti & Program</h2>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="post-card">
                <h3><?php echo htmlspecialchars($row['tajuk']); ?></h3>
                <p><strong>Tarikh:</strong> <?php echo htmlspecialchars($row['tarikh']); ?></p>
                <p><?php echo nl2br(htmlspecialchars($row['rumusan'])); ?></p>
                
                <?php
                $aktiviti_id = $row['id'];
                $gambar_query = "SELECT gambar FROM gambar WHERE aktiviti_id = '$aktiviti_id'";
                $gambar_result = mysqli_query($conn, $gambar_query);
                if (mysqli_num_rows($gambar_result) > 0) {
                ?>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php while ($gambar = mysqli_fetch_assoc($gambar_result)) { ?>
                            <div class="swiper-slide">
                                <img src="uploads/<?php echo $gambar['gambar']; ?>" alt="Aktiviti">
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".swiper").forEach(function(swiperContainer) {
                new Swiper(swiperContainer, {
                    loop: true,
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            });
        });
    </script>
    
     <footer>
        <p>&copy; 2025 PIBG SMKSAT . Hak Cipta Terpelihara .</p>
    </footer>
    
</body>
</html>

