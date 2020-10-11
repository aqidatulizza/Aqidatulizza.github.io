<?php
	session_start(); 
	include "database.php";
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="SELECT * FROM tb_user WHERE username='$username'";
	$hasil=mysqli_query($kondisi,$query);
	$data=mysqli_fetch_array($hasil);
	$pengacak="p3ng4c4k";
	$passmd=md5($pengacak . md5($password)); 
	if ($passmd == $data['password']){
		$_SESSION['level']=$data['level'];
		$_SESSION['username']=$data['username']; 
		echo "<h2>Login sukses</h2>";
	    header('location: cek.php');
	}
	else echo '<script>alert("Login Gagal!")</script>';
	echo '<script>window.location="login.php"</script>';
?>