<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="..\Assets\styles\main.css">
		<title>
			
		</title>
	</head>
	<body>
	<!-- Shortcut navigasi -->
			<?php 
				include '../navigation2.php';
			 ?>
		<h1>
			Kontak page
		</h1>

		<!-- ini adalah list -->
		<h2>
			Contact list
		</h2>
		<h4>
			Phone number
		</h4>
		<ul>
			<li>
				022-0012032 - Adi
			</li>
			<li>
				022-0012304 - Alif
			</li>
			<li>
				022-0012453 - Sony
			</li>
		</ul>
		<h2>
			Not found?
		</h2>
		<h3>
			leave a massage!
		</h3>
		<form>
			<div class="small-container">
				<label for="nama">
					masukkan nama anda
				</label>
				<input type="text" name="nama" id="nama">
				<label for="email">
					masukkan email anda
				</label>
				<input type="text" name="email" id="email">
				<button>
					submit
				</button>
			</div>
			
		</form>
		<div class="container">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d633.5988189642658!2d106.67393640127135!3d-6.339229179973192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e4fdc3550781%3A0xfa6acf0cb394632c!2sGudang%20Lintasarta%20Taman%20Tekno!5e0!3m2!1sid!2sid!4v1660027728864!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</body>
</html>