<!-- Blog Comment Area -->
<div class="blog-comment-area">
    <?php 
        $comments_count = get_comments_number();
        if($comments_count > 0) {
            echo '<div class="blog-comment-title"><h3>Comments ('.$comments_count.')</h3></div>';
        } else {
            echo '<div class="blog-comment-title"><h3>No Comments Yet</h3></div>';
        }
        wp_list_comments(array(
            'style' => 'div',
            'short_ping' => true,
            'avatar_size' => 50,
            'callback' => null
        ), get_comments(array(
            'post_id' => get_the_ID(),
            'status' => 'approve'
        )));
    
    ?>
    <!-- <div class="blog-comment-title">
        <h3>Comments (3)</h3>
    </div> -->
    <div class="comment-reply-area">
        <!-- Single Comment 1 -->
        <div class="single-comment-list">
            <div class="comment-user-bg">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/img/Rasel-vhai.jpg" alt="">
            </div>
            <div class="comment-user-title">
                <h4>Rasel Ahmed <p>2 days ago</p></h4>
                <p>Great article I've have been looking for resoures to improve my web design skills and this was really useful.</p>
                <button class="comment-btn" type="submit">Reply</button>
            </div>
        </div>
        <!-- Single Comment 2 -->
        <div class="single-comment-list single-comment-reply">
            <div class="comment-user-bg">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/img/Nayemur-vhai.jpg" alt="">
            </div>
            <div class="comment-user-title">
                <h4>Nayemur Rahman <p>1 days ago</p></h4>
                <p>I agree with Rasel Ahmed. The Section about color theory was particularly insightful.</p>
                <button class="comment-btn" type="submit">Reply</button>
            </div>
        </div>
        <!-- Single Comment 3 -->
        <div class="single-comment-list">
            <div class="comment-user-bg">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/img/Rasel-vhai.jpg" alt="">
            </div>
            <div class="comment-user-title">
                <h4>Rasel Ahmed <p>5 hours ago</p></h4>
                <p>Do you have any recommendations for tools to use when starting out? I'm just begining my web design journey.</p>
                <button class="comment-btn" type="submit">Reply</button>
            </div>
        </div>
    </div>
</div>
<!-- Blog Comment form -->
<div class="blog-comment-form">
    <div class="blog-comment-title">
        <h3>Leave a Comment</h3>
    </div>
    <div class="py-10">
        <form class="flex flex-col gap-8" action="">
            <div class="from-control">
                <textarea rows="6" name="massage" placeholder="Write your comment here..." id="message" name="meassage"></textarea>
            </div>
            <div class="form-control flex gap-10">
                <input  name="name" id="name" placeholder="Name" type="text">
                <input name="email" id="email" placeholder="Email" type="email">
            </div>
            <div class="form-control">
                <button class="comment-post-btn">post comment</button>
            </div>
        </form>
    </div>
</div>