<?php 

require "../konekso.php";

if(isset($_POST['simpan'])){

		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$prodi = $_POST['prodi'];
		$target = "admin/".basename($_FILES['foto']['name']);
		$image = $_FILES['foto']['name'];

		$sql = "INSERT INTO mahasiswa (nim,nama,kelas,prodi,foto) VALUES ('$nim', '$nama', '$kelas', '$prodi','$image')";
		if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
			# code...
		}
		$query = mysqli_query($koneksi, $sql);
		if( $query ) {
				header('Location: home.php');
			} else {
				header('Location: form.php');
			} 
	} else {
		die("Maaf Anda Harus memasukkan data melalui Form Mahasiswa");
	}

mysqli_close($koneksi);

?>