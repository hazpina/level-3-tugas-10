<?php 
include 'koneksi.php';
 
$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

mysqli_query($koneksi,"update produk set nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' where id='$id'");
 
header("location:daftarBarang.php");
 
?>