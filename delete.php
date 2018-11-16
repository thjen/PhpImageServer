<?php
	require "connect.php";
	
	$id = $_GET['id'];
	$image = $_GET['image'];

	if (strlen($id) > 0 && strlen($image) > 0) {
		$query = "DELETE FROM student WHERE id = '$id'";
		$data = mysqli_query($con, $query);	
		if ($data) {
			unlink("images".$image) // remove file image
			echo "Success";	
		} else {
			echo "Fail";	
		}
	}
?>
