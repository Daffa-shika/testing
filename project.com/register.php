<?php

include("database/koneksi.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["nama"], $_POST["user"], $_POST["nohp"], $_POST["pass"])) {
    $name = $_POST["nama"];
    $user = $_POST["user"];
    $password = $_POST["pass"];
    $nomor = $_POST["nohp"];

    $sql = "INSERT INTO data_user (namalgkp, dt_username, dt_password, nohp) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error: " . $conn->error);
    }

    $stmt->bind_param("ssss", $name, $user, $password, $nomor);

    if ($stmt->execute()) {
        echo "Berhasil disimpan"; 
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<body>
  <form action="register.php" method="POST">
  <div class="box">
      <div class="jdl">
         <h4>Silahkan Register</h4>
      </div>
      <div class="nma">
        <div>
            <label >Nama Lengkap</label>
        </div>
        <input type="text" placeholder="Masukan Nama Lengkap" name="nama">
      </div>
      <div class="usr">
        <div>
            <label>Username</label>
        </div>
        <input type="text" placeholder="Masukan Username" name="user">
      </div>
      <div class="nohp">
        <div>
            <label>Nomor Handphone</label>
        </div>
        <input type="text" placeholder="Masukan No Handphone" name="nohp" >
      </div>
      <div class="pass">
        <div>
            <label>Password</label>
        </div>
        <input type="password" placeholder="Masukan Password" name="pass">
      </div>
      <div class="krim">
        <button type="submit">Sumbit</button>
      </div>
    </div>
  </form>
    
</body>
</html>