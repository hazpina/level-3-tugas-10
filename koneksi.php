<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "arkademy";

$koneksi = mysqli_connect($localhost, $username, $password, $database);

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>