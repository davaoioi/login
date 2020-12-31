<?php
	session_start();
	// Menghapus semua Sessions
	if(session_destroy())
	{
		// mengarahkan ke halaman utama
		header("Location:index.php");
	}
?>