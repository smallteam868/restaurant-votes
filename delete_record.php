<?php 
 		require_once('db.php');

 		$sql = "DELETE FROM users WHERE id=6";

 		if (mysqli_query($conn, $sql)){
 			echo "Record deleted successfully";
 		} else {
 			echo "Error deleting record: " . mysqli_error($conn);
 		}

?>