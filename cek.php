<?php 
session_start();
if (isset($_SESSION['level']) && isset($_SESSION['username']))
{
	if ($_SESSION['level'] == "admin"){
	header('location: admin.php');
	}
	else if ($_SESSION['level'] == "user"){
	header('location: home.php');
	}
}
if (!isset($_SESSION['level'])) {
	echo '<script>alert("Anda bukan pengguna")</script>';
	}

?>