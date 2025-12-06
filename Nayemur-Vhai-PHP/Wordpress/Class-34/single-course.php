<?php get_header(); ?>
    <?php if(have_posts()) : 
        while (have_posts()) : the_post();

        $price = get_post_meta(get_the_ID(),'price',true) ?: '0.00';
        $orginal_price = get_post_meta(get_the_ID(), 'orginal_price', true);

        $discount ='';
        if( !empty($orginal_price) && $orginal_price > $price ) {
            $discount = round((($orginal_price - $price) / $orginal_price) * 100) . '% OFF';
        }
        $video_hours = get_post_meta(get_the_ID(),'video_hours',true) ?: '0 hours';
        $artical_counts = get_post_meta(get_the_ID(),'artical_counts',true) ?: '0';
        $downloadable_resource = get_post_meta(get_the_ID(),'downloadable_resource',true) ?: '0';
        $membership_duration = get_post_meta(get_the_ID(),'membership_duration',true) ?: 'Full lifetime access';
        $supported_devices = get_post_meta(get_the_ID(),'supported_devices',true) ?: 'Access on mobile and tv';
        $completion_certificate = get_post_meta(get_the_ID(),'completion_certificate',true) ?: 'Certificate of completetion';

        $enrolled_students = get_post_meta(get_the_ID(),'_enrolled_students',true) ? : 0;
        $current_user_id = get_current_user_id();
    ?>

    <div class="services-area">
        <div class="container">
            <div class="flex flex-col gap-5">
                <div class="breadcump">
                    <ul class="flex items-center">
                        <li><a href="<?php echo get_post_type_archive_link('course') ?>">Courses</a></li>
                        >
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
                <div class="service-title">
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="flex flex-col md:flex-row md:gap-10 gap-2.5">
                    <div class="service-rating">
                        <?php 
                            $stats = lessonlms_get_review_stats(get_the_ID()); 
                            $avg_rating = $stats['average_rating'];
                            $total_reviews = $stats['total_reviews'];
                        ?>

                        <span class="service-rating-icon flex gap-2.5">
                            <?php for( $i = 1; $i <= 5; $i++ ) : ?>

                                <?php if( $i <= floor($avg_rating) ) : ?>
                                    <!-- Full star -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                        <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#FEA31B"></path>
                                    </svg>

                                <?php elseif( $i - 0.5 <= $avg_rating ) : ?>
                                    <!-- Half star -->
                                    <svg fill="none" width="18" height="17" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22,10.1c0.1-0.5-0.3-1.1-0.8-1.1l-5.7-0.8L12.9,3c-0.1-0.2-0.2-0.3-0.4-0.4C12,2.3,11.4,2.5,11.1,3L8.6,8.2L2.9,9C2.6,9,2.4,9.1,2.3,9.3c-0.4,0.4-0.4,1,0,1.4l4.1,4l-1,5.7c0,0.2,0,0.4,0.1,0.6c0.3,0.5,0.9,0.7,1.4,0.4l5.1-2.7l5.1,2.7c0.1,0.1,0.3,0.1,0.5,0.1v0c0.1,0,0.1,0,0.2,0c0.5-0.1,0.9-0.6,0.8-1.2l-1-5.7l4.1-4C21.9,10.5,22,10.3,22,10.1z M15.8,13.6c-0.2,0.2-0.3,0.6-0.3,0.9l0.7,4.2l-3.8-2c-0.1-0.1-0.3-0.1-0.5-0.1V5.7l1.9,3.8c0.1,0.3,0.4,0.5,0.8,0.5l4.2,0.6L15.8,13.6z"/>
                                    </svg>

                                <?php else : ?>
                                    <!-- Empty star -->
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" 
                                        width="18" height="17" viewBox="0 0 64 64" xml:space="preserve">
                                        <polygon fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="32,47 12,62 20,38 2,24 24,24 32,1 40,24 62,24 44,38 52,62"/>
                                    </svg>
                                <?php endif; ?>

                            <?php endfor; ?>
                        </span>

                        <span class="service-rating-text">
                            <?php echo esc_html($avg_rating); ?> (<?php echo esc_html($total_reviews); ?> reviews)
                        </span>
                    </div>

                    <div class="services-team">
                        <div>
                            <svg class="size-6" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                viewBox="0 0 512 512"  xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:#00041F;}
                            </style>
                            <g>
                                <path class="st0" d="M435.95,287.525c32.51,0,58.87-26.343,58.87-58.853c0-32.51-26.361-58.871-58.87-58.871
                                    c-32.502,0-58.863,26.361-58.863,58.871C377.088,261.182,403.448,287.525,435.95,287.525z"/>
                                <path class="st0" d="M511.327,344.251c-2.623-15.762-15.652-37.822-25.514-47.677c-1.299-1.306-7.105-1.608-8.673-0.636
                                    c-11.99,7.374-26.074,11.714-41.19,11.714c-15.099,0-29.184-4.34-41.175-11.714c-1.575-0.972-7.373-0.67-8.672,0.636
                                    c-2.757,2.757-5.765,6.427-8.698,10.683c7.935,14.94,14.228,30.81,16.499,44.476c2.27,13.7,1.533,26.67-2.138,38.494
                                    c13.038,4.717,28.673,6.787,44.183,6.787C476.404,397.014,517.804,382.987,511.327,344.251z"/>
                                <path class="st0" d="M254.487,262.691c52.687,0,95.403-42.716,95.403-95.402c0-52.67-42.716-95.386-95.403-95.386
                                    c-52.678,0-95.378,42.716-95.378,95.386C159.109,219.975,201.808,262.691,254.487,262.691z"/>
                                <path class="st0" d="M335.269,277.303c-2.07-2.061-11.471-2.588-14.027-1.006c-19.448,11.966-42.271,18.971-66.755,18.971
                                    c-24.466,0-47.3-7.005-66.738-18.971c-2.555-1.583-11.956-1.055-14.026,1.006c-16.021,16.004-37.136,51.782-41.384,77.288
                                    c-10.474,62.826,56.634,85.508,122.148,85.508c65.532,0,132.639-22.682,122.165-85.508
                                    C372.404,329.085,351.289,293.307,335.269,277.303z"/>
                                <path class="st0" d="M76.049,287.525c32.502,0,58.862-26.343,58.862-58.853c0-32.51-26.36-58.871-58.862-58.871
                                    c-32.511,0-58.871,26.361-58.871,58.871C17.178,261.182,43.538,287.525,76.049,287.525z"/>
                                <path class="st0" d="M115.094,351.733c2.414-14.353,9.225-31.253,17.764-46.88c-2.38-3.251-4.759-6.083-6.955-8.279
                                    c-1.299-1.306-7.097-1.608-8.672-0.636c-11.991,7.374-26.076,11.714-41.182,11.714c-15.108,0-29.202-4.34-41.183-11.714
                                    c-1.568-0.972-7.382-0.67-8.681,0.636c-9.887,9.854-22.882,31.915-25.514,47.677c-6.468,38.736,34.924,52.762,75.378,52.762
                                    c14.437,0,29.016-1.777,41.459-5.84C113.587,379.108,112.757,365.835,115.094,351.733z"/>
                            </g>
                            </svg>
                        </div>
                        <!-- <span>34,50 Students enrolled</span> -->
                        <span><?php echo number_format($enrolled_students); ?> Students enrolled</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row py-10 gap-8">
                <div class="md:w-8/12">
                    <div class="services-bg pb-10">
                        <?php the_post_thumbnail('full',array('alt'=> get_the_title() )); ?>
                        
                        <div class="services-infos">
                            <div class="flex flex-col">
                                <?php if(!empty($price)) : ?>
                                    <h5>$<?php echo esc_html($price); ?></h5>
                                <?php endif; ?>
                                <?php  if ( !empty($orginal_price) ) : ?>
                                    <h6>$<?php echo esc_html($orginal_price); ?></h6>
                                <?php endif; ?>
                                <div class="services-dis">
                                    <p>
                                        <?php if(!empty($discount)) : ?>
                                            <?php echo esc_html($discount); ?>
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                            <?php if( $current_user_id > 0 ) :?>
                                <button class="servicess-btn cursor-pointer" data-course-id="<?php echo get_the_ID(); ?>">Enroll Now</button>
                            <?php else: ?>
                                <div class="login-required">
                                    <p>Please Register to enroll</p>
                                    <div class="flex flex-col user-log">
                                        <a class="login-btn" href="<?php echo wp_login_url(get_the_permalink()); ?>">Login</a>
                                        <a class="register-btn" href="<?php echo wp_registration_url(); ?>">Register</a>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="services-details">
                                <h4>This Course Includes:</h4>
                                <div class="services-details-list">
                                    <div class="single-services-list">
                                        <span>
                                            <svg width="17px" height="17px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill: #FEA31B;><path fill: #FEA31B; fill-rule="evenodd" d="M5 5a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-1.586l2.293 2.293A1 1 0 0 0 22 16V8a1 1 0 0 0-1.707-.707L18 9.586V8a3 3 0 0 0-3-3H5z" clip-rule="evenodd"/></svg>
                                        </span>
                                        <p><?php echo esc_html($video_hours) ?> hours on-demand video</p>
                                    </div>
                                    <div class="single-services-list">
                                        <span>
                                            <svg width="17px" height="17px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill: #FEA31B;>
                                                <path fill-rule="evenodd" d="M8.6,4.99999 L8.6,12.6 L1.4,12.6 L1.4,1.4 L5,1.4 L5,4.99999 L8.6,4.99999 Z M7.6201,3.59999 L6.4,2.3799 L6.4,3.59999 L7.6201,3.59999 Z M10,4 L6,0 L0,0 L0,14 L10,14 L10,4 Z M2.79688,7 L7.2,7 L7.2,8.4 L2.79688,8.4 L2.79688,7 Z M7.2,9.8 L2.79688,9.8 L2.79688,11.2 L7.2,11.2 L7.2,9.8 Z" transform="translate(3 1)"/>
                                            </svg>
                                        </span>
                                        <p><?php echo esc_html($artical_counts); ?> articles</p>
                                    </div>
                                    <div class="single-services-list">
                                        <span>
                                            <svg fill: #FEA31B; width="17px" height="17px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" ><title>download</title><path d="M232 64L280 64 280 214 277 270 300 242 356 189 388 221 256 353 124 221 156 189 212 242 235 270 232 214 232 64ZM64 400L448 400 448 448 64 448 64 400Z" /></svg>
                                        </span>
                                        <p><?php echo esc_html($downloadable_resource); ?> downloadable resouces</p>
                                    </div>
                                    <div class="single-services-list">
                                        <span>
                                            <svg width="17px" height="17px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 8c-2.248 0-4 1.752-4 4s1.752 4 4 4h2a1 1 0 1 1 0 2H8c-3.352 0-6-2.648-6-6s2.648-6 6-6h2a1 1 0 1 1 0 2H8zm5-1a1 1 0 0 1 1-1h2c3.352 0 6 2.648 6 6s-2.648 6-6 6h-2a1 1 0 1 1 0-2h2c2.248 0 4-1.752 4-4s-1.752-4-4-4h-2a1 1 0 0 1-1-1zm-6 5a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1z" fill: #FEA31B;/></svg>
                                        </span>
                                        <p><?php echo esc_html($membership_duration); ?></p>
                                    </div>
                                    <div class="single-services-list">
                                        <span>
                                            <svg width="17px" height="17px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V5zm10 0H8v14h8V5z" fill: #FEA31B;/><path d="M13 17a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" fill: #FEA31B;/></svg>
                                        </span>
                                        <p><?php echo esc_html($supported_devices); ?></p>
                                    </div>
                                    <div class="single-services-list">
                                        <span>
                                            <svg width="17px" height="17px" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                            <path 
                                                d="M4 14.5H11M7.5 14.5V9.5M7.5 9.5C9.70914 9.5 11.5 7.70914 11.5 5.5V1.5C11.5 0.947715 11.0523 0.5 10.5 0.5H4.5C3.94772 0.5 3.5 0.947715 3.5 1.5V5.5C3.5 7.70914 5.29086 9.5 7.5 9.5ZM3.5 2.5H2.5C1.39543 2.5 0.5 3.39543 0.5 4.5C0.5 5.60457 1.39543 6.5 2.5 6.5H3.5M11.5 2.5H12.5C13.6046 2.5 14.5 3.39543 14.5 4.5C14.5 5.60457 13.6046 6.5 12.5 6.5H11.5" 
                                                fill="none" 
                                                stroke="#FEA31B" 
                                                stroke-width="1.2" 
                                                stroke-linecap="round" 
                                                stroke-linejoin="round"
                                            />
                                            </svg>
                                        </span>
                                        <p><?php echo esc_html($completion_certificate); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="services-left-details">
                        <ul class="service-tab-area">
                            <li data-tab="tab-1" class="active">Overview</li>
                            <li data-tab="tab-2">Curriculum</li>
                            <li data-tab="tab-3" >Instructor</li>
                            <li data-tab="tab-4" >Reviews</li>
                        </ul>
                    </div>
                    <div class="services-tab-content">
                        <!-- Tab-1 Content -->
                        <div id="tab-1" class="tab-content">
                            <div class="services-tab-content-info">
                                <div class="services-course-title">
                                    <h4>Course Description</h4>
                                    <p>Master the art of designing modern web applications with this comprehensive course. You'll learn industry-standard tools and techniques used by professional UI/UX designers to create beautiful, functional web applications.</p>
                                </div>
                                <div class="services-course-title">
                                    <h4>What You'll Learn</h4>
                                    <ul>
                                        <li>
                                            <svg class="size-4" fill="#FEA31B" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.608 240.608">
                                            <path d="M208.789,29.972l31.819,31.82L91.763,210.637L0,118.876l31.819-31.82l59.944,59.942L208.789,29.972z"></path>
                                            </svg>
                                            Principles of effective web app design
                                        </li>
                                        <li>
                                            <svg class="size-4" fill="#FEA31B" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.608 240.608">
                                            <path d="M208.789,29.972l31.819,31.82L91.763,210.637L0,118.876l31.819-31.82l59.944,59.942L208.789,29.972z"></path>
                                            </svg>
                                            User experience research methods 
                                        </li>
                                        <li>
                                            <svg class="size-4" fill="#FEA31B" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.608 240.608">
                                            <path d="M208.789,29.972l31.819,31.82L91.763,210.637L0,118.876l31.819-31.82l59.944,59.942L208.789,29.972z"></path>
                                            </svg>
                                            Creating wireframes and prototypes
                                        </li>
                                        <li>
                                            <svg class="size-4" fill="#FEA31B" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.608 240.608">
                                            <path d="M208.789,29.972l31.819,31.82L91.763,210.637L0,118.876l31.819-31.82l59.944,59.942L208.789,29.972z"></path>
                                            </svg>
                                            Design systems and component libraries
                                        </li>
                                        <li>
                                            <svg class="size-4" fill="#FEA31B" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.608 240.608">
                                            <path d="M208.789,29.972l31.819,31.82L91.763,210.637L0,118.876l31.819-31.82l59.944,59.942L208.789,29.972z"></path>
                                            </svg>
                                            Interaction design and micro-animations
                                        </li>
                                        <li>
                                            <svg class="size-4" fill="#FEA31B" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.608 240.608">
                                            <path d="M208.789,29.972l31.819,31.82L91.763,210.637L0,118.876l31.819-31.82l59.944,59.942L208.789,29.972z"></path>
                                            </svg>
                                            Handing off designs to developers
                                        </li>
                                        <li>
                                            <svg class="size-4" fill="#FEA31B" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.608 240.608">
                                            <path d="M208.789,29.972l31.819,31.82L91.763,210.637L0,118.876l31.819-31.82l59.944,59.942L208.789,29.972z"></path>
                                            </svg>
                                            Responseive Design techniques
                                        </li>
                                    </ul>
                                </div>
                                <div class="services-course-title">
                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>
                                            <svg width="16px" height="16px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="48" height="48" fill="white" fill-opacity="0.01"/>
                                                <path d="M24 33C28.9706 33 33 28.9706 33 24C33 19.0294 28.9706 15 24 15C19.0294 15 15 19.0294 15 24C15 28.9706 19.0294 33 24 33Z" fill="#000000" stroke="#000000" stroke-width="4"/>
                                            </svg>
                                            Basic computer skills
                                        </li>
                                        <li>
                                            <svg width="16px" height="16px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="48" height="48" fill="white" fill-opacity="0.01"/>
                                                <path d="M24 33C28.9706 33 33 28.9706 33 24C33 19.0294 28.9706 15 24 15C19.0294 15 15 19.0294 15 24C15 28.9706 19.0294 33 24 33Z" fill="#000000" stroke="#000000" stroke-width="4"/>
                                            </svg>
                                            Familiarity with any design tool (optional)
                                        </li>
                                        <li>
                                            <svg width="16px" height="16px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="48" height="48" fill="white" fill-opacity="0.01"/>
                                                <path d="M24 33C28.9706 33 33 28.9706 33 24C33 19.0294 28.9706 15 24 15C19.0294 15 15 19.0294 15 24C15 28.9706 19.0294 33 24 33Z" fill="#000000" stroke="#000000" stroke-width="4"/>
                                            </svg>
                                            Passion for design and creativity
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Tab-2 Content -->
                        <div id="tab-2" class="tab-content">
                            <div class="services-tab-content-info">
                                <div class="services-course-title">
                                    <h4>Course Curriculum</h4>
                                    <div id="accordion" class="services-accordion">
                                        <!-- Accordion 1 -->
                                        <h3>
                                            <span class="title">
                                                Section 1: Introduction to Web App Design
                                            </span>
                                            <span class="meta">
                                                6 Lectures
                                                <svg width="16px" height="16px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect>
                                                <path d="M24 33C28.9706 33 33 28.9706 33 24C33 19.0294 28.9706 15 24 15C19.0294 15 15 19.0294 15 24C15 28.9706 19.0294 33 24 33Z" fill="#000000" stroke="#000000" stroke-width="4"></path>
                                                </svg>
                                                45 min
                                            </span>
                                        </h3>
                                        <div class="service-accordion-content">
                                            <a href="#">
                                                <svg fill="#000000" width="25px" height="25px" viewBox="0 0 24 24" id="play" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color"><polygon id="secondary" points="16 12 10 16 10 8 16 12" style="fill: none; stroke: rgb(44, 169, 188); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polygon><circle id="primary" cx="12" cy="12" r="9" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></circle></svg>
                                                <span>Welcome to the course</span>
                                                <span>5:20</span>
                                            </a>
                                            <a href="#">
                                                <svg fill="#000000" width="25px" height="25px" viewBox="0 0 24 24" id="play" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color"><polygon id="secondary" points="16 12 10 16 10 8 16 12" style="fill: none; stroke: rgb(44, 169, 188); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polygon><circle id="primary" cx="12" cy="12" r="9" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></circle></svg>
                                                <span>What is web app design</span>
                                                <span>8:15</span>
                                            </a>
                                            <a href="#">
                                                <svg fill="#000000" width="25px" height="25px" viewBox="0 0 24 24" id="play" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color"><polygon id="secondary" points="16 12 10 16 10 8 16 12" style="fill: none; stroke: rgb(44, 169, 188); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polygon><circle id="primary" cx="12" cy="12" r="9" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></circle></svg>
                                                <span>Industry tools overview</span>
                                                <span>12:40</span>
                                            </a>
                                        </div>
                                        <!-- Accordion 2 -->
                                        <h3>
                                            <span class="title">
                                                Section2: User Research
                                            </span>
                                            <span class="meta">
                                                8 Lectures
                                                <svg width="16px" height="16px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect>
                                                <path d="M24 33C28.9706 33 33 28.9706 33 24C33 19.0294 28.9706 15 24 15C19.0294 15 15 19.0294 15 24C15 28.9706 19.0294 33 24 33Z" fill="#000000" stroke="#000000" stroke-width="4"></path>
                                                </svg>
                                                1 hr 20 min
                                            </span>
                                        </h3>
                                        <div class="service-accordion-content">
                                            <a href="#">
                                                <svg fill="#000000" width="25px" height="25px" viewBox="0 0 24 24" id="play" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color"><polygon id="secondary" points="16 12 10 16 10 8 16 12" style="fill: none; stroke: rgb(44, 169, 188); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polygon><circle id="primary" cx="12" cy="12" r="9" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></circle></svg>
                                                <span>Understanding user needs</span>
                                                <span>15:20</span>
                                            </a>
                                            <a href="#">
                                                <svg fill="#000000" width="25px" height="25px" viewBox="0 0 24 24" id="play" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color"><polygon id="secondary" points="16 12 10 16 10 8 16 12" style="fill: none; stroke: rgb(44, 169, 188); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polygon><circle id="primary" cx="12" cy="12" r="9" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></circle></svg>
                                                <span>Creating user personal</span>
                                                <span>18:30</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab-3 Content -->
                        <div id="tab-3" class="tab-content">
                            <div class="services-accordion-content instructors">
                                <h6>Instructor</h6>
                                <div class="service-acc-ins">
                                    <div class="flex flex-col">
                                        <h4>Sarah Johnson</h4>
                                        <p>Senior UI/UX Designer at Techcorp</p>
                                    </div>
                                    <div class="service-acc-rating">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                            <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#FEA31B"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                                <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#FEA31B"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                                <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#FEA31B"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                                <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#FEA31B"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                                <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#FEA31B"></path>
                                            </svg>
                                        </div>
                                        <span >4.9 Instructor Rating</span>
                                    </div>
                                    <div class="service-acc-enroll">
                                        <div class="single-enroll">
                                            <h5>12,540</h5>
                                            <p>Students</p>
                                        </div>
                                        <div class="single-enroll">
                                            <h5>8</h5>
                                            <p>Courses</p>
                                        </div>
                                    </div>
                                    <p>Sarah has been designing digital products for over 10 years, specializing in web and mobile applications. She has worked with startups and Fortune 500 companies to create intuitive, beautiful user experiences.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Tab-4 Content -->
                        <div id="tab-4" class="tab-content">
                            <div class="review-area">
                                <div class="review-title">
                                    <h4>Student Reviews</h4>
                                    <form class="review-form" method="post" action="">
                                        <h3>Add Your Review</h3>

                                        <!-- কোর্স আইডি Hidden -->
                                        <input type="hidden" name="course_id" value="<?php echo get_the_ID(); ?>">

                                        <h6>Your Rating:</h6>
                                        <div class="review-rating" id="rating-stars">
                                            <i class="fa-regular fa-star cursor-pointer" data-value="1"></i>
                                            <i class="fa-regular fa-star cursor-pointer" data-value="2"></i>
                                            <i class="fa-regular fa-star cursor-pointer" data-value="3"></i>
                                            <i class="fa-regular fa-star cursor-pointer" data-value="4"></i>
                                            <i class="fa-regular fa-star cursor-pointer" data-value="5"></i>
                                        </div>

                                        <!-- hidden field to store rating -->
                                        <input type="hidden" name="rating" id="rating" value="0" required />

                                        <div class="form-control">
                                            <label for="reviewer_name">Your Name:</label>
                                            <input type="text" name="reviewer_name" id="reviewer_name" required>
                                        </div>

                                        <div class="form-control">
                                            <label for="review_text">Your Message:</label>
                                            <textarea name="review_text" id="review_text" cols="5" rows="4" required></textarea>
                                        </div>

                                        <div class="flex">
                                            <button type="submit" name="submit_review" class="review-btn">Submit Review</button>
                                        </div>
                                    </form>

                                    <div class="review-form-content py-6">
                                        <?php
                                            $reviews = lessonlms_get_course_reviews(get_the_ID());

                                            if ($reviews) : ?>
                                                <?php foreach( array_reverse($reviews) as $review ) : ?>
                                                    <div class="single-review-item">
                                                        <div class="flex justify-between">
                                                            <h5><?php echo esc_html($review['name']); ?></h5>
                                                            <div class="review-rating">
                                                                <?php for( $i=1; $i <= 5; $i++ ) : ?>
                                                                    <?php if( $i <= $review['rating'] ): ?>
                                                                        <i class="fa-solid fa-star text-yellow-500"></i>
                                                                    <?php else: ?>
                                                                        <i class="fa-regular fa-star"></i>
                                                                    <?php endif; ?>
                                                                <?php endfor; ?>
                                                            </div>
                                                        </div>
                                                        <div class="review-massage">
                                                            <p><?php echo esc_html($review['review']); ?></p>
                                                            <p><?php echo date('F j, Y', strtotime($review['date'])); ?></p>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <p>No Review yet.</p>
                                            <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="md:w-4/12">
                    <div class="services-right-area">
                        <!-- Course Right Details  01 -->
                        <div class="single-services-right-list">
                            <h4>Course Details</h4>
                            <?php
                                $duration        = get_post_meta($post->ID, 'course_duration', true);
                                $last_update     = get_post_meta($post->ID, 'course_lastUpdate', true);
                                $language        = get_post_meta($post->ID, 'course_instructor', true);
                                $subtitle        = get_post_meta($post->ID, 'course_subtitle', true);
                            ?>
                            <div class="single-services-right-item">
                                <span>
                                    <svg fill="#FEA31B" class="size-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12,23 C5.92486775,23 1,18.0751322 1,12 C1,5.92486775 5.92486775,1 12,1 C18.0751322,1 23,5.92486775 23,12 C23,18.0751322 18.0751322,23 12,23 Z M12,21 C16.9705627,21 21,16.9705627 21,12 C21,7.02943725 16.9705627,3 12,3 C7.02943725,3 3,7.02943725 3,12 C3,16.9705627 7.02943725,21 12,21 Z M13,11 L17,11 L17,13 L11,13 L11,6 L13,6 L13,11 Z"/>
                                    </svg>
                                </span>
                                <div class="services-right-details">
                                    <p>Duration</p>
                                    <span><?php echo esc_html($duration); ?></span>
                                </div>
                            </div>
                            <div class="single-services-right-item">
                                <span>
                                    <svg fill="#FEA31B" class="size-6"  viewBox="-2 -3 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-calendar"><path d='M18 7V5a1 1 0 0 0-1-1h-1v1a1 1 0 0 1-2 0V4H6v1a1 1 0 1 1-2 0V4H3a1 1 0 0 0-1 1v2h16zm0 2H2v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V9zm-2-7h1a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3h1V1a1 1 0 1 1 2 0v1h8V1a1 1 0 0 1 2 0v1z'/></svg>
                                </span>
                                <div class="services-right-details">
                                    <p>last updated</p>
                                    <span><?php echo esc_html($last_update); ?></span>
                                </div>
                            </div>
                            <div class="single-services-right-item">
                                <span>
                                    <svg class="size-6" viewBox="0 -64 640 640" xmlns="http://www.w3.org/2000/svg" fill="#FEA31B">
                                        <path d="M152.1 236.2c-3.5-12.1-7.8-33.2-7.8-33.2h-.5s-4.3 21.1-7.8 33.2l-11.1 37.5H163zM616 96H336v320h280c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24zm-24 120c0 6.6-5.4 12-12 12h-11.4c-6.9 23.6-21.7 47.4-42.7 69.9 8.4 6.4 17.1 12.5 26.1 18 5.5 3.4 7.3 10.5 4.1 16.2l-7.9 13.9c-3.4 5.9-10.9 7.8-16.7 4.3-12.6-7.8-24.5-16.1-35.4-24.9-10.9 8.7-22.7 17.1-35.4 24.9-5.8 3.5-13.3 1.6-16.7-4.3l-7.9-13.9c-3.2-5.6-1.4-12.8 4.2-16.2 9.3-5.7 18-11.7 26.1-18-7.9-8.4-14.9-17-21-25.7-4-5.7-2.2-13.6 3.7-17.1l6.5-3.9 7.3-4.3c5.4-3.2 12.4-1.7 16 3.4 5 7 10.8 14 17.4 20.9 13.5-14.2 23.8-28.9 30-43.2H412c-6.6 0-12-5.4-12-12v-16c0-6.6 5.4-12 12-12h64v-16c0-6.6 5.4-12 12-12h16c6.6 0 12 5.4 12 12v16h64c6.6 0 12 5.4 12 12zM0 120v272c0 13.3 10.7 24 24 24h280V96H24c-13.3 0-24 10.7-24 24zm58.9 216.1L116.4 167c1.7-4.9 6.2-8.1 11.4-8.1h32.5c5.1 0 9.7 3.3 11.4 8.1l57.5 169.1c2.6 7.8-3.1 15.9-11.4 15.9h-22.9a12 12 0 0 1-11.5-8.6l-9.4-31.9h-60.2l-9.1 31.8c-1.5 5.1-6.2 8.7-11.5 8.7H70.3c-8.2 0-14-8.1-11.4-15.9z"/>
                                    </svg>

                                </span>
                                <div class="services-right-details">
                                    <p>Language</p>
                                    <span><?php echo esc_html($language); ?></span>
                                </div>
                            </div>
                            <div class="single-services-right-item">
                                <span>
                                    <svg class="size-6" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#FEA31B" d="M472,64H40A24.028,24.028,0,0,0,16,88V424a24.028,24.028,0,0,0,24,24H472a24.028,24.028,0,0,0,24-24V88A24.028,24.028,0,0,0,472,64Zm-8,352H48V96H464Z"/>
                                    <path fill="#FEA31B" d="M184,344a87.108,87.108,0,0,0,54.484-18.891L218.659,299.99A55.41,55.41,0,0,1,184,312a56,56,0,0,1,0-112,55.41,55.41,0,0,1,34.659,12.01l19.825-25.119A87.108,87.108,0,0,0,184,168a88,88,0,0,0,0,176Z"/>
                                    <path fill="#FEA31B" d="M347.429,344a87.108,87.108,0,0,0,54.484-18.891L382.088,299.99A55.414,55.414,0,0,1,347.429,312a56,56,0,0,1,0-112,55.414,55.414,0,0,1,34.659,12.01l19.825-25.119A87.108,87.108,0,0,0,347.429,168a88,88,0,0,0,0,176Z"/>
                                    </svg>

                                </span>
                                <div class="services-right-details">
                                    <p>Subtitles</p>
                                    <span><?php echo esc_html($subtitle); ?></span>
                                </div>
                            </div>
                        </div>
                         <!-- Course Right Details  02 -->
                        <div class="single-services-right-list">
                            <?php
                                $audience_1 = get_post_meta($post->ID, 'audience_1', true)?: 'Aspiring UI/UX desingers';
                                $audience_2 = get_post_meta($post->ID, 'audience_2', true)?: 'Web developers wanting design skills';
                                $audience_3 = get_post_meta($post->ID, 'audience_3', true)?: 'Graphic designers transitioning to digital';
                                $audience_4 = get_post_meta($post->ID, 'audience_4', true)?: 'Product managers';
                            ?>
                            <h4>who course this for:</h4>
                            <div class="single-services-right-item">
                                <div class="services-right-detailss">
                                    <svg class="size-5" fill="#FEA31B" xmlns="http://www.w3.org/2000/svg" 
                                        viewBox="0 0 240.608 240.608" fill="currentColor">
                                    <path d="M208.789,29.972l31.819,31.82L91.763,210.637L0,118.876l31.819-31.82l59.944,59.942L208.789,29.972z"/>
                                    </svg>
                                    <span><?php echo esc_html($audience_1); ?></span>
                                </div>
                            </div>
                            <div class="single-services-right-item">
                                <div class="services-right-detailss">
                                    <svg class="size-5" fill="#FEA31B" xmlns="http://www.w3.org/2000/svg" 
                                        viewBox="0 0 240.608 240.608" fill="currentColor">
                                    <path d="M208.789,29.972l31.819,31.82L91.763,210.637L0,118.876l31.819-31.82l59.944,59.942L208.789,29.972z"/>
                                    </svg>
                                    <span><?php echo esc_html($audience_2); ?></span>
                                </div>
                            </div>
                            <div class="single-services-right-item">
                                <div class="services-right-detailss">
                                    <svg class="size-5" fill="#FEA31B" xmlns="http://www.w3.org/2000/svg" 
                                        viewBox="0 0 240.608 240.608" fill="currentColor">
                                    <path d="M208.789,29.972l31.819,31.82L91.763,210.637L0,118.876l31.819-31.82l59.944,59.942L208.789,29.972z"/>
                                    </svg>
                                    <span><?php echo esc_html($audience_3); ?></span>
                                </div>
                            </div>
                            <div class="single-services-right-item">
                                <div class="services-right-detailss">
                                    <svg class="size-5" fill="#FEA31B" xmlns="http://www.w3.org/2000/svg" 
                                        viewBox="0 0 240.608 240.608" fill="currentColor">
                                    <path d="M208.789,29.972l31.819,31.82L91.763,210.637L0,118.876l31.819-31.82l59.944,59.942L208.789,29.972z"/>
                                    </svg>
                                    <span><?php echo esc_html($audience_4); ?></span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- You May Area -->
    <section class="blog-area">
        <div class="container">
            <div class="blog-title">
                <h3>You May Also Like</h3>
            </div>
        </div>
    </section>
    
    <script>
        //  সব ".servicess-btn" ক্লাস দেওয়া বাটনগুলো সিলেক্ট করা হচ্ছে
        document.querySelectorAll('.servicess-btn').forEach(button => {

            //  প্রতিটি বাটনে click ইভেন্ট হ্যান্ডলার যোগ করা হচ্ছে
            button.addEventListener('click', function() {

                //  ক্লিক করা বাটনের data-course-id attribute থেকে কোর্স আইডি নেওয়া
                const courseID = this.getAttribute('data-course-id');

                //  যেখানে enrolled student সংখ্যা দেখানো হবে সেই span এলিমেন্ট সিলেক্ট করা
                const enrolledElement = document.querySelector('.services-team span');

                //  AJAX রিকোয়েস্ট WordPress সার্ভারের admin-ajax.php-তে পাঠানো হচ্ছে
                fetch(ajax_object.ajax_url, {
                    method: 'POST', // POST মেথড ব্যবহার
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }, // ফর্ম ডেটা টাইপ
                    body: 'action=lessonlms_enroll_course&course_id=' + courseID, // কোর্স আইডি এবং action নাম পাঠানো
                })
                .then(response => response.json()) //  সার্ভারের রেসপন্স JSON এ কনভার্ট করা

                //  সার্ভারের রেসপন্স নিয়ে কাজ করা
                .then(data => {

                    //  যদি success:true আসে (এনরোল সফল)
                    if (data.success) {
                        // 🔹 span এ নতুন এনরোল সংখ্যা দেখানো
                        enrolledElement.textContent = data.data.new_count + ' Students Enrolled';

                        // 🔹 বাটনের টেক্সট "Enrolled" করে দেওয়া
                        this.textContent = 'Enrolled';

                        // 🔹 বাটন disable করা যাতে আবার ক্লিক না করা যায়
                        this.disabled = true;

                        // 🔹 ইউজারকে সফল হওয়ার alert দেখানো
                        alert(data.data.message);

                    } else {
                        //  যদি success:false আসে
                        if (data.data === 'Please log in to enroll in the course.') {
                            // 🔹 ইউজার লগইন না থাকলে alert দেখানো
                            alert('Please Login First');

                            // 🔹 ইউজারকে লগইন পেজে পাঠানো
                            window.location.href = ajax_object.login_url;
                        } else {
                            // 🔹 অন্য কোনো এরর থাকলে সেটি দেখানো
                            alert('Oops! Enrollment Unsuccessful: ' + data.data);
                        }
                    }
                })

                //  AJAX রিকোয়েস্টে কোনো সমস্যা হলে catch ব্লক
                .catch(error => {
                    console.error('error:', error); // 🔹 কনসোলে এরর দেখানো (ডিবাগের জন্য)
                    alert('Please try again later.'); // 🔹 ইউজারকে জানানো
                });
            });
        });
    </script>

    <!-- <script>
        jQuery(document).ready(function($) {
            $('.servicess-btn').on('click', function() {
                var button = $(this);
                var courseID = button.data('course-id');
                var enrolledElement = $('.services-team span');

                $.ajax({
                    url: ajax_object.ajax_url, // wp_localize_script থেকে আসবে
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: 'lessonlms_enroll_course',
                        course_id: courseID
                    },
                    success: function(response) {
                        if (response.success) {
                            enrolledElement.text(response.data + ' Student Enrolled');
                            button.text('Enrolled').prop('disabled', true);
                            alert('You have successfully enrolled in the course!');
                        } else {
                            if (response.data === 'Please log in to enroll in the course.') {
                                alert('Please Login First');
                                window.location.href = ajax_object.login_url;
                            } else {
                                alert('Oops! Enrollment Unsuccessful: ' + response.data);
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', error);
                        alert('Please try again later.');
                    }
                });
            });
        });

    </script> -->

    <?php endwhile;
        endif;
    ?>


<?php get_footer(); ?>