<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sing Form</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="container-form">
		<form action="validate.php" method="POST" accept-charset="utf-8">
			<h5>Name</h5> 
			<input type="text" name="name" placeholder="Insert Name" maxlength="50" minlength="5" required>
			<h5>Phone</h5>
			<input type="tel" name="phone" placeholder="000-000-0000" maxlength="10" minlength="10" required>
			<h5>E-mail</h5>
			<input type="email" name="email" placeholder="aaaa@bbb.com" maxlength="30" minlength="7" required>
			<div class="div-gender">
				Gender
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="other">Other
			</div>
			<textarea name="comment" placeholder="All Comments" maxlength="200"></textarea>
			<hr>
			<button type="submit" name="accept">Accept</button>
		</form>
	</div>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>