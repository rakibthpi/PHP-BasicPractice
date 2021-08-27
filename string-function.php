<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
	<link rel="icon" href="assets/images/logo.png" type="image/gif" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 


		// Function Ta kintu aktu bujar ace 
		$jim = "I am a full stake developer!!";
		function gameing(){
			global $jim;

			return $jim;
		}
		echo gameing();
		echo "<br><br><br>";
		echo "This is a string Function start!!!";

		// Back / user korar jonnno ata 
		$str = "<br>Hello World!";
		echo addcslashes($str,"W")." <br><br>"; 

		$stra = "Hello World!";
		echo bin2hex($stra)." <br><br>";

		$str = "Hello World! <br><br>";
		echo $str . "<br> <br><br>";
		echo chop($str,"Hello");






	?>
</body>
</html>