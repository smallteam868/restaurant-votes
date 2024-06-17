<?php
  require_once('db.php');

  if (isset($_POST['email'])){

  	$email = trim($_POST['email']);
  	$password = trim($_POST['password']);
  	$clean_email = mysqli_escape_string($conn, $email);
  	$clean_password = mysqli_escape_string($conn, $password);

  	$sql = "SELECT * from users where email = '$clean_email' AND password = '$clean_password' ";
  	$result = mysqli_query($conn, $sql);
  	$num_rows = mysqli_num_rows($result);

  	if($num_rows > 0){
  		$row = mysqli_fetch_assoc($result);
  		header("Location: vote.php");
  	} else {
  		echo '<p align="center"><font color="#FF0000">ERROR: Invalid email or Password!</font></p>';
  	}
  }
?>