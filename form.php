<!DOCTYPE html>
<html>
<head>
	<title>Formulir Input Data Mahasiswa</title>
	<style>
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<header>
		<h1>Formulir Input Data Mahasiswa</h1>
	</header>
	<form action="proses.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nim </td>
				<td>:</td>
				<td><input type="text" name="nim" size="30" required="Nim harus di Isi"></td>
			</tr>
			<tr>
				<td>Nama </td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required="Nama harus di Isi"></td>
			</tr> 
			<tr>
				<td>Kelas </td>
				<td>:</td>
				<td>
					<select name="kelas">
						<option value="A1">A1</option>
						<option value="A2">A2</option>
					</select></td>
			</tr>
				<tr>
				<td>Program Studi </td>
				<td>:</td>
				<td>
					<select name="prodi">
						<?php
							require '../konekso.php';
							$sql="SELECT kode_prodi,nama_prodi from prodi where status='Y' order by nama_prodi asc";
							$queryp = mysqli_query($koneksi, $sql);
							while($data=mysqli_fetch_array($queryp)){
							echo"<option value=$data[kode_prodi] $pilih>$data[nama_prodi]</option>";}echo"</select>";
							
							mysqli_close($koneksi);
						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>:</td>
				<td>
					<input type="file" name="foto">
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" value="Simpan" name="simpan">
					<button type="submit" value="Batal" name="batal"><a href="home.php">Batal</a></button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>