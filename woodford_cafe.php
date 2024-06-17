<?php
	require_once('db.php');

	$sql= "CREATE TABLE woodford_cafe (
			id INT NOT NULL AUTO_INCREMENT,
			votes INT,
			PRIMARY KEY (id)) ";

	if (mysqli_query($conn, $sql)) {
		echo "Woodford Cafe table created Successfully!";
	} else {
		echo "Error creating table: " . mysqli_error ($conn);
	}

	$sql2 = "INSERT INTO woodford_cafe (votes) VALUES ('0') ";
	if (mysqli_query($conn, $sql2)) {
		echo "Zero value inserted in votes field!";
	} else {
		echo "Error: " . mysqli_error($conn);
	}
?>