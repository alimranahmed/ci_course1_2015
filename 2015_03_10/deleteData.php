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

$sql = "DELETE FROM `user` WHERE name = 'Shoikot' ";


if($connect->query($sql)){
	echo "Deleted Successfullly!";
}
else{
	echo "No data deleted!".$connect->error;
}