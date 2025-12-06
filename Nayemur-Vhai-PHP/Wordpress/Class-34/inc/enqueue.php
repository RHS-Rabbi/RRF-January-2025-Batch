<?php

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

?>