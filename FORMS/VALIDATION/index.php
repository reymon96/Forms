<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VALIDATION</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="validation.php">
		Name: <input type="text" name="name" required>
		<br>
		E-mail: <input type="email" name="email" required>
		<br>
		Website: <input type="text" name="website">
		<br>
		Comment: <textarea name="comment" rows="5" cols="40" placeholder="Comments"></textarea>
		<br>
		Gender:
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="other">Other
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>