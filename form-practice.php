<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<?php
		if (isset($_POST['submit'])){
			$mark = $_POST['st_roll'];
			if(empty($mark)){
				echo "This is a must be cherecter";
			}
			else if(is_numeric($mark)){
				// It is a Mark Select area start 
				if($mark>100 or 0>$mark){
					echo "This number Not mach !!";
				}
				else{
					if ($mark>=80) {
						echo "Your gred A+";
					}
					else if($mark>=70){
						echo "Your gred A";
					}
					else if($mark>=60){
						echo "Your gred A-";
					}
					else if($mark>=50){
						echo "Your gred B";
					}
					else if($mark>=40){
						echo "Your gred C";
					}
					else if($mark>=33){
						echo "This is gred D";
					}
					else{
						echo "This is a Fail";
					}
				}
				// It is a Mark Select area end 
			}
			else{
				echo "Must be a Number Requerd";
			}
		}
	?>
	<div class="form_area">
		<div class="container">
			<form action="" method="POST">
				<div class="row">
					<!-- This is a Number area start  -->
					<div class="offset-md-3 col-md-6 mt-4">
						<div class="input_single_item">
							<input type="text" class="form-control" name="st_roll" placeholder="Roll" required>
						</div>
					</div>
					<!-- This is a Number area End  -->
					<div class="offset-md-3 col-md-6 mt-4">
						<div class="input_single_item">
							<input type="submit" value="submits" name="submit">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	

	<link rel="stylesheet" href="">

	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/Modernizr.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>