<?php
// ------------------- Add Meta Box for Course Details -------------------
function lessonlms_add_course_metabox1() {
    add_meta_box(
        'lessonlms_course_details',          // ID
        'Course Details',                    // Title
        'lessonlms_course_metabox_callback', // Callback
        'course',                            // Post type
        'normal',                            // Context
        'high'                               // Priority
    );
}
add_action('add_meta_boxes', 'lessonlms_add_course_metabox1');

// Callback Function (fields render)
function lessonlms_course_metabox_callback($post) {
    // Add nonce for security
    wp_nonce_field('lessonlms_save_course_meta', 'lessonlms_course_meta_nonce');

    // Get saved values
    $duration    = get_post_meta($post->ID, 'course_duration', true);
    $last_update = get_post_meta($post->ID, 'course_lastUpdate', true);
    $language    = get_post_meta($post->ID, 'course_instructor', true);
    $subtitle    = get_post_meta($post->ID, 'course_subtitle', true);
    ?>
    <p>
        <label for="course_duration"><strong>Course Duration:</strong></label><br>
        <input type="text" name="course_duration" id="course_duration" value="<?php echo esc_attr($duration); ?>" placeholder="e.g. 42 Hours" style="width:100%;" />
    </p>
    <p>
        <label for="course_lastUpdate"><strong>Course Last Updated:</strong></label><br>
        <input type="text" name="course_lastUpdate" id="course_lastUpdate" value="<?php echo esc_attr($last_update); ?>" placeholder="e.g. June 15, 2023" style="width:100%;" />
    </p>
    <p>
        <label for="course_instructor"><strong>Course Language:</strong></label><br>
        <input type="text" name="course_instructor" id="course_instructor" value="<?php echo esc_attr($language); ?>" placeholder="e.g. English" style="width:100%;" />
    </p>
    <p>
        <label for="course_subtitle"><strong>Course Subtitles:</strong></label><br>
        <input type="text" name="course_subtitle" id="course_subtitle" value="<?php echo esc_attr($subtitle); ?>" placeholder="e.g. English" style="width:100%;" />
    </p>
    <p>
        <label for="course_subtitle"><strong>Name:</strong></label><br>
        <input type="text" name="course_subtitle" id="course_subtitle" value="<?php echo esc_attr($subtitle); ?>" placeholder="e.g. English" style="width:100%;" />
    </p>
    <?php
}

// Save Data for Course Details
function lessonlms_save_course_meta($post_id) {
    // Verify nonce
    if (!isset($_POST['lessonlms_course_meta_nonce']) || 
        !wp_verify_nonce($_POST['lessonlms_course_meta_nonce'], 'lessonlms_save_course_meta')) {
        return;
    }

    // Prevent autosave override
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // Check user permissions
    if (!current_user_can('edit_post', $post_id)) return;

    // Save fields
    if (isset($_POST['course_duration'])) {
        update_post_meta($post_id, 'course_duration', sanitize_text_field($_POST['course_duration']));
    }
    if (isset($_POST['course_lastUpdate'])) {
        update_post_meta($post_id, 'course_lastUpdate', sanitize_text_field($_POST['course_lastUpdate']));
    }
    if (isset($_POST['course_instructor'])) {
        update_post_meta($post_id, 'course_instructor', sanitize_text_field($_POST['course_instructor']));
    }
    if (isset($_POST['course_subtitle'])) {
        update_post_meta($post_id, 'course_subtitle', sanitize_text_field($_POST['course_subtitle']));
    }
}
add_action('save_post_course', 'lessonlms_save_course_meta');





// ------------------- Add Meta Box For Audience Info -------------------


// ------------------- Add Meta Box For services-infos -------------------
function lessonlms_add_course_metabox3(){
    add_meta_box(
        'services_details',
        'Service Details',
        'lessonlms_service_details_metabox_callback',
        'course',
        'normal',
        'high'
    );

}
add_action('add_meta_boxes','lessonlms_add_course_metabox3');

function lessonlms_service_details_metabox_callback($post){

    $price = get_post_meta(get_the_ID(),'price',true);

    ?>
        <div>
            <label for="servie_price">Service Price:</label>
            <input type="number" name="servie_price" value="<?php echo esc_attr($price); ?>">
        </div>

    <?php
}

function lessonlms_save_course_meta3($post_id){
    $fields = array(
        'price'
    );
    foreach ($fields as $field) {
        if(isset($_POST[$field])){
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post_course','lessonlms_save_course_meta3');
