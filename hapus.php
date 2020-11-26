<?php 
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "Delete FROM produk WHERE id='$id'");

header("location:daftarBarang.php");

?>