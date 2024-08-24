<?php 
  session_start(); 


  if (isset($_SESSION["username"])) {
      header("Location: index.php");
      exit();
  }

  include("database/koneksi.php"); 

  if (isset($_POST["login"])) {
      $username = $_POST["username"]; 
      $password = $_POST["password"];
      
      
      if (!empty($username) && !empty($password)) {
          $sql = "SELECT dt_password FROM data_user WHERE dt_username = ?";
          $stmt = $conn->prepare($sql);

          if ($stmt === false) {
              die("Error: " . $conn->error);
          }

          $stmt->bind_param("s", $username);
          $stmt->execute();
          $result = $stmt->get_result(); 

          if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              $stored_password = $row['dt_password'];

              
              if ($password === $stored_password) {
                  $_SESSION['username'] = $username; 
                  header("Location: index.php");
                  exit();
              } else {
                  echo "Login gagal: Username atau password salah.";
              }
          } else {
              echo "Login gagal: Username atau password salah.";
          }

          $stmt->close();
      } else {
          echo "Username atau password tidak boleh kosong.";
      }
  }

  $conn->close(); 
  ?>

  
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="login.css">
      <title>Login</title>
  </head>
  <body>
    <form action="login.php" method="POST">
      <div class="box">
        <div class="til">
          <h4 class="jdl">Silahkan Login</h4>
        </div>
          <div class="user">
              <div>
                <label>Username</label>
              </div>
              <input type="text" placeholder="Masukan Username" name="username" required>
          </div>
          <div class="pass">
              <div>
                <label>Password</label>
              </div>
              <input type="password" placeholder="Masukan Password" name="password" required>
          </div>
          <div class="bxsm">
            <button class="smbt" name="login">Submit</button>
          </div>
          <div class="lnkregis" name="register">
          <p>Belum punya akun?<a href="register.php">Register Disini!</a></p>
          </div>
      </div>
    </form>
  </body>
  </html>
