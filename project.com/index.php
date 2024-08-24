<?php
session_start();


if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}


$username = isset($_SESSION["username"]) ? $_SESSION["username"] : '';


if (empty($username)) {     
    echo "Nama pengguna tidak ditemukan. Silakan login kembali.";
    exit();
}
?>

<!DOCTYPE html> 
<html lang="en">
<head>      
    <meta charset=  "UTF-8">
    <meta name  ="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="halaman.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>WELCOME</title>
</head>
<body>
    <div class="nv">
        <a class="logo">LOGO</a> 
        <a class="hme">HOME</a>
        <a class="about">ABOUT</a>
        <a href="logout.php" class="logout">LOGOUT</a>
    </div>
    <div class="box">
        <div>
            <h2 class="wel">SELAMAT DATANG, <?php echo htmlspecialchars($username); ?>!</h2>
            <h3 class="sil">Silahkan Pilih Layanan Kami</h3>
        </div>
    </div>
    <div class="option">
        <a class="food" href="produk.php">Pesan Makanan</a>
        <a class="jsa">Jasa Desain</a>
    </div>
</body>
</html>
