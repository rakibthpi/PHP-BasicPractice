<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="assets/images/logo.png" type="image/gif" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Connection</title>
</head>
<body>
	<form action="form.php">
		<input type="text" name="name" required>
		<input type="text" name="roll" required>
		<input type="submit" value="Submit" name="submit">
	</form>
	<?php 
		if (isset($_GET['success'])) {
			echo "Submit success";
		}
	?>
</body>
</html>