<?php
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


?>