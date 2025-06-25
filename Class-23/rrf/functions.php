<?php

function my_theme_enqueue_styles() {
    // Enqueue style.css from the theme root
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Enqueue output.css from the assets folder
    wp_enqueue_style('output-style', get_template_directory_uri() . '/assets/output.css', array(), null);

    wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');


    wp_enqueue_script('jquery-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true);

    // Slick Carousel JS from CDN
    wp_enqueue_script('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery-cdn'), '1.8.1', true);

    // Main.js (local file in theme root)
    wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', array('jquery-cdn'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');



?>