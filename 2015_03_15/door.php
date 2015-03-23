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

