<?php

// Enqueue scripts and style

use function PHPSTORM_META\type;

function lessonlms_theme_scripts(){
    // Theme Style-Css
    wp_enqueue_style('style-css', get_template_directory_uri() . './style.css');
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css',array(),'1.9.0');
    wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css',array(),'7.0.0');

    // Theme Js Style

    // jQuery
    wp_enqueue_script('jQuery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(),'3.7.1');

    wp_enqueue_script('jquery-ui-js','https://code.jquery.com/ui/1.14.1/jquery-ui.js',array(),'1.14.1');

    // Slick Carousel
    wp_enqueue_script('slick-carousel','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',array(),'1.9.0');

    // Main Js
    wp_enqueue_script('main-js', get_template_directory_uri() . './main.js');


}
add_action("wp_enqueue_scripts","lessonlms_theme_scripts");



function lessonlms_theme_registration(){

    add_theme_support('post-thumbnails');
    // For Custom Logo
    add_theme_support('custom-logo',array(
        // 'height' => 30,
        // 'width' => 80,
    ) );

    // Register Menu
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu','lessonlms'),
        'mobile_menu' => __('Mobile Menu','lessonlms'),
        'footer_menu_1' => __('Footer Menu 1','lessonlms'),
        'footer_menu_2' => __('Footer Menu 2','lessonlms'),
    ));
}
add_action('after_setup_theme','lessonlms_theme_registration');

