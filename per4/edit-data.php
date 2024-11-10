<?php 
include "koneksi.php"; 

$query = "SELECT * FROM barang WHERE id = '" . $_GET['id'] . "'";
$result = $mysqli->query($query); 
$row = $result->fetch_assoc(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <form action="<?php echo 'update.php?id=' . $_GET['id']; ?>" method="post">
        <label for="nama_barang">Nama Barang</label><br />
        <input type="text" id="nama_barang" name="nama_barang" value="<?php echo htmlspecialchars($row['nama_barang']); ?>" required><br />

        <label for="harga_barang">Harga Barang</label><br />
        <input type="number" id="harga_barang" name="harga_barang" value="<?php echo htmlspecialchars($row['harga']); ?>" required><br />

        <button type="submit">Update</button>
    </form>
</body>
</html>
