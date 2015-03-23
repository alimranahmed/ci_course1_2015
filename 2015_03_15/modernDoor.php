<?php
include "door.php";

class ModernDoor extends Door{

	//Method overriding
	public function setColor($color){
		$this->color = $color;
		echo $this->color;
	}
}

$md = new ModernDoor();
$md->setColor("RED");
