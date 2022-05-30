<?php  
	session_start();
	include 'koneksi.php';
	if($_SESSION['start_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DATA RELAWAN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=:wght@300&display=swap" rel="stylesheet">
</head>
<body>

	<!-- bagian header -->
	<header>
		<h1><a href="beranda.php">Data Relawan</a></h1>
		<ul>
			<li><a href="beranda.php">Beranda</a></li>
			<li><a href="data-peserta.php">Relawan COVID19</a></li>
			<li><a href="keluar.php">Keluar</a></li>
		</ul>
	</header>

	<!--bagian content-->
	<section class="content">
		<h2>DAFTAR RELAWAN COVID19</h2>
		<div class="box">
			<a href="cetak-peserta.php" target="_blank" class="btn-cetak">Print</a>
			<table class="table" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama lengkap</th>
						<th>Alamat Rumah</th>
						<th>Provinsi</th>
						<th>Email</th>
						<th>No Telepon</th>
						<th>Keahlian</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						$list_peserta = mysqli_query($conn, "SELECT * FROM tb_data");
						while($row = mysqli_fetch_array($list_peserta))
						{
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['NM_LENGKAP'] ?></td>
						<td><?php echo $row['ALMT_RUMAH'] ?></td>
						<td><?php echo $row['PROVINSI'] ?></td>
						<td><?php echo $row['EMAIL'] ?></td>
						<td><?php echo $row['NOTELP'] ?></td>
						<td><?php echo $row['KEAHLIAN'] ?></td>
						<td>
							<a href="hapus-peserta.php?id=<?php  echo $row['NM_LENGKAP']?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			
		</div>
	</section>
</body>
</html>