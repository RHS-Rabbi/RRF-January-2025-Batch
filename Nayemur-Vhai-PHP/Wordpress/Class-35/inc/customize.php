<?php

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

?>