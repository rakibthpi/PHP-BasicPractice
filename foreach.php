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
		// $number = array("1"=>"Rakib","Hosen","Natok","Muvi");
		// intreged array 
		// $defarent = array('shuchi','kuchi','rakib','rana','rasel');

		// $langth = count($defarent);
		// echo $langth;
		// for ($i=0; $i < $langth; $i++) { 
		// 	echo $defarent[$i].",<br>";
		// }


		// Array How many Type =>Specifying with array()

		$defarent = array(
			'tmi1'=>'shuchi',
			'tmi2'=>'kuchi',
			'tmi3'=>'rakib',
			'tmi4'=>'rana',
			'tmi5'=>'rasel'
		);

		foreach($defarent as $key=>$newname){
			echo $key." ".$newname.'<br>';
		}

		

	?>
</body>
</html>