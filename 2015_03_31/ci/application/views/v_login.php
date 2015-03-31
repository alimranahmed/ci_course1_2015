<div class="container">
	<?php if(isset($loginError)): ?>
		<div class="text-danger"><?php echo $loginError ?></div>
	<?php endif ?>
	<form method="post" action="<?php echo site_url('account/login')?>" class="form">
	  <div class="form-group">
	    <label for="username">Username</label>
	    <input type="text" class="form-control" id="username" name="username" value="" placeholder="Username">
	  </div>
	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
	  </div>
	  <div>
	    <button type="submit" class="btn btn-primary" name="submit">Insert</button>
	  </div>
	</form>
</div>