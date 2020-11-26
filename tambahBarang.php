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
    <form method="post" action="tambah.php">
        <center>
		<table>
			<tr>			
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk"></td>
			</tr>
			<tr>
				<td>keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
			<tr>
				<td>harga</td>
				<td><input type="number" name="harga"></td>
            </tr>
            <tr>
				<td>jumlah</td>
				<td><input type="number" name="jumlah"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
        </table>
</center>
	</form>
</body>
</html>