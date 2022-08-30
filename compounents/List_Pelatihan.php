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
			List Pelatihan
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
						<a class="active" href="List_Pelatihan.php">
							List Pelatihan
						</a>
						<a href="List_Pengajar.php">
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
		<h1>
			Selamat datang di Page List Pelatihan
		</h1>
		<h3>
			Daftar Pelatihan Sekarang!
		</h3>
		<form name="frmPelatihan" action="Create_Pelatihan.php" method="post">
			<table class="center" border="2" cellpadding="5" bgcolor="white">
				<tr>
					<td>
						<label>
							Ruang
						</label>	
					</td>
					<td>
						<input type="text" name="txtRuang">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Tanggal
						</label>
					</td>
					<td>
						<input type="date" name="dtpTanggalPelatihan">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Materi
						</label>
					</td>
					<td>
						<input type="text" name="txtMateri">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							ID Pengajar
						</label>
					</td>
					<td>
						<input type="number" name="txtIDPengajar">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							ID Peserta
						</label>
					</td>
					<td>
						<input type="number" name="txtIDPeserta">
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
		<h2>
			Summary List Pelatihan
		</h2>
		<?php
			// membuat query;
			$strQuery="SELECT * FROM view_pelatihan";
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
					Ruang
				</th>
				<th>
					Tanggal
				</th>
				<th>
					Materi
				</th>
				<th>
					Pengajar
				</th>
				<th>
					Peserta
				</th>
				<th>
					Modify
				</th>
			</tr>
			<?php 
				while ($data=mysqli_fetch_array($query)) {
					// code...
					$PelatihanID=$data["Pelatihan_ID"];
					$PelatihanRuang=$data["Pelatihan_Ruang"];
					$PelatihanTanggal=$data["Pelatihan_Tanggal"];
					$PelatihanMateri=$data["Pelatihan_Materi"];
					$PengajarID=$data["Pengajar_ID"];
					$PesertaID=$data["Peserta_ID"];
				
			 ?>
			<tr>
				<td>
					<?php echo $PelatihanID; ?>
				</td>
				<td>
					<?php echo $PelatihanRuang; ?>
				</td>
				<td>
					<?php echo $PelatihanTanggal; ?>
				</td>
				<td>
					<?php echo $PelatihanMateri; ?>
				</td>
				<td>
					<?php echo $PengajarID; ?>
				</td>
				<td>
					<?php echo $PesertaID; ?>
				</td>
				<td>
					<a href="Edit_Pelatihan.php?id=<?php echo $data['Pelatihan_ID']; ?>">
						Change
					</a>
					or
					<a href="Delete_Pelatihan.php?id=<?php echo $data['Pelatihan_ID']; ?>">
						Delete
					</a>
				</td>
			</tr>
			<?php 
				}
			 ?>
		</table>
		<footer>
			<p>
				&copy; 2022, PT Yamaha Motor Electronics Indonesia
			</p>
		</footer>
	</body>
</html>