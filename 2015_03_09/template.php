<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Templetinng in php</title>
</head>
<body>
<?php $name = "Shaikot";?>

<?php if(isset($name)):?>
	<h1>Welcome <?php echo $name ?></h1>
<?php else: ?>
	<?php //header('location:http://www.facebook.com'); ?>
	<h1>Your are not logged in </h1>
<?php endif ?>

	<ul>
	<?php for($i = 0; $i < 5; $i++): ?>
			<li>List <?php echo $i ?></li>

			<?php if($i == 0): ?>

				<h2>This is first Heading</h2>

			<?php elseif($i == 2): ?>
				<h2>This is 3rd heading</h2>

			<?php else: ?>
				<h2>Heading <?php echo $i; ?></h2>

			<?php endif ?>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia veritatis cumque, neque, vero enim inventore accusamus alias explicabo ea voluptatem quod sit, quasi maxime asperiores. Dolorem voluptate eos nulla, recusandae.</p>
		<?php endfor ?>
	</ul>
</body>
</html>