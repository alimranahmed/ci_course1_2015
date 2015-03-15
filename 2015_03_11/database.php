<?php
class Database{
	private $hostName;
	private $username;
	private $password;
	private $dbName;
	public $connection;

	public function __construct($hostName = "localhost", $username = "root", $password = ""){
		$this->hostName = $hostName;
		$this->username = $username;
		$this->password = $password;

		$this->connect();

		//$this->createDb($this->dbName);
	}

	//Connection with the server without database;
	public function connect(){

		$conn = new mysqli($this->hostName, $this->username, $this->password);

		if($conn->connect_error){
			die("<div style='color:red;'>Error while connecting...<br>".$conn->connect_error."</div>");
		}
		$this->connection = $conn;
	}

	//Create database and select that database
	public function createDb($dbName){
		$this->dbName = $dbName;

		$this->runQuery("CREATE DATABASE ".$dbName);

		$this->runQuery("USE ".$dbName);
	}

	//Delete row
	public function delete($tableName, $id){
		$sql = "DELETE FROM ".$tableName." WHERE id = ".$id;
		if($this->runQuery($sql)){
			if($this->connection->affected_rows > 0){
				return true;
			}
		}

	}

	//Run a query
	public function runQuery($sql){
		$run = $this->connection->query($sql);
		if(!$run){
			echo "<div style='color:red;'>Query Error :( <br>".$this->connection->error."</div>";
		}else{
			return $run;
		}
	}

	//select database
	public function useDb($dbName){
		$this->dbName = $dbName;
		$sql = "USE ".$dbName;
		$this->runQuery($sql);
	}

	//Read from a table
	public function readTable($tableName){
		$sql = "SELECT * FROM ".$tableName;
		$result = $this->runQuery($sql);
		return $result;
	}
}