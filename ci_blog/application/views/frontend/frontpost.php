

    <!-- Main Content -->
    <div class="container">
    
    <?php if(isset($loginError)): ?>
        <div class="text-danger"><?php echo $loginError ?></div>
    <?php endif ?>
       
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            
                <div class="post-preview">
                    
                <?php foreach($posts as $post): ?>
                        <h2 class="post-title" >
                        
                            <?php echo $post->heading; ?>
                          
                        </h2>
                        <p class="post-subtitle">
                            <?php echo $post->body; ?> 
                        </p>
                    
                    <p class="post-meta">Tags <?php echo $post->tags; ?>Posted on  <?php echo $post->created_at; ?></p>
                <?php endforeach ?>
                </div>
            
                <div>
                    <?php foreach ($comments as $comment):?>
                     <h5>your comment here </h5>   
                    <tr class="info">
                    
                     <td><?php echo $comment->body; ?></td>
                     
                                                
                    </tr>
                    <?php endforeach ?>   


                </div>
                <div>
                    <form method='post'>
                          
                          Comment:<br>
                          <textarea name='comment' id='comment'></textarea><br />


                          <input type='hidden' name='articleid' id='articleid' value='<? echo $_GET["id"]; ?>' />

                          <input type='submit' value='Submit' />  
                    </form>
                </div>
                
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>

    