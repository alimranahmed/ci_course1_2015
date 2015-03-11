<?php include "testDatabase.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List of User</title>
</head>
<body>
	<form method="POST">
		Name: <input type="text" name="name">
		Password <input type="password" name="password"> 
		<input type="submit" value="Insert" name="submit">
	</form>
	<ol>
		<?php if($users->num_rows > 0): ?>
			<?php while($user = $users->fetch_assoc()): ?>
				<li>
					<strong>Name: </strong><?php echo $user['name'] ?>
					<strong>Password: </strong><?php echo $user['password'];?>
				</li>
			<?php endwhile ?>
		<?php else: ?>
			<h3>No result found </h3>
		<?php endif ?>
	</ol>
</body>
</html>