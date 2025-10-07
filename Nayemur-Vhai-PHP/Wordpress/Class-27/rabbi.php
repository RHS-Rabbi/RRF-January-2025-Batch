<?php
// Add Meta Box
function lessonlms_add_course_metabox() {
    add_meta_box(
        'lessonlms_course_details',          // ID
        'Course Details',                    // Title
        'lessonlms_course_metabox_callback', // Callback
        'course',                            // Post type
        'normal',                            // Context
        'high'                               // Priority
    );
}
add_action('add_meta_boxes', 'lessonlms_add_course_metabox');

// Callback Function (fields render)
function lessonlms_course_metabox_callback($post) {
    // Add nonce for security
    wp_nonce_field('lessonlms_save_course_meta', 'lessonlms_course_meta_nonce');

    // Get saved values
    $duration        = get_post_meta($post->ID, 'course_duration', true);
    $last_update     = get_post_meta($post->ID, 'course_lastUpdate', true);
    $language        = get_post_meta($post->ID, 'course_instructor', true);
    $subtitle        = get_post_meta($post->ID, 'course_subtitle', true);
    ?>
    <p>
        <label for="course_duration"><strong>Course Duration:</strong></label><br>
        <input type="text" name="course_duration" id="course_duration"value="<?php echo esc_attr($duration); ?>" placeholder="e.g. 42 Hours" style="width:100%;" />
    </p>
    <p>
        <label for="course_lastUpdate"><strong>Course Last Updated:</strong></label><br>
        <input type="text" name="course_lastUpdate" id="course_lastUpdate"value="<?php echo esc_attr($last_update); ?>" placeholder="e.g. June 15, 2023" style="width:100%;" />
    </p>
    <p>
        <label for="course_instructor"><strong>Course Language:</strong></label><br>
        <input type="text" name="course_instructor" id="course_instructor"value="<?php echo esc_attr($language); ?>" placeholder="e.g. English" style="width:100%;" />
    </p>
    <p>
        <label for="course_subtitle"><strong>Course Subtitles:</strong></label><br>
        <input type="text" name="course_subtitle" id="course_subtitle" value="<?php echo esc_attr($subtitle); ?>" placeholder="e.g. English" style="width:100%;" />
    </p>
    <?php
}

// Save Data
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
add_action('save_post', 'lessonlms_save_course_meta');












































function lessonlms_add_course_metabox2(){
    add_meta_box(
        'lesson_course_info',
        'Who This Course is For',
        'lesson_course_metabox_callback2',
        'course',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes','lessonlms_add_course_metabox2');

function lesson_course_metabox_callback2($post){
    wp_nonce_field('lessonlms_save_course_meta2','lessonlms_course_meta_nonce2');

    $audience = get_post_meta($post->ID, 'course_audience', true);
    if (!is_array($audience)) $audience = [''];

    ?>
    <div id="audience-wrapper">
        <?php foreach ($audience as $index => $item): ?>
            <p>
                <input type="text" name="course_audience[<?php echo $index; ?>]" value="<?php echo esc_attr($item); ?>" style="width:90%;" />
                <button type="button" class="remove-row">Remove</button>
            </p>
        <?php endforeach; ?>
    </div>
    <button type="button" id="add-audience">+ Add Audience</button>

    <script>
        document.getElementById('add-audience').addEventListener('click', function(){
            let wrapper = document.getElementById('audience-wrapper');
            let index = wrapper.querySelectorAll('input').length;
            let html = `
                <p>
                    <input type="text" name="course_audience[${index}]" style="width:90%;" />
                    <button type="button" class="remove-row">Remove</button>
                </p>`;
            wrapper.insertAdjacentHTML('beforeend', html);
        });

        document.getElementById('audience-wrapper').addEventListener('click', function(e){
            if(e.target && e.target.classList.contains('remove-row')){
                e.target.parentElement.remove();
            }
        });
    </script>
    <?php
}

// Save function
function lessonlms_save_course_meta2($post_id){
    if (!isset($_POST['lessonlms_course_meta_nonce2']) ||
        !wp_verify_nonce($_POST['lessonlms_course_meta_nonce2'], 'lessonlms_save_course_meta2')) return;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['course_audience']) && is_array($_POST['course_audience'])) {
        // sanitize each input
        $audience = array_map('sanitize_text_field', $_POST['course_audience']);
        update_post_meta($post_id, 'course_audience', $audience);
    }
}