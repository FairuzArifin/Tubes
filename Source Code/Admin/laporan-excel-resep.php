<!DOCTYPE html>
<html>
<head>
	<title>Excel List Resep</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Akun Admin.xls");
	?>
 
	<center>
		<h1>Download Report Excel Resep</h1>
	</center>
 
	<table border="1">
		<tr>
			<th>No</th>
			<th>Resep</th>
			<th>Asal</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","tubes");
 
		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"SELECT * FROM makanan");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['makanan']; ?></td>
			<td><?php echo $d['asal']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>