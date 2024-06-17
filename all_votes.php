<?php
  require_once('db.php')
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View all Votes</title>
	<style>
		div {
			border: solid;
		}

		p {
			display: block;
		}
	</style>
</head>
<body>
	<div class="card">
		<p align="center"><font size="6"><b>VIEW ALL VOTES</b></font></p>

		<?php
			$sql = "SELECT * from woodford_cafe";
			$result = mysqli_query($conn, $sql);
			$num_rows = mysqli_num_rows($result);

			if ($num_rows > 0) {
				$row = mysqli_fetch_assoc($result);
				  echo '<p align="center">Woodford Cafe: ' .$row["votes"]. '</p>';
			}

			$sql2 = "SELECT * from texas_de_brazil";
			$result2 = mysqli_query($conn, $sql2);
			$num_rows2 = mysqli_num_rows($result2);

			if ($num_rows2 > 0) {
				$row2 = mysqli_fetch_assoc($result2);
				  echo '<p align="center">Texas de Brazil: ' .$row2["votes"]. '</p>';
			}

			$sql3 = "SELECT * from green_jacket";
			$result3 = mysqli_query($conn, $sql3);
			$num_rows3 = mysqli_num_rows($result3);

			if ($num_rows3 > 0) {
				$row3 = mysqli_fetch_assoc($result3);
				  echo '<p align="center">Green Jacket: ' .$row3["votes"]. '</p>';
			}

			$sql4 = "SELECT * from samurai";
			$result4 = mysqli_query($conn, $sql4);
			$num_rows4 = mysqli_num_rows($result4);

			if ($num_rows4 > 0) {
				$row4 = mysqli_fetch_assoc($result4);
				  echo '<p align="center">Samurai: ' .$row4["votes"]. '</p>';
			}

			$sql5 = "SELECT * from aioli";
			$result5 = mysqli_query($conn, $sql5);
			$num_rows5 = mysqli_num_rows($result5);

			if ($num_rows5 > 0) {
				$row5 = mysqli_fetch_assoc($result5);
				  echo '<p align="center">Aioli: ' .$row5["votes"]. '</p>';
			}
		?>
		
	</div>

	<a href="vote.php">Vote</a> | <a href="index.php">Home</a>

</body>
</html>