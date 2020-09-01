<?php  
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'db_resep';
	$kondisi = mysqli_connect($hostname, $username,$password,$dbname) or die ("Gagal Koneksi");
?>