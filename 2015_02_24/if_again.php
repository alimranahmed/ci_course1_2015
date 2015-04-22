<?php

	//Check if the number is even and divisible by 4

	$number1 = 13;

	echo "The number is ".$number1."<br>";

	if($number1 % 2 == 0)
	{
		if($number1 % 4 == 0){
			echo "The number is divisible by 4 and its even"."<br>";
		}
		else{
			echo "Number is even but not divisible by 4"."<br>";
		}
	}
	else{
		echo "The number is not divisible by 4 and its not even";
	}

