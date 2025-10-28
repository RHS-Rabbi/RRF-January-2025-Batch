<?php 
    $hero_two_title = get_theme_mod('hero_two_title','Take the next step toward your personal and professional goals with Lesson.');
    $hero_two_description = get_theme_mod('hero_two_description','Take the next step toward. Join now to receive personalized  and more recommendations from the full Coursera catalog.');
    $hero_two_button_text = get_theme_mod('hero_two_button_text','Join Now');
    $hero_two_button_url = get_theme_mod('hero_two_button_url','#');
    $hero_two_image = get_theme_mod('hero_two_image',get_template_directory_uri() . '/assets/img/hero-2.png');


?>

<section class="herotwo-area">
    <div class="container">
        <div class="flex flex-col md:flex-row justify-between gap-8 ">
            <div class="herotwo-left">
                <div class="herotwo-left-content">
                    <h3><?php echo esc_html($hero_two_title); ?></h3>
                    <p><?php echo esc_html($hero_two_description); ?></p>
                </div>
                <div class="flex">
                    <a href="<?php echo esc_url($hero_two_button_url); ?>" class="heroleft-btn"><?php echo esc_html($hero_two_button_text); ?></a>
                </div>
            </div>
            <div class="herotwo-right">
                <div class="herotwo-bg">
                    <?php if ($hero_two_image) : ?>
                        <img src="<?php echo esc_url($hero_two_image); ?>" alt="Hero Two Image">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>