<?php 
$Title = "Susses";
$Name = $_POST['name'];
$Email = $_POST['email'];
$Website = $_POST['website'];
$Comment = $_POST['comment'];
$Gender = $_POST['gender'];

if(strlen($Name) < 3){
	$Name = "The name '".$Name."' is too short.";
	$Title = "Warning";
} else {
	$Name = "Name: ".$Name." is acepted.";
}

if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
	$Email = $Email." is valid email.";
} else {
	$Email = $Email." Not a valid email.";
}

if (empty($Website)) {
	$Website = "Website none.";
}

if (strlen($Comment) == 0) {
	$Comment = "No comments.";
} else {
	$Comment = '"'.$Comment.'"';
}

if (empty($Gender)) {
	$Gender = "Gender Unknown";
}


echo <<<EOT
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>$Title</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h3>$Name</h3>
	<h3>$Email</h3>
	<h3>$Website</h3>
	<h3>$Comment</h3>
	<h3>$Gender</h3>
</body>
</html>
EOT;
?>