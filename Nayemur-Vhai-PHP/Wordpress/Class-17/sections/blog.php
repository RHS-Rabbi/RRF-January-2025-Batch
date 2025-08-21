<section class="blog-area">
    <div class="container blog-container">
        <div class="blog-title">
            <h3><?php echo esc_html(get_theme_mod('blog_section_title')); ?></h3>
            <p><?php echo esc_html(get_theme_mod('blog_section_description')); ?></p>
        </div>
        <div class="blog-carousel blog-padding">
            <?php 
                $posts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => -1, 
                    'orderby'      => 'rand',

                ));
                if($posts->have_posts()) :
                    while($posts->have_posts()) : $posts->the_post();
            ?>
            <div class="single-blog">
                <div class="single-blog-list-item">
                    <a href="<?php the_permalink(); ?>">
                        <img class="blog-bg" src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'medium' ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">

                    </a>
                    <div class="blog-content">
                        <div class="blog-date">
                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                                <circle cx="3" cy="3" r="3" fill="#FFB900"/>
                            </svg>
                            <p><?php echo get_the_date('d F Y'); ?></p>
                        </div>
                        <div class="blog-divider"></div>
                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <a href="<?php the_permalink(); ?>" class="blog-btn"><?php _e('Read More', 'lessonlms') ?></a>
                    </div>
                </div>
            </div>
            <?php 
                    endwhile; 
                    wp_reset_postdata();
                else:
                    echo '<p>' .__('No Blog Post Found','lessonlms') . '</p>';
                endif;    
            ?>
        </div>
    </div>
</section>