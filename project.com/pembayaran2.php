<?php 

include("database/koneksi.php");

$item_name = isset($_GET['item_name']) ? htmlspecialchars($_GET['item_name']) : '';
$total_price = isset($_GET['total_price']) ? htmlspecialchars($_GET['total_price']) : '';
$quantity = isset($_GET['quantity']) ? htmlspecialchars($_GET['quantity']) : '';
$link = isset($_GET['link']) ? htmlspecialchars($_GET['link']) : '';


$phoneNumber = '6295335059940';
$message = "Halo, saya ingin membeli produk:\n\n" .
            "Nama Produk: $item_name\n" .   
            "Jumlah: $quantity\n" .
            "Total Harga: Rp$total_price\n" .
            "Metode Pembayaran: $link";

$whatsappLink = "https://wa.me/$phoneNumber?text=" . urlencode($message);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($whatsappLink); ?>" method="get" target="_blank">
        <div>
            <div>
                <h3>Nota Pembayaran</h3>
                <div>
                    <h3>Terimakasih Karena Telah Berbelanja</h3>
                </div>
                <div>
                    <h4>Nama Produk: <?php echo htmlspecialchars($item_name); ?></h4>
                </div>
                <div>
                    <h4>Jumlah Beli: <?php echo htmlspecialchars($quantity); ?></h4>
                </div>
                <div>
                    <h4>Total Harga: Rp.<?php echo htmlspecialchars($total_price); ?></h4>
                </div>
                <h4>Metode Pembayaran: <?php echo htmlspecialchars($link); ?></h4>
            </div>
            <button type="submit">BELI SEKARANG</button>
        </div>
    </form>
</body>
</html>
