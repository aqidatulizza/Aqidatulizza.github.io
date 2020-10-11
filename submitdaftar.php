<?php
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password1=$_POST['password1'];
		$password2=$_POST['password2'];
		$level="user";
			if ($password1 == $password2)
	{
		include "database.php";
		$pengacak="p3ng4c4k";
		$passwordmd= md5($pengacak . md5($password1));
		$query="INSERT INTO tb_user VALUES('$username','$email', '$passwordmd', '$level')";
		$hasil= mysqli_query($kondisi,$query); 
		if ($hasil) echo '<script>window.location="login.php"</script>';
		else echo '<script>alert("Daftar Gagal!")</script>';
		echo '<script>window.location="index.php"</script>';
		}
		else echo '<script>alert("Password yang Anda masukkan salah!")</script>';
	
?>