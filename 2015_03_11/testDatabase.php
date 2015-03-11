<?php
include "database.php";

$db = new Database("localhost", "root", "");

$db->useDb("my_db");

$users = $db->runQuery("SELECT * FROM user");


//Insert into database;
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$password = $_POST['password'];
	$sql = "INSERT INTO user ( name, password) VALUES ( '$name', '$password' )";
	$db->runQuery($sql);
	header("Location:viewUser.php");
}

