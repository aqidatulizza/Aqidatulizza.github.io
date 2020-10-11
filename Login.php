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
		<section class="login-page">
		<form action="submitlogin.php" method="POST">
			<div class="box">
				<div class="form-head">
					<h2>Log In</h2>
				</div>
				<form action="" method="POST">
				<div class="form-body">
					<input type="text" name="username" placeholder="Username" />
					<input type="password" name="password" placeholder="Password" />
				</div>
				<div class="form-footer">
					<button type="submit" name="submit">Log In</button>
				</div>
				</form>
			</div>
			</section>

</body>
</html>
		
