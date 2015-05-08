<div id="page-wrapper">
    <div class="container-fluid">
    <?php if(isset($loginError)): ?>
        <div class="text-danger"><?php echo $loginError ?></div>
    <?php endif ?>
            
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-newspaper-o"></i>  Post
                    </li>
                    <li class="active">
                        <i class="fa fa-eye"></i> Manage Post
                    </li>
                </ol>
            </div>
        </div>
	<h2>Post List</h2>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
				<tr class="danger">
					<th>Heading</th>
					<th>Body</th>
					<th>Category</th>
					<th>Tags</th>
					<th>Updated_at</th>
					<th>Created_at</th>
					<th>Action</th>
				</tr>
				
				<?php foreach($posts as $post): ?>
				<tr class="info">
					<td><?php echo $post->heading; ?></td>
					<td><?php echo $post->body; ?></td>
					<td><?php echo $post->category; ?></td>
					<td><?php echo $post->tags; ?></td>
					<td><?php echo $post->updated_at; ?></td>
					<td><?php echo $post->created_at; ?></td>
							<td>
								<a href="<?php echo site_url('post/delete/'.$post->id); ?>" ><span class="glyphicon glyphicon-trash text-danger"/></a>
								<a href="#" data-toggle="modal" data-target="#model<?php echo $post->id?>"><span class="glyphicon glyphicon-pencil text-info"/></a>
							</td>

				</tr>
				<!-- Modal -->
				<div class="modal fade" id="model<?php echo $post->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Edit Post</h4>
				      </div>
				      <form method="post" action="<?php echo site_url('post/edit/'.$post->id)?>" enctype="multipart/form-data">
					      <div class="modal-body">
							  <div class="form-group">
							    <label for="name">Heading</label>
							    <input type="text" class="form-control" id="heading" name="heading" value="<?php echo $post->heading ?>">
							  </div>
							  <div class="form-group">
							    <label for="body">Body</label>
							    <input type="text" class="form-control" id="body" name="body" value="<?php echo $post->body ?>">
							  </div>
					      </div>
					      <div class="modal-footer">
					        <button type="submit" class="btn btn-primary">Save changes</button>
					      </div>
					</form>
			    </div>
			  </div>
			</div>
			<?php endforeach ?>

			</table>
		</div>
	</div>
</div>
</div>