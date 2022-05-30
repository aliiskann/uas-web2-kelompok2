<?php
	// membuat koneksi database
	$host = 'localhost';
	$user = 'opendevw_user';
	$pass = 'PYqENL=?*Sy-';
	$db   = 'opendevw_db';

	$conn = mysqli_connect($host, $user, $pass, $db);

	if(!$conn){
		echo 'Error : '.mysqli_connect_error($conn);
	}

?>