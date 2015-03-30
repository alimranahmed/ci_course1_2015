<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title ;?></title>
	<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css'); ?> ">
	<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap-theme.min.css'); ?> ">
</head>
<body>
<div class="container">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Brand</a>
	    </div>
	    
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="<?php echo base_url()?>">Home</a></li>
	        <li><a href="<?php echo site_url('home/about'); ?>">About</a></li>
	        <?php if($this->session->userdata("user_id")): ?>
		        <li><a class="pull-right"><?php echo $this->session->userdata("name");?></a></li>
		        <li><a href="<?php echo site_url('account/logout'); ?>" class="pull-right">Logout</a></li>
	      	<?php else: ?>
	      		<li><a href="<?php echo site_url('account/login'); ?>">Login</a></li>
	      	<?php endif ?>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>