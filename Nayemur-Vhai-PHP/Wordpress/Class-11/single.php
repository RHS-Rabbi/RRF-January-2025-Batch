<?php get_header(); ?>

<div class="blog-information">
    <div class="container">
        <div class="single-blog-area">
            <?php 
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); 
            ?>
                <div class="flex flex-col gap-7.5">
                    <div class="blog-data flex flex-col gap-2">
                        <div class="blog-date gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                                <circle cx="3" cy="3" r="3" fill="#FFB900"/>
                            </svg>
                            <p><?php echo get_the_date('d F Y'); ?></p>
                        </div>

                        <h5 class="blog-info-title"><?php the_title(); ?></h5>
                    </div>

                    <div class="blog-user-info">
                        <div class="blogs-user">
                            <?php echo get_avatar(get_the_author_meta('ID'), 48); ?>
                        </div>
                        <h4><?php the_author(); ?></h4>
                    </div>
                    <div class="blogs-bg">
                        <?php the_post_thumbnail('large') ?>
                    </div>
                    <div class="blog-user-details">
                        <?php the_content(); ?>
                        <div class="blog-tag">
                            <h6>Tag:</h6>
                            <!-- <a href="#">web design</a>
                            <a href="#">career</a>
                            <a href="#">2022</a> -->
                            <?php the_tags('','',''); ?>
                        </div>
                        <div class="blog-share">
                            <h6>Share:</h6>
                            <a href="#"></a>
                            <a href="#"></a>
                            <a href="#"></a>
                            <a href="#"></a>
                        </div>
                        <div class="blog-author-info">
                            <div class="blog-author-bg">
                                <?php echo get_avatar(get_the_author_meta('ID')); ?>
                                <div class="flex flex-col gap-2.5">
                                    <h5>About <?php the_author(); ?></h5>
                                    <p>John is a professional web Design with over 10 years of experience.he has worked with major companies and now run his own design agency.</p>
                                    <div class="blog-author-icons">
                                        <a href="#"></a>
                                        <a href="#"></a>
                                        <a href="#"></a>
                                        <a href="#"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Comment Area -->
                    <div class="blog-comment-area">
                        <div class="blog-comment-title">
                            <h3>Comments (3)</h3>
                        </div>
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
                </div>
            <?php 
                endwhile; 
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
