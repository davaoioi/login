<!DOCTYPE html>
<html>
	<head>
		<title>Login Form</title>
	</head>
	<style>
		a{
			text-decoration: none;
		}
	</style>
<body>
	<h4>LOGIN FORM</h4>
	<form method="post" action="proses_login.php">
		<label>Username</label><br/>
		<input type="text" name="username" required><br/><br/>
		<label>Password</label><br/>
		<input type="password" name="password" required><br/><br/>
		<input type="submit" name="submit" value="Login">
	</form>
	<p>Belum Registrasi? <a href='registrasi.php'>Silahkan Register Disini</a></p>
</body>
</html>