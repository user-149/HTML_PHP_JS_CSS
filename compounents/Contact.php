<!DOCTYPE html>
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
		<title>
			Contact
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
				<div class="dropdown">
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
				<a class="active" href="Contact.php">
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
			Kontak page
		</h1>
		<div class="container center1">
			<form action="action_page.php">
				<label for="name">
					Nama anda
				</label>
				<input type="text" id="name" name="name" placeholder="Kimi no Namae..">
				<br>
				<!-- <label for="lname">
					No.Telp anda
				</label>
				<input type="number" id="lname" name="lastname" placeholder="Your last name..">
				<br> -->
				<label for="email">
					E-mail anda
				</label>
				<input type="text" id="email" name="email" placeholder="Email anda..">
				<br>
				<label for="subject">
					Subject
				</label>
				<textarea id="subject" name="subject" placeholder="Deskripsikan Kebutuhan Anda.." style="height:200px">
				</textarea>
				<input type="submit" value="Submit">
			</form>
		</div>
		<footer>
			<p>
				&copy; 2022, PT Yamaha Motor Electronics Indonesia
			</p>
		</footer>
	</body>
</html>