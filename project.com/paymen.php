    <?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include("database/koneksi.php");

    // Ambil data dari POST
        $item_name = isset($_POST['item_name']) ? htmlspecialchars($_POST['item_name']) : '';
        $item_price = isset($_POST['item_price']) ? htmlspecialchars($_POST['item_price']) : '';

    
    if (!$item_name || !$item_price) {
        echo "Data tidak lengkap.";
        exit();
    }   

    
    if (isset($_POST['jumbel'], $_POST['nama'], $_POST['alamat'], $_POST['nohp'])) {
        $quantity = $_POST['jumbel'];
        $customer_name = $_POST['nama'];
        $customer_address = $_POST['alamat'];
        $customer_phone = $_POST['nohp'];
        $link =$_POST['link'];


        $total_price = $item_price * $quantity;

      
        $sql = "INSERT INTO beli_data (makanan, harga, jumbel, total, nama, alamat, nohp, method)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }

        $stmt->bind_param("sdisssss", $item_name, $item_price, $quantity, $total_price, $customer_name, $customer_address, $customer_phone , $link);

        if ($stmt->execute()) {
           
           echo "berhasil";
        } else {
            echo "Error: " . $stmt->error;
        }

        if($link == 'cod'){

            header("Location: pembayaran.php?item_name=" . urlencode($item_name) . "&quantity=" . urlencode($quantity) . "&total_price=" . urlencode($total_price)  .  "&link=" . urlencode($link)) ;
        }else{
            header("location: pembayaran2.php?item_name=". urlencode($item_name) . "&quantity=" . urlencode($quantity) . "&total_price=" . urlencode($total_price) .  "&link=" . urlencode($link)) ;
        }

        $stmt->close(); 
        $conn->close();
    }


    ?>



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Pembayaran</title>
    </head>
    <body>
    <form action="paymen.php" method="POST">
        <div>
            <div>
                <!-- Menampilkan gambar sesuai dengan item_name -->
                <img src="img/<?php echo htmlspecialchars($item_name); ?>.jpeg" alt="<?php echo htmlspecialchars($item_name); ?>" class="img1">
                <h3><?php echo htmlspecialchars($item_name); ?></h3>
                <p>Detail deskripsi</p>
                <h4>Harga Rp.<?php echo htmlspecialchars($item_price); ?></h4>
                <div>
                    <label>Membeli</label>
                    <p>maks. pesan 5</p>
                    <select name="jumbel" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <div>
                        <label>NAMA LENGKAP</label>
                        <input type="text" placeholder="Masukan nama anda!" name="nama" required>
                    </div>
                    <div>
                        <label>ALAMAT LENGKAP</label>
                        <input type="text" placeholder="Masukan alamat lengkap!" name="alamat" required>
                    </div>
                    <div>
                        <label>No Hanphone</label>
                        <input type="text" placeholder="Masukan No hp Untuk komunikasi" name="nohp" required>
                    </div>
                    <div>
                        <label>Methode Pembayaran</label>
                        <select name="link">
                            <option value="cod">Bayar Ditempat</option>
                            <option value="qris">Qris</option>
                            <option value="dana">Dana Ditempat</option>
                            <option value="gopay">Gopay</option>
                        </select>
                    </div>
                    <!-- Input hidden untuk data produk -->
                    <input type="hidden" name="item_name" value="<?php echo htmlspecialchars($item_name); ?>">
                    <input type="hidden" name="item_price" value="<?php echo htmlspecialchars($item_price); ?>">
                    <div>
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>  
    </body>
    </html>

