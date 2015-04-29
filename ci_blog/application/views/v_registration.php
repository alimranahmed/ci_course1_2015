<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CI-Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('public/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('public/css/sb-admin.css'); ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('public/css/plugins/morris.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('public/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	<div class="container">
		<form method="post" action="<?php echo site_url('registration')?>" class="form" enctype="multipart/form-data">
			  <div class="form-group">
			    <input type="text" class="form-control" id="name" name="name" value="" placeholder="Enter your name">
			  </div>
			  <div class="form-group">
			    <input type="email" class="form-control" id="email" name="email" value="" placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <input type="text" class="form-control" id="username" name="username" value="" placeholder="Enter username">
			  </div>
			  <div class="form-group">
			    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter Password">
			  </div>
			  <div class="form-group">
			    <input type="password" class="form-control" id="exampleInputPassword1" name="passconf" placeholder="Confirmation Password">
			  </div>
			   

			  <div>
			    <button type="submit" class="btn btn-primary" name="submit">Registration</button>
			  </div>
			</form>
		</div>
	</div>
</body>


    <!-- jQuery -->
    <script src="<?php echo base_url('public/js/jquery.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('public/js/plugins/morris/raphael.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/plugins/morris/morris.min.js');?>"></script>
    <script src="<?php echo base_url('public/js/plugins/morris/morris-data.js');?>"></script>

</body>

</html>
