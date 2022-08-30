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
		<title>Edit Pengajar</title>
		<?php
			error_reporting(E_ALL);
			include 'Connection.php';
			if (isset($_POST['submit']))
			{
				$PostPesertaID = $_POST['InputPesertaID'];
				$PostPesertaName = $_POST['InputPesertaName'];
				$PostPesertaBirthDay = $_POST['InputPesertaBirthDay'];
				$PostPesertaUsia = $_POST['InputPesertaUsia'];
				$PostPesertaKelamin = $_POST['InputPesertaKelamin'];
				$PostPesertaStatus = (isset($_POST['InputPesertaStatus']));

				$strQuery = "UPDATE peserta SET
					Peserta_Name = '{$PostPesertaName}',
					Peserta_BirthDay = '{$PostPesertaBirthDay}',
					Peserta_Usia = '{$PostPesertaUsia}',
					Peserta_Kelamin = '{$PostPesertaKelamin}',
					Peserta_Status = '{$PostPesertaStatus}'
				WHERE Peserta_ID = '{$PostPesertaID}'";

				$query = mysqli_query($conTraining, $strQuery);
				header('location: List_Peserta.php');
			}
			$GetPesertaID=$_GET['id'];
			$strQuery="SELECT * FROM peserta WHERE Peserta_ID = '{$GetPesertaID}'";
			$query=mysqli_query($conTraining, $strQuery);
			if(!$query) die('Error: Data tidak tersedia');
			$data=mysqli_fetch_array($query); 
			$GetPesertaName=$data['Peserta_Name'];
			$GetPesertaBirthDay = $data['Peserta_BirthDay'];
			$GetPesertaUsia = $data['Peserta_Usia'];
			$GetPesertaKelamin = $data['Peserta_Kelamin'];
			$GetPesertaStatus = (isset($data['Peserta_Status']));
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
			Edit Peserta
		</h2>
		<form method="post" action="Edit_Peserta.php" enctype="multipart/form-data">
			<table class="table center" border="2" cellpadding="5">
				<tr>
					<td>
						<label>
							Nama
						</label>
					</td>
					<td>
						<input type="text" name="InputPesertaName" value="<?php echo $GetPesertaName;?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Tanggal Lahir
						</label>
					</td>
					<td>
						<input type="date" name="InputPesertaBirthDay" value="<?php echo $GetPesertaBirthDay;?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Usia
						</label>
					</td>
					<td>
						<input type="Number" name="InputPesertaUsia" value="<?php echo $GetPesertaUsia;?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Jenis Kelamin
						</label>
					</td>
					<td>
						<input type="radio" name="InputPesertaKelamin" value="Pria"
						<?php if ($GetPesertaKelamin == 'Pria') : ?>
							checked="checked"
						<?php endif ?>>Pria<br>
						<input type="radio" name="InputPesertaKelamin" value="Wanita"
						<?php if ($GetPesertaKelamin == 'Wanita') : ?>
							checked="checked"
						<?php endif ?>>Wanita<br>
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Status Pernikahan
						</label>
					</td>
					<td>
						<input type="checkbox" name="InputPesertaStatus" checked="<?php echo $GetPesertaStatus;?>">
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
								<input type="number" name="InputPesertaID" value="<?php echo $GetPesertaID;?>" />	
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