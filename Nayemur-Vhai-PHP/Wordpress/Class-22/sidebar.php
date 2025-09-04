<div class="sidebar-area">
    <div class="search-box">
        <h5><?php _e('Search','lessonlms'); ?></h5>
        <form class="search-form  w-full" action="<?php echo esc_url(home_url('/')); ?>" role="search" method="get">
            <input type="search" name="s" id="search" placeholder="<?php esc_attr_e('Search...','lessonlms'); ?>" value="<?php echo get_search_query(); ?>" required>
            <button class="cursor-pointer" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
    <div class="recent-post">
        <h5>Recent posts</h5>
        <div class="flex flex-col gap-5">
            <?php 
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 4, 
                    'post_status' => 'publish',
                    'orderby' => 'rand',
                ));
            ?>
            <?php foreach ($recent_posts as $post ) : ?>
                <div class="single-recent-list">
                    <a href="<?php echo the_permalink($post['ID']); ?>"><?php echo esc_html($post['post_title']); ?></a>
                    <p><?php echo get_the_date('M d, Y',$post['ID']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="category-list">
        <h5><?php _e('Categories','lessonlms') ?></h5>
        <ul>
            <?php
                wp_list_categories(array(
                    'title_li' => '',
                    'show_count' => true,
                )); 
            ?>
        </ul>
    </div>
    <div class="tags-list">
        <h5><?php _e('Tags','lessonlms') ?></h5>
        <ul>
            <?php 
                wp_tag_cloud(array(
                    'smallest' => 12,
                    'largest' => 12,
                    'unit' => 'px',
                    'number' => 10,
                    'format' => 'flat',
                ));
            ?>
        </ul>
</div>