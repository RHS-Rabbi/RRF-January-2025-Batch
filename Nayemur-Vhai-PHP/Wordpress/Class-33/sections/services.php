<section class="service-area">
    <div class="container service-container">
        <div class="service-title">
            <h3>Our popular courses</h3>
            <p>Build new skills with new trendy courses and shine for the next future career.</p>
        </div>
        <div class="service-carusel">
            <?php
                $courses = array(
                    'post_type' => 'course',
                    'post_per_page' => '3',
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );

                $courses = new WP_Query($courses);
                if($courses->have_posts()) :
                while ($courses-> have_posts()) :  $courses->the_post();

                // Calling Custom Field Value --> Key
                $rating = get_post_meta(get_the_ID(),'rating',true);
                $price = get_post_meta(get_the_ID(),'price',true);

                $price = !empty($price) ? $price : '0.00';
                $rating = !empty($rating) ? $rating : '0.0';

            ?>
                <div class="single-service">
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
                                <span class="service-pricing">$<?php echo esc_html($price); ?></span>
                                <a class="service-btn" href="<?php the_permalink(); ?>">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                endwhile;
                wp_reset_postdata();
            endif;
                    
            ?>
        </div>
        <div class="w-full mt-10 text-center">
            <a class="service-btn" href="<?php echo get_post_type_archive_link('course'); ?>">View All Course</a>
        </div>
    </div>
</section>