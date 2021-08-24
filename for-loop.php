<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="assets/images/logo.png" type="image/gif" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 

	$a = 0;
	$b = 100;
	$total = 0;
	for($a; $a<=$b;$a++){
		echo $a."<br>";
		$total = $total+$a;
	}
	echo "<hr>";
	echo $total;

	?>
</body>
</html>