<?php
$host="localhost";
$user="root";
$password="";
$database="db_resep";
$kondisi=mysqli_connect($host,$user,$password,$database); if(!$kondisi)
{
echo "KONEKSI DATABASE GAGAL!!!";
}
?>
