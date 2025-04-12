<?php 
include 'config.php'; // Sambungan ke database

$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$start_date = isset($_GET['start_date']) ? $_GET['start_date'] : '';
$end_date = isset($_GET['end_date']) ? $_GET['end_date'] : '';

$query = "SELECT id, nama, jumlah, resit, tarikh FROM sumbangan WHERE 1";

if (!empty($search)) {
    $query .= " AND nama LIKE '%$search%'";
}

if (!empty($start_date) && !empty($end_date)) {
    $query .= " AND tarikh BETWEEN '$start_date' AND '$end_date'";
}

$query .= " ORDER BY tarikh DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Sumbangan</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Georgia, serif;
            background-color: #F2F6F9;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: #343A40;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            color: white;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 15px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
        }

        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px; 
        }
        th, td { 
            border: 1px solid #ddd; 
            padding: 10px; 
            text-align: left; 
        }
        th { 
            background: #424242; 
            color: white; 
        }
        tr:nth-child(even) { 
            background: #E8F5E9; 
        }
        .btn { 
            padding: 8px 12px; 
            border-radius: 5px; 
            text-decoration: none; 
            color: white; 
        }
        .btn-resit { 
            background: #20B2AA; 
        }
        .btn-print { 
            background: #008B8B; 
        }
        .btn-search { 
            background: #424242; 
            padding: 8px; 
            color: white; 
            border-radius: 5px; 
            cursor: pointer; 
        }
        
        .search-form {
    display: flex;
    gap: 10px;
    align-items: center;
    justify-content: flex-start;
    background: #f8f9fa;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.input-field {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    width: 200px;
}

.btn-search {
    padding: 8px 15px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: 0.3s;
}

.btn-search:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
        <!-- Sidebar -->
        <div class="sidebar">
            <h4 class="text-center">Admin Panel</h4>
            <a href="Admindashboard.php">🖼 Laman Utama</a>
            <a href="senaraisumbangan.php">📄 Resit Sumbangan</a>
            <a href="senaraisukarelawan.php">🙋‍♂️ Senarai Sukarelawan</a>
            <a href="Admin_aktiviti.php">📅 Aktiviti & Program</a>
            <a href="logoutAdmin.php">🚪 Logout</a>
        </div>
        
        <!-- Kandungan utama -->
        <div class="content">
            <h2>Senarai Sumbangan</h2>

            <form method="GET" class="search-form">
                <input type="text" name="search" placeholder="Cari nama penyumbang" value="<?php echo htmlspecialchars($search); ?>" class="input-field">
                <input type="date" name="start_date" placeholder="Start Date" value="<?php echo htmlspecialchars($start_date); ?>" class="input-field">
                <input type="date" name="end_date" placeholder="End Date" value="<?php echo htmlspecialchars($end_date); ?>" class="input-field">
            <button type="submit" class="btn-search">Cari</button>
            </form>

            
            <table>
                <tr>
                    <th>Tarikh</th>
                    <th>Nama Penyumbang</th>
                    <th>Jumlah (RM)</th>
                    <th>Resit</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['tarikh']); ?></td>
                        <td><?php echo htmlspecialchars($row['nama']); ?></td>
                        <td><?php echo number_format($row['jumlah'], 2); ?></td>
                        <td>
                            <?php if ($row['resit']) { ?>
                            <a href="uploads/<?php echo htmlspecialchars($row['resit']); ?>" target="_blank" class="btn btn-resit">Lihat Resit</a>
                            <a href="muat_turun_resit.php?file=<?php echo urlencode($row['resit']); ?>" class="btn btn-print">Muat Turun</a>
                            <?php } else { ?>
                            <span style="color: red;">Tiada Resit</span>
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    
</body>
</html>


