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
function lessonlms_add_course_metabox2(){
    add_meta_box(
        'audience_details',
        'Who This Course Is For',
        'lessonlms_audience_details_metabox_callback',
        'course',
        'normal',
        'high'
    );

}
add_action('add_meta_boxes','lessonlms_add_course_metabox2');

function lessonlms_audience_details_metabox_callback($post) {

    // Meta get
    $audience_1 = get_post_meta($post->ID, 'audience_1', true);
    $audience_2 = get_post_meta($post->ID, 'audience_2', true);
    $audience_3 = get_post_meta($post->ID, 'audience_3', true);
    $audience_4 = get_post_meta($post->ID, 'audience_4', true);

    ?>
        <div>
            <p>
                <label for="audience_1"><strong>Audience 1:</strong></label><br>
                <input type="text" name="audience_1" value="<?php echo esc_attr($audience_1); ?>" style="width:100%;">
            </p>

            <p>
                <label for="audience_2"><strong>Audience 2:</strong></label><br>
                <input type="text" name="audience_2" value="<?php echo esc_attr($audience_2); ?>" style="width:100%;">
            </p>

            <p>
                <label for="audience_3"><strong>Audience 3:</strong></label><br>
                <input type="text" name="audience_3" value="<?php echo esc_attr($audience_3); ?>" style="width:100%;">
            </p>

            <p>
                <label for="audience_4"><strong>Audience 4:</strong></label><br>
                <input type="text" name="audience_4" value="<?php echo esc_attr($audience_4); ?>" style="width:100%;">
            </p>
        </div>
    <?php
}

function lessonlms_save_course_meta2($post_id){
    $caourses = array('audience_1', 'audience_2','audience_3','audience_4');

    foreach ($caourses as $course) {
        if (isset($_POST[$course])) {
            update_post_meta($post_id, $course, sanitize_text_field($_POST[$course]));
        }
    }
}
add_action('save_post_course','lessonlms_save_course_meta2');


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

    $price = get_post_meta($post->ID, 'price', true);
    $orginal_price = get_post_meta($post->ID, 'orginal_price', true);
    $video_hours = get_post_meta($post->ID, 'video_hours', true);
    $artical_counts = get_post_meta($post->ID, 'artical_counts', true);
    $downloadable_resource = get_post_meta($post->ID, 'downloadable_resource', true);
    $membership_duration = get_post_meta($post->ID, 'membership_duration', true);
    $supported_devices = get_post_meta($post->ID, 'supported_devices', true);
    $completion_certificate = get_post_meta($post->ID, 'completion_certificate', true);

    ?>
        <div>
            <p>
                <label for="price">Service Price:</label>
                <input type="number" step="0.01" name="price" value="<?php echo esc_attr($price); ?>">
            </p>
            <p>
                <label for="orginal_price">Original Price:</label>
                <input type="number" step="0.01" name="orginal_price" value="<?php echo esc_attr($orginal_price); ?>">
            </p>
            <p>
                <label for="video_hours">Video Hours:</label>
                <input type="number" step="0.01" name="video_hours" value="<?php echo esc_attr($video_hours); ?>">
            </p>
            <p>
                <label for="artical_counts">Artical Counts:</label>
                <input type="number" name="artical_counts" value="<?php echo esc_attr($artical_counts); ?>">
            </p>
            <p>
                <label for="downloadable_resource">Downloadable Resource:</label>
                <input type="number" name="downloadable_resource" value="<?php echo esc_attr($downloadable_resource); ?>">
            </p>
            <p>
                <label for="membership_duration">Membership Duration:</label>
                <input type="text" name="membership_duration" value="<?php echo esc_attr($membership_duration); ?>">
            </p>
            <p>
                <label for="supported_devices">Supported Devices:</label>
                <input type="text" name="supported_devices" value="<?php echo esc_attr($supported_devices); ?>">
            </p>
            <p>
                <label for="supported_devices">Completion Certificate:</label>
                <input type="text" name="completion_certificate" value="<?php echo esc_attr($completion_certificate); ?>">
            </p>
        </div>
    <?php
}

function lessonlms_save_course_meta3($post_id){
    $fields = array('price', 'orginal_price','video_hours'
    ,'artical_counts','downloadable_resource','membership_duration','supported_devices','completion_certificate');

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post_course','lessonlms_save_course_meta3');

