<?php
//==========Constructor===========
//1. Automatically called when new instance is created
//2. Name of the constructor is same as class name
//3. When a class has no constructor defined then the default constructor is called 

class Door{
	public $width = 50;
	public $height = 70;
	public $color = "black";
	//Not depends of object but depends on class
	public static $count;

	public function __construct($height, $width = 10){
		$this->height = $height;
		$this->width = $width;
		self::$count++;
	}
}

$door1 = new Door(20);
//$door2 = new Door(30);

var_dump($door1);

echo "<br>Number of door: ".Door::$count;
