

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            
                <div class="post-preview">
                <?php foreach($posts as $post): ?>
                    <a href="">
                        <h2 class="post-title">
                            <?php echo $post->heading; ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo $post->body; ?>
                        </h3>
                    </a>
                    <p class="post-meta">Tags <?php echo $post->tags; ?>Posted on  <?php echo $post->created_at; ?></p>
                <?php endforeach ?>
                </div>
                <hr>
                
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>

    <hr>