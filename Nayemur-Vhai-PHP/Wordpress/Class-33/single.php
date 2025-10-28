<?php get_header(); ?>

<div class="blog-information">
    <div class="container flex flex-col md:flex-row gap-8 pb-20">
        <div class="md:w-8/12">
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
                            <?php if(has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large') ?>
                            <?php endif; ?>
                        </div>
                        <div class="blog-user-details">
                            <?php the_content(); ?>
                            <div class="blog-tag">
                                <h6>Tag:</h6>
                                <?php the_tags('','',''); ?>
                            </div>
                            <div class="blog-share">
                                <h6>Share:</h6>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://twitter.com/intent/tweet?url=&text=<?php the_permalink(); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.instagram.com/&text=<?php the_permalink(); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://pinterest.com/pin/create/button/?url<?php the_permalink(); ?>"><i class="fa-brands fa-linkedin-in" target="_blank"></i></a>
                            </div>
                            <div class="blog-author-info">
                                <div class="blog-author-bg">
                                    <?php echo get_avatar(get_the_author_meta('ID')); ?>
                                    <div class="flex flex-col gap-2.5">
                                        <h5>About <?php the_author(); ?></h5>
                                        <p><?php echo get_the_author_meta('description'); ?></p>
                                        <div class="blog-author-icons">
                                            <?php if(get_the_author_meta('user_url')) : ?>
                                                <a href="<?php echo get_the_author_meta('user_url'); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                                            <?php endif ?>
                                            <?php if(get_the_author_meta('user_url')) : ?>
                                                <a href="<?php echo get_the_author_meta('user_url'); ?>"><i class="fa-brands fa-twitter"></i></a>
                                            <?php endif; ?>
                                            <?php if(get_the_author_meta('user_url')) : ?>
                                                <a href="<?php echo get_the_author_meta('user_url'); ?>"><i class="fa-brands fa-instagram"></i></a>
                                            <?php endif; ?>
                                            <?php if(get_the_author_meta('user_url')) : ?>
                                                <a href="<?php echo get_the_author_meta('user_url'); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php get_template_part('comments'); ?>
                    </div>
                <?php 
                    endwhile; 
                endif;
                ?>
            </div>
        </div>
        <div class="md:w-4/12">
            <div class="blog-sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
