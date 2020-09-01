<!DOCTYPE html>
<html>
<head>
	<title> form login </title>
</head>
<style>
	body{
		font-family: sans-serif;
		background: black;
		}
	h1{
		text-align: center;
		font-weight: 300;
		}
	.tulisanlogin{
		text-align: center;
		text-transform: uppercase;
		font-size:30px
		}
	.kotaklogin{
		width: 350px;
		background: white;
		margin: 80px auto;
		padding: 50px 20px;
		font-family: calibri;
		}
	label{
		font-size: 16pt;
		}
	.formlogin{
		box-sizing: border-box;
		width: 100%;
		padding: 10px;
		font-size: 11pt;
		margin-bottom: 20px;
		}
	.tombollogin{
		background:green;
		color: white;
		font-size: 11pt;
		width: 100%;
		border: none;
		border-radius: 5px;
		padding: 10px 100px;
		margin: 20px auto;
		font-family: calibri;
		}
	.link{
		color:blue;
		text-decoration: none;
		font-size: 11pt;
		}
</style>
<body>
	<div class="kotaklogin">
	<b><p class="tulisanlogin"> Silakan Login </p></b>
	
	<form action="" method="POST">
		<label> Username </label>
		<input type="text" name="username" class="formlogin" placeholder="Username atau Email...">
		
		<label> Password </label>
		<input type="password" name="password" class="formlogin" placeholder="password...">
		
		<center><input type="submit" class="tombollogin" name="submit" value="LOGIN"></center>
	
			<p style="float:left";><a class="link" href="daftar.html"> Kembali </a>
		
	</form>
	<?php 
		if (isset($_POST['submit'])) {
			include 'database.php';
			$username = $_POST['username'];
			$password = $_POST['password'];
			$cek = mysqli_query($kondisi,"SELECT * from tb_user WHERE username = '".$username."' AND password = '" .$password."'");
			if(mysqli_num_rows($cek) > 0){
			$d = mysqli_fetch_object($cek);
			echo '<script>window.location="rumah.html"</script>';
			}
			else{
				echo '<script>alert("username atau password anda salah!")</script>';
			}
		}
	 ?>
	<div>
</body>
</html>
		