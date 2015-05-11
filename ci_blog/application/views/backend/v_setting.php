<div id="page-wrapper">
    <div class="container-fluid">
    	<?php if($this->session->userdata("user_id")): ?>
        <?php foreach($users as $user): ?>
    	<form method="post" action="<?php echo site_url('profile/edit/')?>" enctype="multipart/form-data">
		      <div class="modal-body">
				  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" id="name" name="name" value="<?php echo $user->name ?>">
				  </div>
				  <div class="form-group">
				    <label for="body">Email</label>
				    <input type="text" class="form-control" id="email" name="email" value="<?php echo $user->email ?>">
				  </div>
				  <div class="form-group">
				    <label for="body">User Name</label>
				    <input type="text" class="form-control" id="username" name="username" value="<?php echo $user->username ?>">
				  </div>
		      </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary">Save changes</button>
		      </div>
		</form>
		<?php endforeach ?>
        <?php endif ?>
	</div>
</div>	

