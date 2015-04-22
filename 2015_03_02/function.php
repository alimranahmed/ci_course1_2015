<?php

function printSomething($text, $number = 1){
	for($i = 1; $i <= $number; $i++){
		echo $text;
	}
}

function add($number1, $number2){
	$sum = $number1 + $number2;
	return $sum;
}



printSomething("Ok");

echo "<br>The sum is: ".add(10, 20);

echo "<br>After the function call";