<?php
	include 'Connection.php';
	// prepare query;
	// $id = $_POST['txtID'];
	$id = $_GET['id'];
	// $Nama = $_POST['txtNama'];
	// $TanggalLahir = $_POST['dtpTanggalLahir'];
	// $Usia = $_POST['txtUsia'];
	// $Kelamin = ($_POST['opgkelamin'] == "Pria") ? "Pria" : "Wanita";
	// $IsMenikah = (isset($_POST['chkIsMenikah'])) ? TRUE : FALSE ;
	// membuat query;
	// $strQuery="INSERT INTO peserta(nama,TanggalLahir,usia,kelamin,isMenikah) VALUES ('$Nama','$TanggalLahir','$Usia','$Kelamin','$IsMenikah' );";
	$strQuery="DELETE FROM peserta WHERE id = '$id'";
	// proses query;
	$query=mysqli_query($conTraining, $strQuery) or die(mysqli_error($conTraining));
	if ($query) {
		// Your code is a succes...
		mysqli_close($conTraining); // Close connection
		echo "
			Task Failed Succesfully! JK
			<meta http-equiv='refresh' content='1, url=List_Peserta.php'>
		";
	} else {
		// you are a failure just like my son!
		echo "
			You are a Failure just like my son
			<meta http-equiv='refresh' content='1 url=List_Peserta.php'>
		";
	}
	// fetching data;

 ?>