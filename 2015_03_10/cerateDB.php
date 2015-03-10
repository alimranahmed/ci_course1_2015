<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	// Create database
	$sql = "CREATE DATABASE ci_course";

	if(!$conn->query($sql)){
		echo "There was error while creating database<br>";
		echo "error : ".$conn->error;
	}
	$conn->close();
?>