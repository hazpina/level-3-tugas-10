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
    
    <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from produk where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
            <center>
			<table>
				<tr>			
					<td>Nama Product</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama_produk" value="<?php echo $d['nama_produk']; ?>">
					</td>
				</tr>
				<tr>
					<td>keterangan</td>
					<td><input type="text" name="keterangan" value="<?php echo $d['keterangan']; ?>"></td>
				</tr>
				<tr>
					<td>harga</td>
					<td><input type="number" name="harga" value="<?php echo $d['harga']; ?>"></td>
                </tr>
                <td>jumlah</td>
					<td><input type="number" name="jumlah" value="<?php echo $d['jumlah']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Submit"></td>
				</tr>		
            </table>
    </center>
		</form>
		<?php 
	}
    ?>
    
</body>
</html>