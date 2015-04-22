<?php
if(isset($_REQUEST['form']))
{
	var_dump($_REQUEST);
	echo "Your Name is: ".$_REQUEST["full_name"]."<br>";
	echo "Your Email is: ".$_REQUEST["email"]."<br>";
	echo "Your Password is: ".$_REQUEST["password"]."<br>";
}
else
{
	echo "Your are evil! Unauthenticated access";
}