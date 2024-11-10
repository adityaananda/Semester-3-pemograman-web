<?php
session_start();

function hitungTotalPenjualan($data_penjualan) {
    $total = 0;
    foreach ($data_penjualan as $transaksi) {
        $total += $transaksi['total'];
    }
    return $total;
}

$data_penjualan = isset($_SESSION['data_penjualan']) ? $_SESSION['data_penjualan'] : [];
$total_penjualan = hitungTotalPenjualan($data_penjualan);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
</head>
<body>
    <h2>Laporan Penjualan</h2>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Nama Produk</th>
            <th>Harga Per Produk</th>
            <th>Jumlah Terjual</th>
            <th>Total</th>
        </tr>
        <?php foreach ($data_penjualan as $transaksi): ?>
        <tr>
            <td><?php echo $transaksi['nama_produk']; ?></td>
            <td><?php echo number_format($transaksi['harga_produk'], 0, ',', '.'); ?></td>
            <td><?php echo $transaksi['jumlah_terjual']; ?></td>
            <td><?php echo number_format($transaksi['total'], 0, ',', '.'); ?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3">Total Penjualan</td>
            <td><?php echo number_format($total_penjualan, 0, ',', '.'); ?></td>
        </tr>
    </table>
</body>
</html>
