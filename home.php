<!DOCTYPE html>
<html>
	<head>
	 <title>Data Mahasiswa</title>
	</head>
	<style>
		a{
			text-decoration: none;
			color: black;
		}

		a:hover{
			color: blue;
		}
	</style>
<body>
	<h4>Selamat Datang <?php echo $_SESSION['username']; ?>! || <a href="../logout.php"> Logout </a></h4>
	<header>
		<h3>Data Mahasiswa Sainteks</h3>
	</header>
	<nav>
		<a href="form.php">[+] Tambah Data</a>
	</nav>
	<br>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nim</th>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Prodi</th>
				<th>Foto</th>
				<th>Download</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				require '../konekso.php';
				$sql = "SELECT * FROM mahasiswa order by nim asc";
				$query = mysqli_query($koneksi, $sql);
				$no=1;
				while($mhs = mysqli_fetch_array($query)){
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$mhs['nim']."</td>";
				echo "<td>".$mhs['nama']."</td>";
				echo "<td>".$mhs['kelas']."</td>";
				echo "<td>";
				$ambil=mysqli_query($koneksi,"select * from prodi where kode_prodi='$mhs[prodi]'");
				$data=mysqli_fetch_array($ambil);
				$jurusan=$data['nama_prodi'];
				echo "$jurusan";
				echo "</td><td>";
				echo "<img src='admin/".$mhs['foto']."' width=100 height=100>";
				echo "</td><td>";
				echo "<a href='download.php?file=$mhs[foto]'> Download </a>";
				echo "</td><td>";
				echo "<a href='form_edit.php?nim=".$mhs['nim']."'>Edit</a> | ";
				echo "<a href='hapus.php?nim=".$mhs['nim']."' Onclick=\"return confirm('Anda Yakin Menghapus
				?')\">Hapus</a>";
				echo "</td>";
				echo "</tr>";
				$no++;
				}
				mysqli_close($koneksi);
			?>
		</tbody>
	</table>
	<p>Jumlah Mhs: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>