<?php

session_start();

$nama_produk = $_POST['nama_produk'];
$harga_produk = (float)$_POST['harga_produk'];
$jumlah_terjual = (int)$_POST['jumlah_terjual'];
$total = $harga_produk * $jumlah_terjual;


$transaksi = [
    'nama_produk' => $nama_produk,
    'harga_produk' => $harga_produk,
    'jumlah_terjual' => $jumlah_terjual,
    'total' => $total
];


if (!isset($_SESSION['data_penjualan'])) {
    $_SESSION['data_penjualan'] = [];
}
$_SESSION['data_penjualan'][] = $transaksi;


header("Location: laporan-penjualan.php");
?>
