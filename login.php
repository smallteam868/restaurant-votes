<?php
		require_once('db.php')
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

</head>
<body>
	<div class="card">
		<h1 align="center"><b>LOGIN</b></h1>
		<form name="input" action="validation.php" method="post">

			<label for="email"> Email: </label>
			<input type="text" name="email"><br><br>

			<label for="password">Password</label>
			<input type="password" name="password"><br><br>

			<input type="submit" name="submit" value="LOGIN">
		</form>
		<br>
		
		<form name="input" action="registration.html">
			<input type="submit" name="register" value="Register">
		</form>
		
	</div>

</body>
</html>