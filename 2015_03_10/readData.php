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

$sql = "SELECT * FROM `user`";

$results = $connect->query($sql);

if($results->num_rows > 0){
	while($row = $results->fetch_assoc()){
		echo "Name ".$row['name']." email: ".$row["email"]." password: ".$row["password"].
		"<a href='deleteData.php?id=".$row['id']."'> Delete</a><br>";
	}
}
else{
	echo "No result found";
}