// Customize register
function lessonlms_customize_register($wp_customize){

    // Hero Section Start Here
    $wp_customize->add_section('hero_settings',array(
        'title' => __('Hero Settings','lessonlms'),
        'priority' => 30,
    ));

    // Hero Image
    $wp_customize->add_setting('hero_image',array(
        'default' => get_template_directory_uri() . './assets/img/hero.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'hero_image', array(
        'label' => __('Hero Image','lessonlms'),
        'settings' => 'hero_image',
        'section' => 'hero_settings',
    )));


    // Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default' => 'Learn without limits and spread knowledge.',
    ));
    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text',
    ));

    // Hero Description
    $wp_customize->add_setting('hero_description', array(
        'default' => 'Build new skills for that “this is my year” feeling with courses, certificates, and degrees from world-class universities and companies.',
    ));
    $wp_customize->add_control('hero_description', array(
        'label' => __('Hero Description','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'textarea',
    ));
    
    // Hero Button Text
    $wp_customize->add_setting('hero_button_text', array(
        'default' => 'See Courses',
    ));
    $wp_customize->add_control('hero_button_text', array(
        'label' => __('Hero Button Text','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text',
    ));

    // Hero Button URL
    $wp_customize->add_setting('hero_button_url', array(
        'default' => '#',
    ));

    $wp_customize->add_control('hero_button_url', array(
        'label' => __('Hero Button URL','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'url',
    ));


    // Hero Video Text
    $wp_customize->add_setting('hero_video_text', array(
        'default' => 'Watch Video',
    ));
    $wp_customize->add_control('hero_video_text', array(
        'label' => __('Hero Video Text','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text',
    ));

    // Hero video URL
    $wp_customize->add_setting('hero_video_url', array(
        'default' => '#',
    ));

    $wp_customize->add_control('hero_video_url', array(
        'label' => __('Hero Video URL','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'url',
    ));


    // Recent engagement title

    $wp_customize->add_setting('recent_engagement_title', array(
        'default' => 'Recent Engagement',
    ));

    $wp_customize->add_control('recent_engagement_title', array(
        'label' => __('Recent Engagement Title','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text',
    ));


    // Student Count
    $wp_customize->add_setting('students_count', array(
        'default' => '50k',
    ));
    
    $wp_customize->add_control('students_count', array(
        'label' => __('Students Count','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text',
    ));

    // Students Count Title
    $wp_customize->add_setting('students_count_title', array(
        'default' => 'Students',
    ));
    
    $wp_customize->add_control('students_count_title', array(
        'label' => __('Students Count Title','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text',
    ));


    // Student Course Count
    $wp_customize->add_setting('students_course_count', array(
        'default' => '70+',
    ));
    
    $wp_customize->add_control('students_course_count', array(
        'label' => __('Students Count','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text',
    ));

    // Students Count Title
    $wp_customize->add_setting('students_course_count_title', array(
        'default' => 'Courses',
    ));
    
    $wp_customize->add_control('students_course_count_title', array(
        'label' => __('Students Count Title','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text',
    ));



    // Ui/Ux course Count
    $wp_customize->add_setting('ui_ux_course_count', array(
        'default' => '20',
    ));
    $wp_customize->add_control('ui_ux_course_count', array(
        'label' => __('UI/UX Course Count','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'number',
    ));

    // Devolopment course Count
    $wp_customize->add_setting('devolopment_course_count', array(
        'default' => '20',
    ));
    $wp_customize->add_control('devolopment_course_count', array(
        'label' => __('Devolopment Course Count','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'number',
    ));


    // Marketing course Count
    $wp_customize->add_setting('marketing_course_count', array(
        'default' => '30',
    ));
    $wp_customize->add_control('marketing_course_count', array(
        'label' => __('Marketing Course Count','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'number',
    ));



    // Ui/Ux course Count Title
    $wp_customize->add_setting('ui_ux_course_count_title', array(
        'default' => 'UI/UX Design',
    ));
    $wp_customize->add_control('ui_ux_course_count_title', array(
        'label' => __('UI/UX Course Count Title','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text',
    ));

    // Devolopment course Count Title
    $wp_customize->add_setting('devolopment_course_count_title', array(
        'default' => 'Development',
    ));
    $wp_customize->add_control('devolopment_course_count_title', array(
        'label' => __('Devolopment Course Count Title','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text',
    ));


    // Marketing course Count Title
    $wp_customize->add_setting('marketing_course_count_title', array(
        'default' => 'Marketing',
    ));
    $wp_customize->add_control('marketing_course_count_title', array(
        'label' => __('Marketing Course Count Title','lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text',
    ));



    // Hero Two Area Start Here
    $wp_customize->add_section('hero_two_settings', array(
        'title' => __('Hero Two Settings','lessonlms'),
        'priority' => 40,
    ));
    // Hero Two Title
    $wp_customize->add_setting('hero_two_title', array(
        'default' => 'Take the next step toward your personal and professional goals with Lesson.',
    ));
    $wp_customize->add_control('hero_two_title', array(
        'label' => __('Hero Two Title','lessonlms'),
        'section' => 'hero_two_settings',
        'type' => 'text',
    ));
    // Hero Two Description
    $wp_customize->add_setting('hero_two_description', array(
        'default' => 'Take the next step toward. Join now to receive personalized  and more recommendations from the full Coursera catalog.',
    ));
    $wp_customize->add_control('hero_two_description', array(
        'label' => __('Hero Two Description','lessonlms'),
        'section' => 'hero_two_settings',
        'type' => 'textarea',
    ));
    // Hero Two Button Text
    $wp_customize->add_setting('hero_two_button_text', array(
        'default' => 'Join Now',
    ));
    $wp_customize->add_control('hero_two_button_text', array(
        'label' => __('Hero Two Button Text','lessonlms'),
        'section' => 'hero_two_settings',
        'type' => 'text',
    ));
    // Hero Two Button URL
    $wp_customize->add_setting('hero_two_button_url', array(
        'default' => '#',
    ));
    $wp_customize->add_control('hero_two_button_url', array(
        'label' => __('Hero Two Button URL','lessonlms'),
        'section' => 'hero_two_settings',
        'type' => 'url',
    ));
    // Hero Two Image
    $wp_customize->add_setting('hero_two_image', array(
        'default' => get_template_directory_uri() . './assets/img/hero-2.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'hero_two_image', array(
        'label' => __('Hero Two Image','lessonlms'),
        'settings' => 'hero_two_image',
        'section' => 'hero_two_settings',
    )));




    // Intro Section Start Here
    $wp_customize->add_section('intro_settings', array(
        'title' => __('Intro Settings','lessonlms'),
        'priority' => 100,
    ));

    // Intro BG 1 Image
    $wp_customize->add_setting('intro_bg_1_image', array(
        'default' => get_template_directory_uri() . './assets/img/i-1.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'intro_bg_1_image', array(
        'label' => __('Intro BG 1 Image','lessonlms'),
        'settings' => 'intro_bg_1_image',
        'section' => 'intro_settings',
    )));
    // Intro BG 2 Image
    $wp_customize->add_setting('intro_bg_2_image', array(
        'default' => get_template_directory_uri() . './assets/img/i-2.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'intro_bg_2_image', array(
        'label' => __('Intro BG 2 Image','lessonlms'),
        'settings' => 'intro_bg_2_image',
        'section' => 'intro_settings',
    )));


    // Intro Title
    $wp_customize->add_setting('intro_title', array(
        'default' => 'Learner outcomes through our awesome platform',
    ));
    $wp_customize->add_control('intro_title', array(
        'label' => __('Intro Title','lessonlms'),
        'section' => 'intro_settings',
        'type' => 'text',
    ));
    // Intro Description
    $wp_customize->add_setting('intro_description', array(
        'default' => '87% of people learning for professional development report career benefits like getting a promotion, a raise, or starting a new career.',
    ));
    $wp_customize->add_control('intro_description', array(
        'label' => __('Intro Description','lessonlms'),
        'section' => 'intro_settings',
        'type' => 'textarea',
    ));

    // Intro Description 2
    $wp_customize->add_setting('intro_description_2', array(
        'default' => 'Lesson Impact Report (2022)',
    ));
    $wp_customize->add_control('intro_description_2', array(
        'label' => __('Intro Description 2','lessonlms'),
        'section' => 'intro_settings',
        'type' => 'textarea',
    ));
    // Intro Button Text
    $wp_customize->add_setting('intro_button_text', array(
        'default' => 'Sign Up',
    ));
    $wp_customize->add_control('intro_button_text', array(
        'label' => __('Intro Button Text','lessonlms'),
        'section' => 'intro_settings',
        'type' => 'text',
    ));
    // Intro Button URL
    $wp_customize->add_setting('intro_button_url', array(
        'default' => '#',
    )); 
    $wp_customize->add_control('intro_button_url', array(
        'label' => __('Intro Button URL','lessonlms'),
        'section' => 'intro_settings',
        'type' => 'url',
    ));



    




    // Blog Section Start Here
    $wp_customize->add_section('blog_settings', array(
        'title' =>__('Blog Setting','lessonlms'),
        'priority' =>110,
    ));

    // Blog Section Title
    $wp_customize->add_setting('blog_section_title', array(
        'default' =>'Our Blog',
    ));

    $wp_customize->add_control('blog_section_title', array(
       'label' =>__('Blog Section Title','lessonlms'),
       'section' =>'blog_settings',
       'type' => 'text'
    ));

    // Blog Section Description
    $wp_customize->add_setting('blog_section_description', array(
        'default' => 'Read our regular travel blog and know the latest update of tour and travel'
    ));
    $wp_customize->add_control('blog_section_description', array(
        'label' =>__('Blog Section Description','lessonlms'),
        'section' =>'blog_settings',
        'type' => 'textarea'
    ));

    // Footer Section Start here
    $wp_customize->add_section('footer_settings', array(
        'title' => __('Footer Setting','lessonlms'),
        'priority' =>120,
    ));


    // Footer Logo
    $wp_customize->add_setting('footer_logo');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'footer_logo', array(

        'label' => __('Footer Logo','lessonlms'),
        'settings'   => 'footer_logo',
        'section' =>'footer_settings'

    )));

    // Social Links
    $socials =['twitter','facebook','linkedin','instagram'];
    foreach($socials as $social){
        $wp_customize->add_setting("footer_{$social}_link", array(

            'default' => '#',
        ));
        $wp_customize->add_control("footer_{$social}_link", array(

            'label' => sprintf(__('%s URL', 'lessonlms'), ucfirst($social)),
            'section' => 'footer_settings',
            'type' => 'url'
        ));
    }

    // About Text
    $wp_customize->add_setting('footer_about_text', array(

        'default' => 'Need to help for your dream Career? trust us. With Lesson, study becomes a lot easier with us.',
    ));

    $wp_customize->add_control('footer_about_text', array(

        'label' => __('About Text', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'textarea',
    ));

    // Footer Menu 1 Title
    $wp_customize->add_setting('footer_menu_1_title', array(

        'default' => 'Company',
    ));

    $wp_customize->add_control('footer_menu_1_title', array(

        'label' => __('Footer Menu Title 1', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));

    // Footer Menu 2 Title
    $wp_customize->add_setting('footer_menu_2_title', array(

        'default' => 'Support',
    ));

    $wp_customize->add_control('footer_menu_2_title', array(

        'label' => __('Footer Menu Title 2', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));

    // Footer Menu 3 Title
    $wp_customize->add_setting('footer_menu_3_title', array(

        'default' => 'Address',
    ));

    $wp_customize->add_control('footer_menu_3_title', array(

        'label' => __('Footer Menu Title 3', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));


    // Footer Location
    $wp_customize->add_setting('footer_location', array(

        'default' => 'Location:',
    ));

    $wp_customize->add_control('footer_location', array(

        'label' => __('Footer Location', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));

    // Footer Location Description
    $wp_customize->add_setting('footer_location_description', array(

        'default' => '27 Division St, New York, NY 10002, USA',
    ));

    $wp_customize->add_control('footer_location_description', array(

        'label' => __('Footer Location Description', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));

    // Footer Title  Email
    $wp_customize->add_setting('footer_title_email', array(

        'default' => 'Email:',
    ));

    $wp_customize->add_control('footer_title_email', array(

        'label' => __('Footer Email Title', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));

    // Footer  Email
    $wp_customize->add_setting('footer_email', array(

        'default' => 'email@gmail.com',
    ));

    $wp_customize->add_control('footer_email', array(

        'label' => __('Footer Email', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));

    // Footer  Title Phone
    $wp_customize->add_setting('footer_title_phone', array(

        'default' => 'Phone:',
    ));

    $wp_customize->add_control('footer_title_phone', array(

        'label' => __('Footer Title phone', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));

    // Footer  Phone
    $wp_customize->add_setting('footer_phone', array(

        'default' => '+ 000 1234 567 890',
    ));

    $wp_customize->add_control('footer_phone', array(

        'label' => __('Footer phone', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));
}
add_action('customize_register','lessonlms_customize_register');


// widget Register
function lessonlms_register_sidebar(){
    register_sidebar(array(
        'name' => __('Blog Sidebar','lessonlms'),
        'id' => 'blog_sidebar',
        'description' => __('This is the blog sidebar widget area','lessonlms'),
        'before_widget' => '<div id="%1$s" class="recent-post" %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ));

}
add_action('widgets_init','lessonlms_register_sidebar');

// For custom post register
function lessonlms_custom_post(){
    register_post_type('course', array(

        'labels' => array(
            'name' => __("Courses",'lessonlms'),
            'singular_name' => __('Course', 'lessonlms'),
            'add_new'      => __('Add New Course', 'lessonlms'),
            'add_new_item' => __('Add New Course', 'lessonlms'),
            'edit_item' => __('Edit Course', 'lessonlms'),
            'new_item' => __('New Course', 'lessonlms'),
            'search_item' => __('Search Courses', 'lessonlms'),
        ),
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes','custom-fields'),
        'public'        => true,
        'show_ui'       => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-welcome-learn-more',
        'rewrite'       => array('slug' => 'courses'),
    ));
}
add_action('init','lessonlms_custom_post');


// For Course Pagination
function lessonlms_course_archive_posts_per_page( $query ) {
    if ( !is_admin() && $query->is_main_query() && is_post_type_archive('course') ) {
        $query->set( 'posts_per_page', 6 );
    }
}
add_action( 'pre_get_posts', 'lessonlms_course_archive_posts_per_page' );

require_once('inc/service-meta-box.php');


// For Duplicate showing data and velue in custom filed
function lessonlms_hide_course_meta_from_custom_fields( $protected, $meta_key, $meta_type ) {
    $course_keys = array(
        'course_duration',
        'course_lastUpdate',
        'course_instructor',
        'course_subtitle',
        'target_audience',
        'prerequisites',
        'course_level',
        'orginal_price',
        'video_hours',
        'artical_counts',
        'downloadable_resource',
        'membership_duration',
        'supported_devices',
        'completion_certificate',
        'audience_1',
        'audience_2',
        'audience_3',
        'audience_4',
    );

    if ( in_array( $meta_key, $course_keys, true ) ) {
        return true;
    }

    return $protected;
}
add_filter( 'is_protected_meta', 'lessonlms_hide_course_meta_from_custom_fields', 10, 3 );





// ইউজার রিভিউ সাবমিট করলে টা প্রসেস হবে এবং সেভ হবে।
function lessonlms_handle_review_submission(){
    if(isset($_POST['submit_review']) && isset($_POST['course_id'])){

        $course_id = intval($_POST['course_id']);
        $rating = intval($_POST['rating']);
        $review_text = sanitize_text_field($_POST['review_text']);
        $reviewer_name = sanitize_text_field($_POST['reviewer_name']);

        if( $rating >= 1 && $rating <= 5 && !empty($review_text) && !empty($reviewer_name) ){

            $reviews = get_post_meta($course_id, '_course_reviews', true);

            if(!is_array($reviews)){
                $reviews =array();
            }

            $new_review = array(
                'rating' => $rating,
                'review' => $review_text,
                'name' => $reviewer_name,
                'date' => current_time('mysql')
            );

            $reviews[] = $new_review;

            update_post_meta($course_id, '_course_reviews', $reviews);

            lessonlms_review_update_stats($course_id);
        }

         // ... আপনার সাবমিশন কোড ...
        // সাবমিশন সফল হলে রিডিরেক্ট করুন
        $redirect_url = get_permalink($_POST['course_id']);
        // অপশনally আপনি query param যোগ করতে পারেন, যেমন ?review_submitted=1
        $redirect_url = add_query_arg('review_submitted', '1', $redirect_url);
        wp_redirect($redirect_url);
        exit;


    }
}
add_action('init','lessonlms_handle_review_submission');

// কোর্সের রিভিউ থেকে মোট রিভিউ সংখ্যা এবং গড় রেটিং আপডেট করবে।
function lessonlms_review_update_stats($course_id){

    $reviews = get_post_meta($course_id,'_course_reviews',true);
    if(is_array($reviews) && !empty($reviews)){

        $total_rating = 0;
        $review_count = count($reviews);

        foreach ($reviews as $review){

            $total_rating = $total_rating + $review['rating'];
        }

        $average_rating = round($total_rating / $review_count,1);

        update_post_meta($course_id,'_total_reviews',$review_count);
        update_post_meta($course_id,'_average_rating',$average_rating);
    }
}
// কোর্সের মোট রিভিউ ও গড় রেটিং রিটার্ন করে।
function lessonlms_get_review_stats($course_id){
    $total_reviews = get_post_meta($course_id,'_total_reviews',true) ? : 0;
    $average_rating = get_post_meta($course_id,'_average_rating',true) ? : 0;

    return array(
        'total_reviews' => $total_reviews,
        'average_rating' => $average_rating
    );
}



// কোর্সের  সকল রিভিউ array রিটার্ন করে।
function lessonlms_get_course_reviews($course_id){

    return  get_post_meta($course_id, '_course_reviews', true) ? : array();
}



// Calling Ajax Enrollment Handler File
require_once('inc/ajax-enrollment-handler.php');













?>