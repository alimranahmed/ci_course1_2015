<?php include "AgeCalculator.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Input Age</title>
</head>
<body>
	<form>
		<input type="date" name="birthday">
		<input type="submit" name="submit">
	</form>
	<?php
		var_dump($_GET);
		if(isset($_GET['submit'])){
			$birthday = $_GET['birthday'];
			$ageCalculator = new AgeCalculator();
			$ageCalculator->setBirthday($birthday);
			echo $ageCalculator->calculateAge();
		}
	?>
</body>
</html>