<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../Assets/styles/main.css">
		<script type="text/javascript" src="../Assets/styles/bootstrap-5.2.0-dist/js/bootstrap.bundle.js">
		</script>
		<script type="text/javascript" src="../Assets/styles/bootstrap-5.2.0-dist/js/bootstrap.js">
		</script>
		<script type="text/javascript" src="../Assets/scripts/jquery-3.6.0.js">
		</script>
		<?php 
			include 'Connection.php';
		 ?>
		<title>
			List Peserta
		</title>
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
						<a href="List_Pengajar.php">
							List Pengajar
						</a>
						<a class="active" href="List_Peserta.php">
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
		<h1>
			Selamat datang di Page List Peserta
		</h1>
		<h3>
			Daftar Sebagai Peserta Sekarang!
		</h3>
		<form name="frmPeserta" action="Create_Peserta.php" method="post">
			<table class="center" border="2" cellpadding="5" bgcolor="white">
				<tr>
					<td>
						<label>
							Nama
						</label>	
					</td>
					<td>
						<input type="text" name="txtNama">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Tanggal Lahir
						</label>
					</td>
					<td>
						<input type="date" name="dtpTanggalLahir">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Usia
						</label>
					</td>
					<td>
						<input type="number" name="txtUsia">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Kelamin
						</label>
					</td>
					<td>
						<input type="radio" name="opgkelamin" value="Pria">Pria
						<input type="radio" name="opgkelamin" value="Wanita" checked>Wanita
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Menikah
						</label>
					</td>
					<td>
						<input type="checkbox" name="chkIsMenikah" checked="true">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Selesai!
						</label>
					</td>
					<td>
						<input type="submit" name="cmdSubmit" onclick="">
					</td>
				</tr>
			</table>
		</form>
		<h3>
			Unsubscribe dari pelatihan? silahkan masukkan ID anda
		</h3>
		<form name="frmPeserta1" action="Delete_Peserta.php" method="post">
			<table class="center" border="2" cellpadding="5" bgcolor="white">
				<tr>
					<th>
						<label for="id">
							masukkan ID anda
						</label>
					</th>
					<th>
						<input type="number" name="txtID" id="id">
					</th>
					<th>
						<button name="cmdDelete" onclick="">
							Delete
						</button>
					</th>
				</tr>
			</table>
		</form>
		<h2>
			Summary List Peserta
		</h2>
		<?php
			// membuat query;
			$strQuery="SELECT * FROM peserta;";
			// proses query;
			$query=mysqli_query($conTraining, $strQuery) or die(mysqli_error());
			// fetching data;
		 ?>
		<table class="table center" border="2" cellpadding="5">
			<tr>
				<th>
					ID
				</th>
				<th>
					Nama
				</th>
				<th>
					Lahir
				</th>
				<th>
					Usia
				</th>
				<th>
					Kelamin
				</th>
				<th>
					Status
				</th>
				<th>
					Modify
				</th>
			</tr>
			<?php 
				while ($data=mysqli_fetch_array($query)) {
					// code...
					$ID=$data["id"];
					$nama=$data["Nama"];
					$tanggal=$data["TanggalLahir"];
					$usia=$data["Usia"];
					$kelamin=$data["Kelamin"];
					$status =$data["IsMenikah"];
				
			 ?>
			<tr>
				<td>
					<?php echo $ID; ?>
				</td>
				<td>
					<?php echo $nama; ?>
				</td>
				<td>
					<?php echo $tanggal; ?>
				</td>
				<td>
					<?php echo $usia; ?>
				</td>
				<td>
					<?php echo $kelamin; ?>
				</td>
				<td>
					<?php echo ($status==1) ? "Sudah Taken" : "Jomblo Menahun"; ?>
				</td>
				<td>
					<a href="Change_Peserta.php">
						Change
					</a>
					<a href="Delete_Peserta.php?id=<?php echo $data['id']; ?>">
						Delete
					</a>
				</td>
			</tr>
			<?php 
				}
			 ?>
		</table>
	</body>
</html>