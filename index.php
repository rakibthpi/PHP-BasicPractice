<!DOCTYPE html>
<html lang="-US-en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="assets/images/logo.png" type="image/gif" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>if | elseif | else</title>
</head>
<body>
	<h1 style="font-size:20px"></h1>
	<?php
		// echo strlen("<h1 style='font-size:20px;' >My First PHP script!</h1>")."<br>";
	?>
	<?php

	  $x = 60;
	  if ($x>100 && 0<$x){
	  	echo "This is NOt Right Number";
	  }
	  elseif($x >= 80){
	  	echo "Your great: A+";
	  }
	  elseif($x >= 70){
	  	echo "Your Great : A";
	  }
	  elseif($x >= 60){
	  	echo "Your Great : A-";
	  }
	  elseif($x >= 50){
	  	echo "Your Great : B";
	  }
	  elseif($x >= 40){
	  	echo "Your Great : c";
	  }
	  elseif($x >= 33){
	  	echo "Your Great : D";
	  }
	  else{
	  	echo "this is a fail";
	  }

	  
	?>
</body>
</html>