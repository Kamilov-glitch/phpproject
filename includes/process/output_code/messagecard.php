<div class="card read-card">
    <div class="card-body">

        <h4 class="card-title"><?php echo $title ?></h4>
        <hr>
        
        //add code here to add new tag after last viewed post
        <?php

        if ($is_member && $last_post < $msgid) 
        {
            echo "span class = 'new-post'>NEW</span>";
            $update = true;
        }

        ?>        
        
        <span class="post-time">Posted by <?php echo $username ?> on 
                        <?php echo date('d-M-Y g:i a', $postdate) ?> (Eastern Time)</span>
        <p class="card-text"><?php echo $post ?></p>            

    </div>
</div> 