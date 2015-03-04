<?php include "calculator.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
</head>
<body>
	<form method="post">
		<input type="number" name="number1">
		<input type="text" name="operator">
		<input type="number" name="number2">
		<input type="submit" name="calculator" value="Calculate">
	</form>
	<?php 
	$calculator1 = new Calculator();

		if(isset($_POST['calculator']))
		{
			$number1 = $_POST['number1'];
			$number2 = $_POST['number2'];
			$operator = $_POST["operator"];

			if($operator== "+"){
				$calculator1->add($number1, $number2);
				echo $calculator1->getResult();
			}
			elseif($operator== "-"){
				$calculator1->sub($number1, $number2);
				echo $calculator1->getResult();
			}
			elseif($operator== "/"){
				$calculator1->div($number1, $number2);
				echo $calculator1->getResult();
			}
			elseif($operator== "*"){
				$calculator1->mul($number1, $number2);
				echo $calculator1->getResult();
			}
			else{
				echo "Invalid operator";
			}
		}
	?>
</body>
</html>