<?php 
include "koneksi.php"; 

$query = "DELETE FROM barang WHERE id = '" . $_GET['id'] . "'";
$mysqli->query($query);

header('Location: index.php');

?>