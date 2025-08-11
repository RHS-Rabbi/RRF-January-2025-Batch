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
}
add_action('customize_register','lessonlms_customize_register_footer');



?>