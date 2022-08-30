<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="Assets/styles/main.css">
		<script type="text/javascript" src="Assets/styles/bootstrap-5.2.0-dist/js/bootstrap.bundle.js">
		</script>
		<script type="text/javascript" src="Assets/styles/bootstrap-5.2.0-dist/js/bootstrap.js">
		</script>
		<script type="text/javascript" src="Assets/scripts/jquery-3.6.0.js">
		</script>
		<script type="text/javascript" src="https://cdnjs."></script>
		<?php 
			include 'compounents/Connection.php';
		 ?>
		<title>
			Index
		</title>
	</head>
	<body>
		<div class="header">
			<img src="Assets/images/YEID_GEAR_UP.png" alt="YEID GEAR UP" width="100%">
		</div>
		<ul class="navbar">
			<li>
				<a class="active" href="/training">
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
						<a href="compounents/List_Pelatihan.php">
							List Pelatihan
						</a>
						<a href="compounents/List_Pengajar.php">
							List Pengajar
						</a>
						<a href="compounents/List_Peserta.php">
							List Peserta
						</a>
					</div>
				</div>
			</li>
			<li>
				<a href="compounents/News.php">
					News
				</a>
			</li>
			<li>
				<a href="compounents/Contact.php">
					Contact
				</a>
			</li>
			<li style="float:right">
				<a href="compounents/About.php">
					About
				</a>
			</li>
		</ul>
		<h3>
			WELCOME di Pelatihan Membuat Website programming dalam 3 hari!
		</h3>
		<p>
			Navbarnya akan "Stick" ketika sedang di scroll
		</p>
		<h4 align="center">
			Tekan Tombol berikut untuk melihat Ratio peserta berdasarkan Gender
		</h4>
		<?php
			// membuat query;
			$strQuery="SELECT * FROM peserta;";
			// proses query;
			$query=mysqli_query($conTraining, $strQuery) or die(mysqli_error());
			// fetching data;
			$PopulasiPria = 0;
			$PopulasiWanita = 0;
			while ($data=mysqli_fetch_array($query)) {
				// code...
				if ($PesertaKelamin=$data["Peserta_Kelamin"] == "Pria") {
					// code...
					$PopulasiPria=$PopulasiPria+1;
				} elseif ($PesertaKelamin=$data["Peserta_Kelamin"] == "Wanita") {
					// code...
					$PopulasiWanita=$PopulasiWanita+1;
				} else {
				}
			}
		?>
		<div class="container center2">
			<div id="myProgress">
				<label>
					Total Peserta Pria : <?php echo $PopulasiPria; ?>
				</label>
				<div id="myBar1">
					1%
				</div>
			</div>
			<br>
			<div id="myProgress">
				<label>
					Total Peserta Wanita : <?php echo $PopulasiWanita; ?>
				</label>
				<div id="myBar2">
					1%
				</div>
			</div>
			<br>
			<button onclick="move()">Click Me</button> 
		</div>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<p>
			Some text to enable scrolling. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
		</p>
		<script type="text/javascript">
			// when user scrolls the page, execute ProgBar
			window.onscroll=function() {FunctionBar()};
			function FunctionBar() {
				// body...
				var winScroll=document.body.scrollTop || document.documentElement.scrollTop;
				var height=document.documentElement.scrollHeight-document.documentElement.clientHeight;
				var scrolled=(winScroll/height)*100;
				document.getElementById("ProgBar").style.width=scrolled+"%";
			}
			var i = 0;
			var wanita = (<?php echo $PopulasiWanita; ?>);
			var pria = (<?php echo $PopulasiPria; ?>);
			var total = pria + wanita;
			function move() {
				if (i == 0) {
					i = 1;
					var limit1 = (pria / total) * 100;
					var elem1 = document.getElementById("myBar1");
					var width1 = 0;
					var id1 = setInterval(frame1,10);
					var limit2 = (wanita / total) * 100;
					var elem2 = document.getElementById("myBar2");
					var width2 = 0;
					var id2 = setInterval(frame2,10);
					function frame1() {
						if (width1 >= limit1) {
							clearInterval(id1);
							i = 0;
						} else {
							width1++;
							elem1.style.width = width1 + "%";
							elem1.innerHTML = width1  + "%";
						}
					}
					function frame2() {
						if (width2 >= limit2) {
							clearInterval(id2);
							i = 0;
						} else {
							width2++;
							elem2.style.width = width2 + "%";
							elem2.innerHTML = width2  + "%";
						}
					}
				}
			}
		</script>
		<footer>
			<p>
				&copy; 2022, PT Yamaha Motor Electronics Indonesia
			</p>
		</footer>
	</body>
</html>