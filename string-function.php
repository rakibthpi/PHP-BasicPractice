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

		// Name to string code 
		$rak = convert_uuencode("Md.Rakib Hosen");
		echo ($rak)."<br>";


		$rakib = $rak;
		echo convert_uudecode($rakib)."<br>";

		// $str = "Hello World!";
		// echo count_chars($str,3);

		// charanter convert number
		// $str = crc32("Md.Rakib hosen");
		// echo($str);


		// charecter value count 
		$str = "Hello world. It's a beautiful day.";
		print_r (explode(" ",$str))."<br><br><br>";
		echo lcfirst("Hello world!");
		echo "<br><br>";
		
		echo strcspn("Hello .world!","w");
		echo "<br><br>";
		echo strripos("This is a php developer","PHP");






	?>
</body>
</html>