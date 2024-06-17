<?php
	require_once('db.php');

	$sql= "CREATE TABLE texas_de_brazil(
			id INT NOT NULL AUTO_INCREMENT,
			votes INT,
			PRIMARY KEY (id)) ";

	if (mysqli_query($conn, $sql)) {
		echo "Texas de Brazil table created Successfully!";
	} else {
		echo "Error creating table: " . mysqli_error ($conn);
	}

	$sql2 = "INSERT INTO texas_de_brazil(votes) VALUES ('0') ";
	if (mysqli_query($conn, $sql2)) {
		echo "Zero value inserted in votes field!";
	} else {
		echo "Error: " . mysqli_error($conn);
	}
?>