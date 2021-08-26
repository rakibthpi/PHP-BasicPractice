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

		// For Loop This a Bilding function .... arokom onek Function ace je php te bilt kora ace 
		$defarent = array('shuchi','kuchi','rakib','rana','rasel');

		$langth = count($defarent);
		echo $langth;
		for ($i=0; $i < $langth; $i++) { 
			echo $defarent[$i].",<br>";
		}

		echo "<br><br><br>";
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
		echo "<br><br><br>";

		// Multidumentional Array 

		$motor = array(

				array('Hero', 'hero honda+', 'Hero Spander+', 'Hank'),
				array('Bajaj', 'CT100', 'Discover 25', 'Discover 100', 'palsear','Daying'),
				array('Yamaha', 'yamaha FZ', 'yamaha saluto', 'yamaha fazer'),
				array('TVS', 'TVS metro', 'TVS Apache', 'Tvs Stryker')
		);
		$motorrow = count($motor);

		// $subrow = count();
		// echo $subrow;





		// Multi dymentional array + for loop 
		for($row=0;$row<$motorrow;$row++){
			echo "Row Number = $row";
			$motorcol = count($motor[$row]);
			echo "<ul>";

			for($col=0;$col<$motorcol;$col++){ ?>
				<ul>
					<li><a href="<?php echo $adata = $motor[$row][$col]; ?>">
						<?php 
							$adata = $motor[$row][$col];
							echo $adata;
						?>
					</a></li>
				</ul>
				<?php
			}
		}

		

	?>
</body>
</html>