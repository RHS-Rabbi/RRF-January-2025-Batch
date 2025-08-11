<?php

// Enqueue scripts and style
function lessonlms_theme_scripts(){
    // Theme Style-Css
    wp_enqueue_style('style-css', get_template_directory_uri() . './style.css');
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css',array(),'1.9.0');

    // Theme Js Style

    // jQuery
    wp_enqueue_script('jQuery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(),'3.7.1');

    // Slick Carousel
    wp_enqueue_script('slick-carousel','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',array(),'1.9.0');

    // Main Js
    wp_enqueue_script('main-js', get_template_directory_uri() . './main.js');


}
add_action("wp_enqueue_scripts","lessonlms_theme_scripts");



function lessonlms_theme_registration(){
    // For Custom Logo
    add_theme_support('custom-logo',array(
        'height' => 30,
        'width' => 80,
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
function lessonlms_customize_register_footer($wp_customize){
    
    $wp_customize->add_section('footer_settings', array(
        'title' => __('Footer Setting','lessonlms'),
        'priority' =>120,
    ));

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
add_action('customize_register','lessonlms_customize_register_footer');



?>