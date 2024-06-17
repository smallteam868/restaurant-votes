<?php
require_once('db.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Confirmation</title>
</head>
<body>
	<div class="card">
		<h2>Registration Confirmation</h2><br>
		<?php
			if (isset($_POST['submit']))
			{
				if (!empty($_POST['firstname'])){
					$fname = trim($_POST['firstname']);
				}
				if (!empty($_POST['lastname'])){
					$lname = trim($_POST['lastname']);
				}
				if ((!empty($_POST['email']))AND (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
					$email = trim($_POST['email']);
				} else {
					echo "Invalid email format! ";
				}
				if (!empty($_POST['phone'])) {
						$phone = trim($_POST['phone']);
			} 
				
				if (!empty($_POST['password'])){
					$pwd = trim($_POST['password']);
				}
				//connect to db and clean	

			    $clean_fname= mysqli_escape_string($conn, $fname);
			    $clean_lname= mysqli_escape_string($conn, $lname);
			    $clean_email= mysqli_escape_string($conn, $email);
			    $clean_phone= mysqli_escape_string($conn, $phone);
			    $clean_pwd= mysqli_escape_string($conn, $pwd);

			}

			$sql = "INSERT INTO users (firstname, lastname, email, phone, password)
					VALUES ('$clean_fname', '$clean_lname', '$clean_email', '$clean_phone', '$clean_pwd') ";


					if (mysqli_query($conn, $sql)){
						echo "Registration Successfull!!";
					} else {
						echo "Error:" . mysqli_error($conn);
					}

					

		?>

		<form>
			<a href="index.php">Login</a>
			
		</form>
	</div>
</body>
</html>