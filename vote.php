<?php
		require_once('db.php')
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vote Registration</title>
	<style>
		label {
			display: block;
			margin-bottom: 20px;
		}

		ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: darkred;
}

	</style>
</head>
<body>

	<ul>
  
  
		<li > <a href="all_votes.php">All Votes</a> </li>  
		<li><a class="active" href="index.php">Log out</a></li>
</ul>
		<div class="form-container">
			<h2>Register Your Vote</h2>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

				<p>Please select your favourite restaurant from the list:</p>

				<input type="radio" id="woodford_cafe" name="vote" value="woodford_cafe">
				<label for="woodford_cafe">Woodford cafe</label><br>

				<input type="radio" id="texas_de_brazil" name="vote" value="texas_de_brazil">
				<label for="texas_de_brazil">Texas de Brasil</label><br>

				<input type="radio" id="green_jacket" name="vote" value="green_jacket">
				<label for="green_jacket">Green Jacket</label><br>

				<input type="radio" id="samurai" name="vote" value="samurai">
				<label for="samurai">Samurai</label><br>

				<input type="radio" id="aioli" name="vote" value="aioli">
				<label for="aioli">Aioli</label><br><br>

				<input type="submit" name="submit" value="VOTE"><br><br>
				

			</form>
			
		</div>
</body>
</html>

<?php

		if (isset($_POST['submit']))
		{
			if (!empty($_POST['vote'])){
				$vote = trim($_POST['vote']);
			}

			if ($vote == "woodford_cafe"){
				$table = 'woodford_cafe';
			}
			if ($vote == "texas_de_brazil"){
				$table = 'texas_de_brazil';
			}
			if ($vote == "green_jacket"){
				$table = 'green_jacket';
			}
			if ($vote == "samurai"){
				$table = 'samurai';
			}
			if ($vote == "aioli"){
				$table = 'aioli';
			}


			$sql = "UPDATE $table SET votes = votes + 1 WHERE id=1";

			if (mysqli_query($conn, $sql)) {
				echo "Your vote has been recorded successfully!";
			} else {
				echo "Error: " . mysqli_error($conn);
			}
		}
?>