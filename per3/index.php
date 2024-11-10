<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pencatatan Data Penjualan</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px;">
    <h2 style="color: #333;">Sistem Pencatatan Data Penjualan</h2>
    <form action="proses-penjualan.php" method="POST">
        <table border="1" cellspacing="0" cellpadding="5" style="width: 100%; max-width: 600px; margin: auto; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
            <tr>
                <td><label>Nama Produk:</label></td>
                <td><input type="text" name="nama_produk" required style="width: calc(100% - 10px); padding: 5px; border: 1px solid #ccc; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td><label>Harga Per Produk:</label></td>
                <td><input type="number" name="harga_produk" required style="width: calc(100% - 10px); padding: 5px; border: 1px solid #ccc; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td><label>Jumlah Terjual:</label></td>
                <td><input type="number" name="jumlah_terjual" required style="width: calc(100% - 10px); padding: 5px; border: 1px solid #ccc; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Tambahkan Penjualan" style="background-color: #28a745; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; font-size: 16px;">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>