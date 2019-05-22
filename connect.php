<?php
	$budget = $_POST['budget'];


		$conn = mysqli_connect("localhost", "root", "", "grocerybud") or die("We couldn't connect");
		$success = mysqli_query($conn, "INSERT INTO users ('budget') VALUES('$budget')");
?>
