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

$sql = "CREATE TABLE user(
									id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
									name VARCHAR(255) NOT NULL, 
									email VARCHAR(50),
									password VARCHAR(64) 
								)" ;

if($connect->query($sql) === FALSE){
	echo "Error when creating table<br> Error: ".$connect->error;
}else{
	echo "Table created successfully";
}