<?php 
	require 'konekso.php';

	if(isset($_POST['username'])){
		$username = stripslashes($_POST['username']);
		$username = mysqli_real_escape_string($koneksi,$username);
		$email = stripslashes($_POST['email']);
		$email = mysqli_real_escape_string($koneksi,$email);
		$password = stripslashes($_POST['password']);
		$password = mysqli_real_escape_string($koneksi,$password);
		$query = "INSERT INTO users (username,email,password) VALUES ('$username','email','".md5($password)."')";
		$result = mysqli_query($koneksi,$query);
		if ($result) {
			echo "<h3>Register Berhasil</h3>
			<br>Silahkan klik disini untuk <a href='index.php'>Login</a>";

		}
	}
 ?>