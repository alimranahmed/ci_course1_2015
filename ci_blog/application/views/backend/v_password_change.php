<div id="page-wrapper">
    <div class="container-fluid">
    	<form method="post" action="<?php echo site_url('profile/editPassword/')?>" enctype="multipart/form-data">
		      <div class="modal-body">
				  <div class="form-group">
				    <label for="name">Password</label>
				    <input type="password" class="form-control" id="password" name="password" value="">
				  </div>
				  <div class="form-group">
				    <label for="body">Retype Password</label>
				    <input type="password" class="form-control" id="password" name="passconf" value="">
				  </div>
		      </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary">Change Password</button>
		      </div>
		</form>
	</div>
</div>	

