<!DOCTYPE html>
<html>
<html lang="en">
	<head>
		<script type="text/javascript" src="Assets/styles/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="Assets/scripts/jquery-3.6.0.js"></script>
		<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
		<script type="text/javascript" src="Assets/styles/bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="Assets/styles/bootstrap-5.2.0-dist/css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			body {
			  font-size: 28px;
			}

			ul {
			  list-style-type: none;
			  margin: 0;
			  padding: 0;
			  overflow: hidden;
			  background-color: #333;
			  position: -webkit-sticky; /* Safari */
			  position: sticky;
			  top: 0;
			}

			li {
			  float: left;
			}

			li a {
			  display: block;
			  color: white;
			  text-align: center;
			  padding: 14px 16px;
			  text-decoration: none;
			}

			li a:hover {
			  background-color: #111;
			}

			.active {
			  background-color: #4CAF50;
			}
		</style>
		<title>Website Training</title>		
	</head>
	<body>
		<nav class="navbar navbar-expand-sm bg-light sticky-top">
			<ul class="navbar-nav me-auto">
				<li class="nav-brand"> 
					<a class="active" href="/training">
						Beranda
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#master_data" role="button" data-bs-toggle="dropdown">
						Master Data
					</a>
					<ul class="dropdown-menu">
						<li class="dropdown-item">
							<a href="./peserta_add.php">
								Peserta
							</a>
						</li>
						<li class="dropdown-item">
							<a href="#listpeserta">
								Instruktur
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#transaksi" role="button" data-bs-toggle="dropdown">
						Transaksi
					</a>
					<ul class="dropdown-menu">
						<li class="dropdown-item">
							<a href="#pelatihan">
								Pelatihan
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#laporan">
						Laporan
					</a>
				</li>
				<li class="nav-item" style="float:right">
					<a href="#about">
						About
					</a>
				</li>
			</ul>
		</nav>
		<h1>
			Selamat datang di Website Training
		</h1>
		<h2>
			Summary Pelatihan
		</h2>
		<?php
			// deklarasi informasi server;
			$server="localhost";
			$userName="root";
			$password="";
			$database="training";
			// string koneksi;
			$conTraining=mysqli_connect($server,$userName,$password,$database);
			// membuat query;
			$strQuery="SELECT * FROM viewPelatihan;";
			// proses query;
			$query=mysqli_query($conTraining, $strQuery) or die(mysqli_error());
			// fetching data;
		 ?>
		<table class="table" border="2" cellpadding="5">
			<tr>
				<td>
					Ruang
				</td>
				<td>
					Tanggal
				</td>
				<td>
					Materi
				</td>
				<td>
					Peserta
				</td>
				<td>
					Instruktur
				</td>
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
		<h2>
			Summary Peserta
		</h2>
		<?php
			// deklarasi informasi server;
			$server="localhost";
			$userName="root";
			$password="";
			$database="training";
			// string koneksi;
			$conTraining=mysqli_connect($server,$userName,$password,$database);
			// membuat query;
			$strQuery="SELECT * FROM peserta;";
			// proses query;
			$query=mysqli_query($conTraining, $strQuery) or die(mysqli_error());
			// fetching data;
		 ?>
		<table class="table" border="2" cellpadding="5">
			<tr>
				<td>
					Nama
				</td>
				<td>
					Lahir
				</td>
				<td>
					Usia
				</td>
				<td>
					Kelamin
				</td>
				<td>
					Status
				</td>
			</tr>
			<?php 
				while ($data=mysqli_fetch_array($query)) {
					// code...
					$nama=$data["Nama"];
					$tanggal=$data["TanggalLahir"];
					$usia=$data["Usia"];
					$kelamin=$data["Kelamin"];
					$status =$data["IsMenikah"];
				
			 ?>
			<tr>
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
			</tr>
			<?php 
				}
			 ?>
		</table>
	</body>
</html>