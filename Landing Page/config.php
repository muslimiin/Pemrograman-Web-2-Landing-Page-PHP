<?php 
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'satepakhirin_db';

	$koneksi = mysqli_connect($host, $username, $password, $database);
	if (!$koneksi){
		echo "Terjadi kesalahan: ". mysqli_error($koneksi);
	}
 ?>