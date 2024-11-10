<?php 
include "koneksi.php"; 

$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];

$query = "UPDATE barang SET nama_barang = '$nama_barang', harga = '$harga_barang' WHERE id = '" . $_GET['id'] . "'";
$mysqli->query($query);

header('Location: index.php');

?>
