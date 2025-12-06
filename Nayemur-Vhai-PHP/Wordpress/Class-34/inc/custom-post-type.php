<?php 

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

?>