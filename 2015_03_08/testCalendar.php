<?php
include "calendar.php";

$calendar = new Calendar("Tomorrow");
echo "Tomorrow: ".$calendar->getDate()."<br>";
$calendar->setDay("yesterday");
echo "Yesterday: ".$calendar->getDate()."<br>";
$calendar->setDay("today");
echo "Today is : ".$calendar->getDate()."<br>";
