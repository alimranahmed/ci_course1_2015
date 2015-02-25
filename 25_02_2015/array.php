<?php

	$choises = array("Rice", "Fish", "Dal");

	var_dump($choises);

	//Accessing array value using index
	echo "================Printing array uisng index================<br>";
	echo $choises[0]." ";
	echo $choises[1]." ";
	echo $choises[2]." ";

	echo "<br>";


	//Travars through the array using for loop

	echo "===========Printing array using for loop=============<br>";

	$length = count($choises);

	for($i = 0; $i < $length; $i++)
	{
		echo $choises[$i]."<br>";
	}

	$numbers = [1, 2, 3, 4, 5, 6];
	//Traners through the array using foreach loop
	echo "===================Printing array using foreach loop=================<br>";
	foreach($numbers as $number)
	{
		echo $number." ";
	}

	//Assosiative array
	echo "<br>==============Assosiative array=================";
	$dbConnection = array(
				"username"=>array("root", "user", "admin"), 
				"password"=>"dahaht;ad", 
				"database_name"=>"course"
			);

	var_dump($dbConnection);

	foreach($dbConnection as $key => $value)
	{
		if($key == "username")
		{
			foreach($value as $name)
			{
				echo $name." ";
			}
			echo "<br>";
		}
		else
		{
			echo $value."<br>";
		}
	}