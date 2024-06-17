<?php

$servername = "localhost";
$username = "root";
$password = "12345";
$db = "myDB";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
	die("connection failed:" . mysqli_connect_error());
}

?>