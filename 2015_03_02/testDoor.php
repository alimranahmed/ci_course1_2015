<?php
include "door.php";

$door1 = new Door();
$door2 = new Door();

$door1->height = 15;
$door1->setColor("black");
//$door1->color = "black";
$door2->open();

	echo "The height of door1 is: ".$door1->height;
	echo "<br>The color of door1 is: ".$door1->getColor();