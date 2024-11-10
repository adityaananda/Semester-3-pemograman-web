<?php
$mysqli = new mysqli("localhost","root","","penjualan");
if($mysqli->connect_error){
    die("koneksi gagal: ".$mysqli->connect_error);
}
?>