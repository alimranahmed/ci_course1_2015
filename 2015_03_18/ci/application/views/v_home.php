<div class="container">
	<h2>User List</h2>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Username</th>
					<th>Action</th>
				</tr>
			<?php foreach($users as $user): ?>
				<tr>
					<td><?php echo $user['name']; ?></td>
					<td><?php echo $user['email']; ?></td>
					<td><?php echo $user['username']; ?></td>
					<td>
						<a href="<?php echo base_url('home/delete/'.$user['id']); ?>" ><span class="glyphicon glyphicon-trash text-danger"/></a>
						<a href="<?php echo base_url('home/edit/'.$user['id']); ?>"><span class="glyphicon glyphicon-pencil text-info"/></a>
					</td>
				</tr>
			<?php endforeach ?>
			</table>
		</div>
	</div>
</div>
