<?php get_header();

// Set posts per page for this template only
query_posts(array_merge($wp_query->query, array('posts_per_page' => 6)));

?>


    <!-- Service Area -->
    <section class="service-area !py-27.5">
        <div class="container service-container">
            <div class="service-title">
                <h3>All Courses</h3>
                <p>Browse our complete collection of courses and find the perfect one for your career growth.</p>
            </div>
            <div class="service-carusels">
                <?php 
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $courses = array(
                        'post_type' => 'course',
                        'posts_per_page' => 6,
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                        'paged' => $paged,
                    );
                    $courses = new WP_Query($courses);

                    if($courses->have_posts()) :
                        while($courses->have_posts()) : $courses->the_post(); 
                        
                        // Calling Custom Field
                        $rating = get_post_meta(get_the_ID(),'rating',true);
                        $price = get_post_meta(get_the_ID(),'price',true);

                        $price = !empty($price) ? $price : '0.00';
                        $rating = !empty($rating) ? $rating : '0.0';
                        ?>
                            <div class="single-services">
                                <div class="single-service-item">
                                    <div class="service-bg">
                                        <?php if(has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('full',array('alt' => get_the_title() )); ?>
                                        <?php else: ?>    
                                            <h3>Course photo not Found</h3>
                                        <?php endif; ?>    
                                    </div>
                                    <div class="service-content">
                                        <a class="service-deatails" href="<?php the_permalink(); ?>">
                                            <h6><?php the_title(); ?></h6>
                                            <div class="service-rating">
                                                <span class="service-rating-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                                        <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#FEA31B"/>
                                                    </svg>
                                                </span>
                                               <?php echo esc_html($rating); ?>
                                            </div>
                                        </a>
                                        <p><?php echo wp_trim_words(get_the_excerpt(),12); ?></p>
                                        <div class="pricing-btn">
                                            <span class="service-pricing"><?php echo esc_html($price); ?></span>
                                            <a class="service-btn" href="<?php the_permalink(); ?>">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Pagination -->
    <section class="pagination-area">
        <div class="container">
            <div class="pagination-list">
                <?php 
                    echo paginate_links(array(
                        'total'     => $courses->max_num_pages,
                        'current'   => max(1, get_query_var('paged')),
                        'mid_size'  => 2,
                        'prev_text' => __('<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" /></svg>Prev', 'lessonlms'),
                       'next_text' => __('Next','lessonlms') . ' <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>',

                    ));
                    
                ?>
            </div>
        </div>
    </section>


<?php get_footer(); ?>