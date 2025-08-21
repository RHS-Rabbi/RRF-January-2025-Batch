<?php get_header(); ?>

<section class="blog-area search-results">
    <div class="container">
        <!-- Search Title -->
        <div class="blog-comment-title">
            <h3><?php echo esc_html(sprintf(__('Search Results for %s','lessonlms'), get_search_query())); ?></h3>
        </div>
        <?php if(have_posts()) : ?>
            <div class="blog-list py-10">
                <?php while(have_posts()) : the_post() ?>
                    <article class="blog-item">
                        <div class="blog-title !w-[80%] !text-2xl">
                            <h3 class="!text-3xl" >
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </div>
                        <div class="blog-excerpt text-center">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <div class="no-results py-10 flex flex-col gap-4">
                <h3><?php _e('No results found','lessonlms'); ?></h3>
                <p><?php _e('Try searching for something else.','lessonlms'); ?></p>
                <p><a class="serch-btn" href="<?php echo esc_url(home_url('/')); ?>">Return home</a></p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>