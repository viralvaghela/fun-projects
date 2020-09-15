<!DOCTYPE html>
<html>
<head>
	<title>MD5 Encrypt & Decrypt</title>
</head>
<body>
	<h2>Encrypt Text</h2>
	<form name="encdec" action="" method="GET">
		<input type="text" name="enc" id="enc" ><br>
		<?php 
			if (isset($_GET['encrypt'])) {

				$str=$_GET['enc'];
				echo "<h2>Encrypted Text : ".md5($str)."</h2>";
			}

			 ?>
			 
		<input type="submit" name="encrypt" value="encrypt">	<br>

	 	<h2>Decrypt Text</h2>
		<input type="Text" name="dec" id="dec"><br>
		<?php
		if (isset($_GET['decrypt'])) {

			$hash = $_GET['dec'];
			$hash_type = "md5";
			$email = "vaghelaviral4@gmail.com";
			$code = "393897215d78182d";
			$response = file_get_contents("https://md5decrypt.net/en/Api/api.php?hash=".$hash."&hash_type=".$hash_type."&email=".$email."&code=".$code);
			
			
		}

		?>
		<input type="submit" name="decrypt" value="decrypt"> 
	</form>
	
</body>
</html>