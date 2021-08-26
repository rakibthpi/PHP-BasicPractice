<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="assets/images/logo.png" type="image/gif" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo "This is a Function Practice"; ?></title>
</head>
<body> 
	<?php 


		// Usre define Function ......... 
		function functionname(){
			return "Function Name Output .....Test";
		}
		echo functionname();
		echo "<br><br><br>";


		// First Function Area start 
		function namehobe($fname){
			return $fname;
		}
		echo namehobe("Md.Rakib Hosen");
		echo "<br><br><br>";


		// Second Function Area start 
		function name($name1,$name2){
			return $name1." ".$name2;
		}
		echo name("Coder It","Solution");
		echo "<br><br><br>";

		// Final Function area start
		function coderit(){
			
		}

	?>
</body>
</html>