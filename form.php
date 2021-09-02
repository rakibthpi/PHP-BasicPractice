<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="assets/images/logo.png" type="image/gif" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Connection</title>
</head>
<body>
	<?php

	echo $_REQUEST['name']."<br>";
	echo $_REQUEST['roll']."<br>";
	header('location:form-connection.php?success');
	?>
</body>
</html>