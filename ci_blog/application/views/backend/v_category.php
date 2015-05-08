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
                        <i class="fa fa-indent"></i>  Category
                    </li>
                </ol>
            </div>
        </div>
	<h2>Category List</h2>
		<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Add
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form method="post" action="<?php echo site_url('category/create')?>">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Category</h4>
	      </div>
	      <div class="modal-body">
		        <div class="form-group">
		            <input type="text" class="form-control" name="cat_name">
		        </div>     
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary" name="add">Add Category</button>
	      </div>
      </form>
    </div>
  </div>
</div>
	
	<div class="row">
		<div class="col-md-12">
		
		
		
			<table class="table table-hover">
			
				<tr class="danger">
					<th>Category List</th>
					<th>Action</th>
				</tr>
				
			<?php foreach($categories as $category): ?>
				<tr class="info">
					<td><?php echo $category->name; ?></td>
		
							<td>
								<a href="<?php echo site_url('category/delete/'.$category->id); ?>" ><span class="glyphicon glyphicon-trash text-danger"/></a>
								<a href="#" data-toggle="modal" data-target="#model<?php echo $category->id ?>"><span class="glyphicon glyphicon-pencil text-info"/></a>
							</td>

				</tr>
				<!-- Modal -->
				<div class="modal fade" id="model<?php echo $category->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Edit Categorie</h4>
				      </div>
				      <form method="post" action="<?php echo site_url('Category/edit/'.$category->id)?>" enctype="multipart/form-data">
					      <div class="modal-body">
							  <div class="form-group">
							    <label for="name">Category Name</label>
							    <input type="text" class="form-control" id="cat_name" name="cat_name" value="<?php echo $category->name ?>">
							  </div>
					      </div>
					      <div class="modal-footer">
					        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
					        
					      </div>
					 </form>
				    </div>
				  </div>
				</div>
				<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	  
	</div>
			<?php endforeach ?>
			</table>
		</div>
	</div>
</div>
</div>