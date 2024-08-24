<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_masuk";

// Create connection
$conn = new mysqli($servername, $username, $password , $dbname);

// Check connection
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>