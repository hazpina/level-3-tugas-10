<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 3 Tugas 10</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'koneksi.php'; ?>
</head>
<body>
    <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="daftarBarang.php">Daftar Barang</a></li>
        <li><a href="tambahBarang.php">Tambah Barang</a></li>
        </ul>
    </nav>
    <center>
    <table border="1">
        <tr style="text-align:center;">
            <td><h4>Nama Produk</h4></td>
            <td><h4>Keterangan<h4p></td>
            <td><h4>harga</h4></td>
            <td><h4>Jumlah</h4></td>
            <td><h4>Opsi</h4></td>
        </tr>
        <?php 
            $data = mysqli_query($koneksi, "Select * From produk");
            while($d = mysqli_fetch_array($data)){
             ?> 
        <tr>
            <td><?php echo $d['nama_produk']; ?></td>
            <td><?php echo $d['keterangan']; ?></td>
            <td><?php echo $d['harga']; ?></td>
            <td><?php echo $d['jumlah']; ?></td>
            <td>
			<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
			<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
			</td>
                <?php
            }
    ?>
        </tr>
    </table>
    </center>
   
</body>
</html>