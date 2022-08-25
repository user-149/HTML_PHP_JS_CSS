<?php 
	echo "Welcome to the internet. LOL xD"
 ?>

 <!DOCTYPE html>
 <html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>
	<body>
		<h1>
			dibawah ini adalah PHP didalam HTML
		</h1>
		<?php 
			echo "hello there heuheuheu"
		 ?>
		<h1>
		 	<?php 
		 		echo "ini adalah nested PHP didalam pharagraph"
		 	 ?>
		</h1>
		<?php 
			$nama = "Tidur";
			echo "saya mencintai $nama";
			echo "<br>";
			echo "saya mencintai ".$nama;
			echo "<br><br><br>";
			$x = 5 +5;
			echo $x;
			echo "<br><br><br>";
			$z = " meren";
			function lePacar(){
				$y = "pacar saya";
				global $z;
				echo "dia adalah $y".$z;
				echo "<br>";
			}
			lePacar();
			function leKatanya(){
				$y = "user149";
				global $z;
				echo "katanya saya adalah $y".$z;
				echo "<br>";
			}
			leKatanya();
			$isMenikah = True;
			$notMenikah = False;
			echo $isMenikah."<br>";
			var_dump($notMenikah);
			echo "<br><br><br>";
			$anaks = array("budi","wati","iwan");
			print_r($anaks);
			echo "<br>anak pertama adalah ";
			print_r($anaks[0]);
			echo "<br>";
			$null = null;
			var_dump($null);
			echo strlen($null);
			echo "<br>";
		 ?>
	</body>
 </html>