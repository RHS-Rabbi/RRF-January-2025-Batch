<?php get_header(); ?>

<div class="blog-information">
    <div class="container">
        <div class="single-blog-area">
            <div class="flex flex-col">
                <div class="blog-date gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                        <circle cx="3" cy="3" r="3" fill="#FFB900"/>
                    </svg>
                    <p><?php echo get_the_date('d F Y'); ?></p>
                </div>
                <h5 class="blog-info-title" ><?php the_title(); ?></h5>
                <div class="blogs-user">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>