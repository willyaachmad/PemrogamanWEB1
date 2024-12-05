<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMKN 1 Trowulan</title>
	<style>
		body {
			font-family: sans-serif;
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
		}
		th {
			background-color: #f2f2f2;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		a {
			color: blue;
			text-decoration: none;
		}
		a:hover {
			text-decoration: underline;
		}
		header {
			background-color: #007bff;
			color: white;
			padding: 10px;
			text-align: center;
		}
		nav {
			text-align: right;
			padding: 10px;
		}
	</style>
</head>

<body>
	<header>
		<h3>Siswa yang sudah mendaftar</h3>
	</header>
	
	<nav>
		<a href="form-daftar.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Sekolah Asal</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM calon_siswa";
		$query = mysqli_query($db, $sql);
		$no = 1;
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$no."</td>";
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['alamat']."</td>";
			echo "<td>".$siswa['jenis_kelamin']."</td>";
			echo "<td>".$siswa['agama']."</td>";
			echo "<td>".$siswa['sekolah_asal']."</td>";
			
			echo "<td>";
			echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
			$no++;
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
</body>
</html>