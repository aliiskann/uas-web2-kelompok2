<?php  
	include 'koneksi.php';

	if(isset($_POST['submit'])){

	// ambil 1 id terbesar di kolom ID_PENDAFTARAN, lalu ambil 5 karakter saja dari sebelah kanan
		$getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(ID_PENDAFTARAN, 5)) AS id FROM tb_data");
		
		// proses insert
		$insert = mysqli_query($conn, "INSERT INTO tb_data VALUES ('".$generateId."',
			'".$_POST['NM_LENGKAP']."',
			'".$_POST['ALMT_RUMAH']."',
			'".$_POST['PROVINSI']."',
			'".$_POST['EMAIL']."',
			'".$_POST['NOTELP']."',
			'".$_POST['KEAHLIAN']."'
		)");

		if($insert){
			echo '<script>window.location="data-peserta.php?id='.$generateId.'"</script>';
		}else{
			echo 'huft' .mysqli_error($conn);
		}

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

	<!-- bagian box formulir -->
	<section class="box-formulir">

		<h2>MASUKAN DATA RELAWAN</h2>

		<!-- bagian form -->
		<form action="" method="post">
				<div class="box">
					<table border="0" class="table-form">
						<tr>
							<td>Nama Lengkap</td>
							<td>:</td>
							<td>
								<input type="text" name="NM_LENGKAP" class="input-control">
							</td>
						</tr>
						<tr>
						<td>Alamat Lengkap</td>
							<td>:</td>
							<td>
								<textarea class="input-control" name="ALMT_RUMAH"></textarea>
							</td>
						</tr>
						<tr>
							<td>Nama Provinsi</td>
							<td>:</td>
							<td>
								<select class="input-control" name="PROVINSI">
									<option value="">--Pilih--</option>
									<option value="DKI Jakarta">DKI Jakarta</option>
									<option value="Jawa Barat">Jawa Barat</option>
									<option value="Banten">Banten</option>
									<option value="Jawa tengah">Jawa tengah</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td>
								<input type="text" name="EMAIL" class="input-control">
							</td>
						</tr>
												<tr>
							<td>No Telpon</td>
							<td>:</td>
							<td>
								<input type="text" name="NOTELP" class="input-control">
							</td>
						</tr>
							<tr>
							<td>Keahlian</td>
							<td>:</td>
							<td>
								<input type="text" name="KEAHLIAN" class="input-control">
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
							</td>
						</tr>
					</table>
				</div>
			</form>
	</section>

</body>
</html>