<?php
	$dbHost = 'localhost';
	$dbUser = 'root';
	$dbPass = '';
	$dbName = 'vietproshop';

	$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

	if ($conn) {
		$setLang = mysqli_query($conn, "SET NAMES 'utf8'");
	} else {
		die('Kết nối thaatts bại!'.mysqli_connect_error());
	}
?>