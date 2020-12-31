<?php
	require('konekso.php');
	session_start();
	// jika form di submit, masukkan data ke basis data.
	if (isset($_POST['username'])){
	// meghilangkan backslashes
	$username = stripslashes($_POST['username']);
	//memberi perlindungan dari karakter khusus dalam string
	$username = mysqli_real_escape_string($koneksi,$username);
	$password = stripslashes($_POST['password']);
	$password = mysqli_real_escape_string($koneksi,$password);
	//memeriksa apakah user ada di database apa tidak
	$query = "SELECT * FROM users WHERE username='$username' and password='".md5($password)."'";
	$result = mysqli_query($koneksi,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	if($rows==1){
	$_SESSION['username'] = $username;
	// Redirect user to index.php
	header("Location:admin/home.php");
		}else{
		echo "<h3>Username atau password Salah.</h3>
		<br/>Klik di sini untuk <a href='Index.php'>Login</a>";
		}
	}
?>