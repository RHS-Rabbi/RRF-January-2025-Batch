<?php get_header(); ?>

<section class="blog-area">
    <div class="container">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="blog-title">
                <h3><?php the_title(); ?></h3>
            </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>