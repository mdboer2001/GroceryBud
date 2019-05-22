<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$question = $_POST['question'];
	$date =date("Y-m-d H:i:s");

		$conn = mysqli_connect("localhost", "root", "", "otto") or die("We couldn't connect");
		$success = mysqli_query($conn, "INSERT INTO faq(name, email, question, date) VALUES('$name' , '$email', '$question', '$date')")
?>
