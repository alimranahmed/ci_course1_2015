

    <!-- Main Content -->
    <div class="container">
    
    <?php if(isset($loginError)): ?>
        <div class="text-danger"><?php echo $loginError ?></div>
    <?php endif ?>
       
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php foreach($posts as $post): ?>
                <div class="post-preview">
                    
                
                        <h2 class="post-title" >
                        
                            <?php echo $post->heading; ?>
                          
                        </h2>
                        <p class="post-subtitle">
                            <?php echo $post->body; ?> 
                        </p>
                    
                    <p class="post-meta">Tags <?php echo $post->tags; ?>Posted on  <?php echo $post->created_at; ?></p>
               
                </div>
            
                <div>
                    <?php foreach ($comments as $comment):?>
                     <h5>Comments </h5>   
                    <tr class="info">
                    
                     <td><?php echo $comment->body; ?></td>
                     
                                                
                    </tr>
                    <?php endforeach ?>   


                </div>
                <hr>
                <div>

                    <?php if($this->session->userdata("user_id")): ?>
                        <h5 class="text-success"><?php echo $this->session->flashdata("successMsg"); ?></h5>
                         <div class="row">
                            <div class="col-lg-6">
                                <form method="post" action="<?php echo site_url('PostComment/add'.$post->id);?>">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="10" name="body" placeholder="Write you connent here..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Create" class="btn btn-info">
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php else: ?>
                        <a href="<?php echo site_url('Login'); ?>"> Login</a>
                        <a  href="<?php echo site_url('Registration') ?>" >Registration</a>
                    <?php endif ?>
                    
                </div>
                 <?php endforeach ?>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>

    