<?php 

include("database/koneksi.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="produk.css">
    <title>Daftar Menu</title>
</head>
<body>
  <div>
        <h3>Daftar Menu</h3>
        <form action="paymen.php" method="POST">
            <div class="box1">
                <div>
                    <img src="img/martabak.jpeg" alt="Martabak" class="gmbr">
                </div>
                <div>
                    <h4>Martabak</h4>
                    <p>Martabak dengan Beberapa Rasa</p>
                    <h5>Harga RP.5000</h5>
                    <input type="hidden" name="item_name" value="Martabak">
                    <input type="hidden" name="item_price" value="5000">
                    <button type="submit">Beli</button>
                </div>
            </div>
        </form>

        <form action="paymen.php" method="POST">
            <div class="box2">
                <div>
                    <img src="img/teh poci.jpeg" alt="Teh" class="gmbr">
                </div>
                <div>
                    <h4>Teh Poci</h4>
                    <p>Teh Poci Spesial</p>
                    <h5>Harga RP.10000</h5>
                    <input type="hidden" name="item_name" value="Teh Poci">
                    <input type="hidden" name="item_price" value="10000">
                    <button type="submit">Beli</button>
                </div>
            </div>
        </form>

        
        
  </div>
</body>
</html>