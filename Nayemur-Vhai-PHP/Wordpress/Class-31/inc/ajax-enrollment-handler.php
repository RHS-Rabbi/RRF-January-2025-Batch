<?php
// ===============================
// AJAX হ্যান্ডলার ফাংশন: কোর্স এনরোলমেন্টের জন্য
// ===============================
function lessonlms_handle_enrollment(){

    // 🔹 AJAX রিকোয়েস্ট থেকে কোর্স আইডি নেওয়া
    $course_id = isset($_POST['course_id']) ? intval($_POST['course_id']) : 0;

    // 🔹 কোর্স আইডি যাচাই করা (ভুল হলে error রেসপন্স)
    if( $course_id <= 0 ){
        wp_send_json_error('Invalid course ID');
    }

    // 🔹 বর্তমানে লগইন করা ইউজারের আইডি পাওয়া
    $user_id = get_current_user_id();

    // 🔹 ইউজার লগইন না থাকলে error রেসপন্স পাঠানো
    if( $user_id == 0 ){
        wp_send_json_error('Please log in to enroll in the course.');
    }

    // 🔹 কোর্সে ইতিমধ্যে কতজন এনরোল করেছে সেটা নেওয়া
    $current_enrolled = get_post_meta($course_id, '_enrolled_students', true) ?: 0;

    // 🔹 নতুন এনরোল সংখ্যা গণনা
    $new_count = intval($current_enrolled) + 1;

    // 🔹 কোর্সের এনরোল সংখ্যা আপডেট করা
    update_post_meta($course_id, '_enrolled_students', $new_count);

    // 🔹 ইউজারের আগের এনরোল করা কোর্সগুলোর তথ্য নেওয়া
    $user_enrollments = get_user_meta($user_id, '_user_enrollements', true);

    // 🔹 যদি কিছু না থাকে তাহলে নতুন অ্যারে তৈরি করা
    if( !is_array($user_enrollments) ){
        $user_enrollments = array();
    }

    // 🔹 নতুন এনরোলমেন্ট যুক্ত করা (কোর্স আইডি ও তারিখসহ)
    $user_enrollments[] = array(
        'course_id' => $course_id,
        'date' => current_time('mysql'),
    );

    // 🔹 ইউজারের আপডেট করা এনরোলমেন্ট ডেটা ডাটাবেজে সংরক্ষণ করা
    $formatted_count = update_user_meta($user_id, '_user_enrollements', $user_enrollments);

    // 🔹 সংখ্যা ফরম্যাট করার চেষ্টা (কোনো কাজে লাগছে না)
    number_format($new_count);

    // 🔹 সবকিছু ঠিক থাকলে success JSON রেসপন্স পাঠানো
    wp_send_json_success($formatted_count);
}

// ===============================
// AJAX অ্যাকশন রেজিস্টার করা
// ===============================

// 🔹 লগইন করা ইউজারদের জন্য
add_action('wp_ajax_lessonlms_enroll_course', 'lessonlms_handle_enrollment');

// 🔹 লগইন না করা ইউজারদের জন্য
add_action('wp_ajax_nopriv_lessonlms_enroll_course', 'lessonlms_handle_enrollment');




function lessonlms_ajax_scripts(){
    ?>
        <script type="text/javascript">
            var ajax_object = {
                ajax_url: "<?php echo admin_url('admin-ajax.php'); ?>"
            }
        </script>

    <?php
}
add_action('wp_head','lessonlms_ajax_scripts');



// =====================================
// 🔹 Function to Register Dashboard Widget
// =====================================

function lessonlms_dashboard_enrolled_widgets() {

    // 🔹 WordPress ডাটাবেজ অবজেক্ট নিয়ে আসা
    global $wpdb;

    // 🔹 মোট এনরোল সংখ্যা বের করা
    $total_enrollments = $wpdb->get_var("
        SELECT SUM(meta_value)
        FROM $wpdb->postmeta
        WHERE meta_key = '_enrolled_students'
    ");

    // 🔹 সাম্প্রতিক এনরোলমেন্ট ডেটা আনা
    $recent_enrollments = $wpdb->get_results("
        SELECT u.user_login, p.post_title
        FROM $wpdb->usermeta um
        JOIN $wpdb->users u ON u.ID = um.user_id
        JOIN $wpdb->posts p ON p.ID = p.ID
        WHERE um.meta_key = '_user_enrollements'
        ORDER BY um.umeta_id DESC
        LIMIT 5
    ");

    ?>
    <div class="enrollment-dashboard-widget">
        <h3>Enrollment Status</h3>

        <div class="enrollment-stats">
            <div class="stat-item">
                <!-- 🔹 মোট এনরোল সংখ্যা দেখানো -->
                <span class="stat-number">
                    <?php echo number_format( $total_enrollments ?: 0 ); ?>
                </span>
                <span class="stat-label">Total Enrollments</span>
            </div>
        </div>

        <!-- 🔹 সাম্প্রতিক এনরোলমেন্ট লিস্ট -->
        <?php if ( $recent_enrollments ) : ?>
            <div class="recent-enrollment">
                <h4>Last Enrollments</h4>
                <ul>
                    <?php foreach ( $recent_enrollments as $enrollment ) : ?>
                        <li>
                            <strong><?php echo esc_html( $enrollment->user_login ); ?></strong>
                            – <?php echo esc_html( $enrollment->post_title ); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php else: ?>
            <p>No recent enrollments found.</p>
        <?php endif; ?>
    </div>
    <?php
}


// =====================================
// 🔹 Register the Dashboard Widget
// =====================================
function lessonlms_register_dashboard_widget() {
    wp_add_dashboard_widget(
        'lessonlms_dashboard_widget',        // Widget ID
        'LessonLMS Enrollments Overview',    // Widget Title
        'lessonlms_dashboard_enrolled_widgets' // Display Callback
    );
}
add_action( 'wp_dashboard_setup', 'lessonlms_register_dashboard_widget' );


?>