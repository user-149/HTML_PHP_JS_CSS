<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="Assets/styles/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="Assets/scripts/jquery-3.6.0.js"></script>
		<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
		<script type="text/javascript" src="Assets/styles/bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
		<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="Assets/styles/bootstrap-5.2.0-dist/css/bootstrap.min.css">
		<title>Add Peserta</title>
	</head>
	<body>
		
		<h1>Add peserta</h1>
		<form name="frmPeserta" action="peserta_create.php" method="post">
			
			<table border="2" cellpadding="5" bgcolor="white">
				<tr>
					<td>
						<label>Nama</label>	
					</td>
					<td>
						<input type="text" name="txtNama">
					</td>
				</tr>
				<tr>
					<td>
						<label>Tanggal Lahir</label>
					</td>
					<td>
						<input type="date" name="dtpTanggalLahir">
					</td>
				</tr>
				<tr>
					<td>
						<label>Usia</label>
					</td>
					<td>
						<input type="number" name="txtUsia">
					</td>
				</tr>
				<tr>
					<td>
						<label>Kelamin</label>
					</td>
					<td>
						<input type="radio" name="opgkelamin" value="Pria">Pria
						<input type="radio" name="opgkelamin" value="Wanita" checked>Wanita
					</td>
				</tr>
				<tr>
					<td>
						<label>Menikah</label>
					</td>
					<td>
					<input type="checkbox" name="chkIsMenikah" checked="true">
					</td>
				</tr>
			</table>
			<input type="submit" name="cmdSubmit" onclick="">
		</form>

		<!-- <h1>
			Ini outputnya
		</h1>
		<p>
			<?php
				$nama = ($_POST['txtNama'] != "") ? ($_POST['txtNama']) : "Unknown";
				$TglLahir = ($_POST['dtpTanggalLahir'] != 0) ? ($_POST['dtpTanggalLahir']) : "Unknown";
				$usia = ($_POST['txtUsia'] != 0) ? ($_POST['txtUsia']) : "Unknown";
				$Kelamin = ($_POST['opgkelamin'] == "Pria") ? "Pria" : "Wanita";
				// if ($_POST['opgkelamin'] == "Pria") {
				// 	$Kelamin = "Pria";
				// } else if ($_POST['opgkelamin'] == "Wanita") {
				// 	$Kelamin = "Wanita";
				// } else {
				// 	$Kelamin = "WaRia";
				// }

				$Status = (isset($_POST['chkIsMenikah'])) ? "Sudah Taken" : "Jomblo Menahun" ;
				// if (isset($_POST['chkIsMenikah'])) {
				// 	$Status = "Sudah Taken";
				// } else {
				// 	$Status = "Jomblo Menahun";
				// }


				echo "Nama : $nama <br>";
				echo "Tanggal Lahir : $TglLahir <br>";
				echo "Usia : $usia <br>";
				echo "Kelamin : $Kelamin <br>";
				echo "Menikah : $Status <br>";
			 ?>
		</p> -->
	</body>
</html>