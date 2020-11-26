<?php 
include 'koneksi.php';
 
$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into produk values('','$nama_produk','$keterangan','$harga','$jumlah')");
 
// mengalihkan halaman kembali ke index.php
header("location:daftarBarang.php");
 
?>