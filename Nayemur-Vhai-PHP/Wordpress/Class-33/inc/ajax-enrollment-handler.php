<?php
// ========================================
// 🔹 AJAX Handler: Course Enrollment
// ========================================

function lessonlms_handle_enrollment() {

    // 🔹 AJAX রিকোয়েস্ট থেকে কোর্স আইডি নেওয়া
    $course_id = isset($_POST['course_id']) ? intval($_POST['course_id']) : 0;

    // 🔹 কোর্স আইডি যাচাই করা
    if ( $course_id <= 0 ) {
        wp_send_json_error('Invalid course ID');
    }

    // 🔹 লগইন করা ইউজার আইডি পাওয়া
    $user_id = get_current_user_id();

    // 🔹 ইউজার লগইন না থাকলে error
    if ( $user_id == 0 ) {
        wp_send_json_error('Please log in to enroll in the course.');
    }

    // 🔹 কোর্সে কতজন এনরোল করেছে সেটা নেওয়া
    $current_enrolled = get_post_meta( $course_id, '_enrolled_students', true ) ?: 0;

    // 🔹 নতুন এনরোল সংখ্যা
    $new_count = intval( $current_enrolled ) + 1;

    // 🔹 এনরোল সংখ্যা আপডেট করা
    update_post_meta( $course_id, '_enrolled_students', $new_count );

    // 🔹 ইউজারের আগের এনরোলমেন্ট নেওয়া
    $user_enrollments = get_user_meta( $user_id, '_user_enrollements', true );

    if ( !is_array( $user_enrollments ) ) {
        $user_enrollments = array();
    }

    // 🔹 নতুন এনরোলমেন্ট যুক্ত করা
    $user_enrollments[] = array(
        'course_id' => $course_id,
        'date' => current_time('mysql'),
    );

    // 🔹 ইউজারের এনরোলমেন্ট ডেটা আপডেট করা
    update_user_meta( $user_id, '_user_enrollements', $user_enrollments );

    // 🔹 সব ঠিক থাকলে success JSON পাঠানো
    wp_send_json_success(array(
        'message' => 'Enrollment successful!',
        'new_count' => $new_count
    ));
}

add_action('wp_ajax_lessonlms_enroll_course', 'lessonlms_handle_enrollment');
add_action('wp_ajax_nopriv_lessonlms_enroll_course', 'lessonlms_handle_enrollment');


// ========================================
// 🔹 Add AJAX Script URL in Head
// ========================================
function lessonlms_ajax_scripts() {
    ?>
    <script type="text/javascript">
        var ajax_object = {
            ajax_url: "<?php echo admin_url('admin-ajax.php'); ?>"
        };
    </script>
    <?php
}
add_action('wp_head','lessonlms_ajax_scripts');


// ========================================
// 🔹 Dashboard Widget: Enrollment Overview
// ========================================
function lessonlms_dashboard_enrolled_widgets() {
    global $wpdb;

    // 🔹 মোট এনরোল সংখ্যা
    $total_enrollments = $wpdb->get_var("
        SELECT SUM(meta_value + 0)
        FROM $wpdb->postmeta
        WHERE meta_key = '_enrolled_students'
    ");

    // 🔹 সাম্প্রতিক এনরোলমেন্ট আনা
    $recent_enrollments = $wpdb->get_results("
        SELECT u.user_login, p.post_title
        FROM $wpdb->usermeta um
        JOIN $wpdb->users u ON u.ID = um.user_id
        JOIN $wpdb->posts p ON p.ID = (
            SELECT course_id FROM (
                SELECT meta_value AS data
                FROM $wpdb->usermeta
                WHERE umeta_id = um.umeta_id
            ) tmp, JSON_TABLE(tmp.data, '$[*]' COLUMNS(course_id INT PATH '$.course_id')) jt
            LIMIT 1
        )
        WHERE um.meta_key = '_user_enrollements'
        ORDER BY um.umeta_id DESC
        LIMIT 5
    ");

    ?>
    <div class="enrollment-dashboard-widget">
        <h3> Enrollment Status</h3>

        <div class="enrollment-stats" style="margin-bottom:10px;">
            <div class="stat-item" style="font-size:18px;">
                <span class="stat-number" style="font-weight:bold;">
                    <?php echo number_format( $total_enrollments ?: 0 ); ?>
                </span>
                <span class="stat-label">Total Enrollments</span>
            </div>
        </div>

        <?php if ( $recent_enrollments ) : ?>
            <div class="recent-enrollment">
                <h4> Last Enrollments</h4>
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


// ========================================
// 🔹 Register Dashboard Widget
// ========================================
function lessonlms_register_dashboard_widget() {
    wp_add_dashboard_widget(
        'lessonlms_dashboard_widget',
        'LessonLMS Enrollments Overview',
        'lessonlms_dashboard_enrolled_widgets'
    );
}
add_action( 'wp_dashboard_setup', 'lessonlms_register_dashboard_widget' );

?>
