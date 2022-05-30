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
			<li><a href="beranda.php">Beranda<a/></li>
			<li><a href="data-peserta.php">Relawan COVID19<a/></li>
			<li><a href="keluar.php">Keluar<a/></li>
		</ul>
	</header>

	<!--bagian content-->
	<section class="content">
		<h2>Beranda</h2>
		<div class="box">
			<h3>Selamat Datang Relawan Covid19 </h3>
			
		</div>
	</section>
</body>
</html>