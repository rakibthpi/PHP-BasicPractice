<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="assets/images/logo.png" type="image/gif" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Switch | Case</title>
</head>
<body>
	<?php 

	  $number = 10;

	switch ($number) {
		case 10:
			echo "This is a '".$number."' This a Switch Case Area";
			break;
		case 20:
			echo "This is a".$number." This a Switch Case Area";
			break;
		case 30:
			echo "This is a ".$number." It is a switch case Area!!";
		default:
			echo "This is Switch Case Defolt Area";
			break;
	}


   ?>
</body>
</html>