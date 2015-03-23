<?php
class Door{
	public $height = 10;
	public $width = 4;
	private $color = "blue";
	public $status = "close";

	public function open(){
		$this->status = "open";
	}

	public function close($status){
		$this->status = "close";
	}

	public function setColor($color){
		$this->color = $color;
	}

	public function getColor()
	{
		return $this->color;
	}
}

//Use this class/Create Object
// $door1 = new Door();
// $door2 = new Door();

// $door1->height = 15;
// $door1->setColor("black");
// //$door1->color = "black";
// $door2->open();

// 	echo "The height of door1 is: ".$door1->height;
// 	echo "The color of door1 is: ".$door1->getColor();

// var_dump($door);
// var_dump($door1);

