<?php
	include 'Connection.php';
	// prepare query;
	$Nama = $_POST['txtNama'];
	$TanggalLahir = $_POST['dtpTanggalLahir'];
	$Usia = $_POST['txtUsia'];
	$Kelamin = ($_POST['opgkelamin'] == "Pria") ? "Pria" : "Wanita";
	$IsMenikah = (isset($_POST['chkIsMenikah'])) ? TRUE : FALSE ;
	// membuat query;
	$strQuery="INSERT INTO instruktur(nama,TanggalLahir,usia,kelamin,isMenikah) VALUES ('$Nama','$TanggalLahir','$Usia','$Kelamin','$IsMenikah' );";
	// proses query;
	$query=mysqli_query($conTraining, $strQuery) or die(mysqli_error($conTraining));
	if ($query) {
		// Your code is a succes...
		echo "
			Task Failed Succesfully! JK
			<meta http-equiv='refresh' content='1, url=List_Pengajar.php'>
		";
	} else {
		// you are a failure just like my son!
		echo "
			You are a Failure just like my son
			<meta http-equiv='refresh' content='1 url=List_Pengajar.php'>
		";
	}
	// fetching data;

 ?>