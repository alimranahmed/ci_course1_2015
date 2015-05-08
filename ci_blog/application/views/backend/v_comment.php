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
					
					<th>Body</th>
					<th>post</th>
					<th>owner</th>
					<th>Updated_at</th>
					<th>Created_at</th>
					<th>Action</th>
				</tr>
				
				<?php foreach($comments as $comment): ?>
				<tr class="info">
					<td><?php echo $comment->body; ?></td>
					<td><?php echo $comment->post; ?></td>
					<td><?php echo $comment->owner; ?></td>
					<td><?php echo $comment->updated_at; ?></td>
					<td><?php echo $comment->created_at; ?></td>
							<td>
								<a href="<?php echo site_url('comment/delete/'.$comment->id); ?>" ><span class="glyphicon glyphicon-trash text-danger"/></a>
								<a href="#" data-toggle="modal" data-target="#model<?php echo $comment->id?>"><span class="glyphicon glyphicon-pencil text-info"/></a>
							</td>

				</tr>
				<!-- Modal -->
				<div class="modal fade" id="model<?php echo $comment->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Edit Post</h4>
				      </div>
				      <form method="post" action="<?php echo site_url('comment/edit/'.$comment->id)?>" enctype="multipart/form-data">
					      <div class="modal-body">
							  
							  <div class="form-group">
							    <label for="body">Body</label>
							    <input type="text" class="form-control" id="body" name="body" value="<?php echo $comment->body ?>">
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