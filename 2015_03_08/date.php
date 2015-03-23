<?php
date_default_timezone_set("Asia/Dhaka");
$today = "January 10, 2015";
// $time = strtotime($today);
// echo $today."<br>";
// echo $time."<br>";
//==================String to time===============
echo date("d/m/Y", strtotime($today))."<br>";




//==================Date & formatting================
echo date("d m, Y h:i:sA d", time())."<br>";
echo time()."<br>";

//================Problem analysis of Calendar class===============
echo "================Calendar class problem===============<br>";
$currentDay = date("d");
$currentMonth = date("m");
$currentYear = date("Y");
echo "Day : ".$currentDay;
echo " Month : ".$currentMonth;
echo " Year : ".$currentYear;
$currentDay += 1;
$currentMonth += 1;
$currentDate = $currentMonth."/".$currentDay."/".$currentYear;
echo "<br>".$currentDate."<br>";
echo date("d M, Y", strtotime($currentDate));