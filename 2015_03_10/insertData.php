<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "ci_course";

$connect = new mysqli($serverName, $username, $password, $dbName);
//var_dump($connect);

// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO user (name, email, password) VALUES ('Imran', 'imran@gmail.com', 'secret')";

if($connect->query($sql) === FALSE){
	echo "Error when creating table<br> Error: ".$connect->error;
}else{
	echo "User Created successfully!";
}