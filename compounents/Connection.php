<?php
	// deklarasi informasi server;
	$server="localhost";
	$userName="root";
	$password="";
	$database="training";
	// string koneksi;
	$conTraining=mysqli_connect($server,$userName,$password,$database);
	if ($conTraining->connect_error) {
		die("Connection failed: " . $conTraining->connect_error);
	}
 ?>