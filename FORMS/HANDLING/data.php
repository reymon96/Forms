<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data POST</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Welcome</h1> 
	<h3>
		<?php
			echo ($_POST["name"]); 
		?>
	</h3>
	<br>
	<h1>Your email address is:</h1>
	<h3>
		<?php 
			echo ($_POST["email"]); 
		?>
	</h3>
</body>
</html>