<!-- Blog Comment Area -->
<div class="blog-comment-area">
    <?php 
        $comments_count = get_comments_number();
        if($comments_count > 0) {
            echo '<div class="blog-comment-title"><h3>Comments ('.$comments_count.')</h3></div>';
        } else {
            echo '<div class="blog-comment-title"><h3>No Comments Yet</h3></div>';
        }

        $parent_comments = get_comments(array(
            'post_id' => get_the_ID(),
            'status' => 'approve',
            'order' => 'ASC',
            'parent' => 0
        ));
    ?>
    <div class="comment-reply-area">
        <?php if($parent_comments) : ?>
            <?php foreach($parent_comments as $comment) : ?>
                <!-- Single Parent Comment -->
                <div class="single-comment-list" id="comment-<?php echo $comment->comment_ID; ?>">
                    <div class="comment-user-bg">
                        <?php echo get_avatar($comment,50); ?>
                    </div>
                    <div class="comment-user-title">
                        <h4>
                            <?php echo esc_html($comment->comment_author); ?> 
                           
                            <p><?php echo human_time_diff(strtotime($comment->comment_date), current_time('timestamp')); ?> ago</p>
                        </h4>
                        
                        <p><?php echo esc_html($comment->comment_content); ?></p>

                        <?php 
                            comment_reply_link(array(
                                'depth'     => 1,
                                'max_depth' => 3,
                                'reply_text'=> 'Reply',
                                'respond_id'=> 'comment-form',
                            ), $comment->comment_ID);
                        ?>
                    </div>
                </div>

                <?php 
                $replies = get_comments(array(
                    'post_id' => get_the_ID(),
                    'status' => 'approve',
                    'order' => 'ASC',
                    'parent' => $comment->comment_ID
                ));
                ?>

                <?php if($replies) : ?>
                    <?php foreach ($replies as $reply) : ?>
                        <!-- Single Reply Comment -->
                        <div class="single-comment-list single-comment-reply" id="comment-<?php echo $reply->comment_ID; ?>">
                            <div class="comment-user-bg">
                                <?php echo get_avatar($reply,50); ?>
                            </div>
                            <div class="comment-user-title">
                                <h4>
                                    <?php echo esc_html($reply->comment_author); ?> 
                                    
                                    <p><?php echo human_time_diff(strtotime($reply->comment_date), current_time('timestamp')); ?> ago</p>
                                </h4>
                                
                                <p><?php echo esc_html($reply->comment_content); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<!-- Blog Comment form -->
<div class="blog-comment-form">
    <div class="blog-comment-title">
        <h3>Leave a Comment</h3>
    </div>
    <div class="py-10">
        <?php 
            comment_form(array(
                'fields' => array(
                    
                    'author' => '<div class="form-control"><input name="author" id="author" placeholder="Name" type="text"></div>',
                    
                    'email'  => '<div class="form-control"><input name="email" id="email" placeholder="Email" type="email"></div>',
                ),
        
                'comment_field' =>'<div class="form-control"><textarea rows="6" placeholder="Write your comment here..." id="comment" name="comment"></textarea></div>',
                
                'class_submit' => 'comment-post-btn',
                'label_submit' => 'Post comment',
            ));
        ?>
    </div>
</div>
