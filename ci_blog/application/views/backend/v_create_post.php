<div id="page-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h5 class="text-success"><?php echo $this->session->flashdata("successMsg"); ?></h5>
                <h1 class="page-header">
                    Create Post
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Post</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Create
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <form method="post" action="<?php echo site_url('post/create')?>">
                    <div class="form-group">
                        <input type="text" class="form-control" name="heading" placeholder="Post Title">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="10" name="body" placeholder="Write you post here..."></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="tags" placeholder="Tags, e.g. PHP,OOP,Codeigniter">
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="">---Selct Category---</option>
                            <option>PHP</option>
                            <option>OOP</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="save" value="Create" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->