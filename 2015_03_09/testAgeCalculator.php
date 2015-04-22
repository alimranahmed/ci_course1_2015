<?php
include "AgeCalculator.php";
$ageCalculator = new AgeCalculator("8/11/1991");
echo $ageCalculator->calculateAge();