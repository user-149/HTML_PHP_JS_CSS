<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../Assets/styles/main.css">
		<script type="text/javascript" src="../Assets/styles/bootstrap-5.2.0-dist/js/bootstrap.bundle.js">
		</script>
		<script type="text/javascript" src="../Assets/styles/bootstrap-5.2.0-dist/js/bootstrap.js">
		</script>
		<script type="text/javascript" src="../Assets/scripts/jquery-3.6.0.js">
		</script>
		<style type="text/css">
			tr:nth-child(even) {
				background-color: #dddddd;
			}
		</style>
		<title>Edit Pelatihan</title>
		<?php
			error_reporting(E_ALL);
			include 'Connection.php';
			if (isset($_POST['submit']))
			{
				$PostPelatihanID = $_POST['InputPelatihanID'];
				$PostPelatihanRuang = $_POST['InputPelatihanRuang'];
				$PostPelatihanTanggal = $_POST['InputPelatihanTanggal'];
				$PostPelatihanMateri = $_POST['InputPelatihanMateri'];
				$PostPengajarID = $_POST['InputPengajarID'];
				$PostPesertaID = $_POST['InputPesertaID'];

				$strQuery = "UPDATE pelatihan SET
					Pelatihan_Ruang = '{$PostPelatihanRuang}',
					Pelatihan_Tanggal = '{$PostPelatihanTanggal}',
					Pelatihan_Materi = '{$PostPelatihanMateri}',
					Pengajar_ID = '{$PostPengajarID}',
					Peserta_ID = '{$PostPesertaID}'
				WHERE Pelatihan_ID = '{$PostPelatihanID}'";

				$query = mysqli_query($conTraining, $strQuery);
				header('location: List_Pelatihan.php');
			}
			$GetPelatihanID=$_GET['id'];
			$strQuery="SELECT * FROM pelatihan WHERE Pelatihan_ID = '{$GetPelatihanID}'";
			$query=mysqli_query($conTraining, $strQuery);
			if(!$query) die('Error: Data tidak tersedia');
			$data=mysqli_fetch_array($query); 
			function is_select($var, $val) {
				if ($var == $val) return "selected='selected'";
				return false;
			}
		?>
	</head>
	<body>
		<div class="header">
			<img src="../Assets/images/YEID_GEAR_UP.png" alt="YEID GEAR UP" width="100%">
		</div>
		<ul class="navbar">
			<li>
				<a href="/training">
					127.0.0.1
				</a>
			</li>
			<li>
				<div class="dropdown active">
					<button class="dropbtn">
						Master Data
						<i class="fa fa-caret-down">
						</i>
					</button>
					<div class="dropdown-content">
						<a href="List_Pelatihan.php">
							List Pelatihan
						</a>
						<a class="active" href="List_Pengajar.php">
							List Pengajar
						</a>
						<a href="List_Peserta.php">
							List Peserta
						</a>
					</div>
				</div>
			</li>
			<li>
				<a href="News.php">
					News
				</a>
			</li>
			<li>
				<a href="Contact.php">
					Contact
				</a>
			</li>
			<li style="float:right">
				<a href="About.php">
					About
				</a>
			</li>
		</ul>
		<h2>
			Edit Pelatihan
		</h2>
		<form method="post" action="Edit_Pelatihan.php" enctype="multipart/form-data">
			<table class="table center" border="2" cellpadding="5">
				<tr>
					<td>
						<label>
							Ruangan
						</label>
					</td>
					<td>
						<input type="text" name="InputPelatihanRuang" value="<?php echo $data['Pelatihan_Ruang'];?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Tanggal Pelatihan
						</label>
					</td>
					<td>
						<input type="date" name="InputPelatihanTanggal" value="<?php echo $data['Pelatihan_Tanggal'];?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Materi Pelatihan
						</label>
					</td>
					<td>
						<input type="text" name="InputPelatihanMateri" value="<?php echo $data['Pelatihan_Materi'];?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							ID Instruktur
						</label>
					</td>
					<td>
						<input type="number" name="InputPengajarID" value="<?php echo $data['Pengajar_ID'];?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							ID Peserta
						</label>
					</td>
					<td>
						<input type="number" name="InputPesertaID" value="<?php echo $data['Peserta_ID'];?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Save
						</label>
					</td>
					<td>
						<div class="submit">
							<div hidden>
								<input type="number" name="InputPelatihanID" value="<?php echo $GetPelatihanID;?>" />	
							</div>
							<input type="submit" name="submit" value="Submit" />
						</div>
					</td>
				</tr>
			</table>
		</form>
		<footer>
			<p>
				&copy; 2022, PT Yamaha Motor Electronics Indonesia
			</p>
		</footer>
	</body>
</html>