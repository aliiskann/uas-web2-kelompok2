<?php  
	include 'koneksi.php';


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Data Relawan</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=:wght@300&display=swap" rel="stylesheet">
	<script>
		window.print();
	</script>
</head>
<body>
	
	<h2>Data Relawan</h2><br><br>
	<table class="table" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Lengkap</th>
						<th>Alamat Rumah</th>
						<th>provinsi</th>
						<th>Email</th>
						<th>No Telepon</th>
						<th>Keahlian</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						$list_peserta = mysqli_query($conn, "SELECT * FROM tb_data");
						while($row = mysqli_fetch_array($list_peserta)){
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['NM_LENGKAP'] ?></td>
						<td><?php echo $row['ALMT_RUMAH'] ?></td>
						<td><?php echo $row['PROVINSI'] ?></td>
						<td><?php echo $row['EMAIL'] ?></td>
						<td><?php echo $row['NOTELP'] ?></td>
						<td><?php echo $row['KEAHLIAN'] ?></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>

</body>
</html>