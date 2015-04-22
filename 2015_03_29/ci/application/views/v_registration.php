<div class="container">
	<?php if(isset($errors)): ?>
		<div class="text-danger"><?php echo $errors ?></div>
	<?php endif ?>
	<form method="post" action="<?php echo site_url('user/registration')?>" class="form">
	  <div class="form-group">
	    <label for="name">Name</label>
	    <input type="text" class="form-control" id="name" name="name" value="" placeholder="Enter name">
	  </div>
	  <div class="form-group">
	    <label for="email">Email address</label>
	    <input type="email" class="form-control" id="email" name="email" value="" placeholder="Enter email">
	  </div>
	  <div class="form-group">
	    <label for="username">Username</label>
	    <input type="text" class="form-control" id="username" name="username" value="" placeholder="Username">
	  </div>
	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="text" class="form-control" id="password" name="password" value="" placeholder="Password">
	  </div>
	  <div class="form-group">
	  <label for="department">Department</label>
	  <select class="form-control" id="department" name="department">
	    <?php foreach($departments as $department): ?>
			<option selected="selected" value="<?php echo $department->id ?>"><?php echo $department->name?></option>
			<?php endforeach ?>
	    </select>
	  </div>
	  <div>
	    <button type="submit" class="btn btn-primary" name="submit">Insert</button>
	  </div>
	</form>
</div>