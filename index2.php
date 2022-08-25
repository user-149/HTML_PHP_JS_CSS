<!DOCTYPE html>
<html>

	<!-- ini adalah head -->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="Assets\styles\main.css">
		<title>
			training
		</title>
	</head>

	<!-- ini adalah body -->
	<body>


		<!-- Shortcut navigasi -->
		<?php 
			echo "hello there";
			include 'navigation1.php';
			include 'header.php'
		 ?>
		
		<!-- ini adalah judulnya -->
		<h1>
			Hello user149!
		</h1>
		<img
					src="Assets\images\Screenshot_20220531-233519_Tachiyomi.jpg"
					alt="tampang user149"
					width="10%"
		>

		<!-- ini adalah pharagraphnya -->
		<h2>
			ini contoh pharagraphnya
		</h2>
		<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>

		<!-- ini adalah bagian gambar -->
		<h2>
			ini contoh gambar
		</h2>
		<img 
			src="Assets\images\hour_glass_loading_w1.jpg"
			alt="Sedang Loading"
			width="70%">

		<script type="text/javascript">
			//variable (the valus is always changing)
			let username = "user";
			let usernumber = "149";
			user = username+usernumber;
			alert("welcome to the internet, "+user+" !");


		</script>


	</body>
</html>