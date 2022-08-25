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
		<h2>
			Summary List Pelatihan
		</h2>
		<?php
			// membuat query;
			$strQuery="SELECT * FROM viewPelatihan;";
			// proses query;
			$query=mysqli_query($conTraining, $strQuery) or die(mysqli_error());
			// fetching data;
		 ?>
		<table class="table center" border="2" cellpadding="5">
			<tr>
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
					Peserta
				</th>
				<th>
					Instruktur
				</th>
			</tr>
			<?php 
				while ($data=mysqli_fetch_array($query)) {
					// code...
					$ruang=$data["ruang"];
					$tanggal=$data["tanggal"];
					$materi=$data["materi"];
					$murid=$data["murid"];
					$guru=$data["guru"];
				
			 ?>
			<tr>
				<td>
					<?php echo $ruang; ?>
				</td>
				<td>
					<?php echo $tanggal; ?>
				</td>
				<td>
					<?php echo $materi; ?>
				</td>
				<td>
					<?php echo $murid; ?>
				</td>
				<td>
					<?php echo $guru; ?>
				</td>
			</tr>
			<?php 
				}
			 ?>
		</table>
	</body>
</html>