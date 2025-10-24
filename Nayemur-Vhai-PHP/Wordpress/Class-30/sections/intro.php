<?php
$intro_title = get_theme_mod('intro_title', 'Learner outcomes through our awesome platform');
$intro_description = get_theme_mod('intro_description', '87% of people learning for professional development report career benefits like getting a promotion, a raise, or starting a new career.');
$intro_description_2 = get_theme_mod('intro_description_2', 'Lesson Impact Report (2022)');
$intro_button_text = get_theme_mod('intro_button_text', 'Sign Up');
$intro_button_url = get_theme_mod('intro_button_url', '#');
$intro_bg_1_image = get_theme_mod('intro_bg_1_image');
$intro_bg_2_image = get_theme_mod('intro_bg_2_image');


?>



<section class="intro-area">
    <div class="container">
        <div class="flex flex-col md:flex-row  justify-between md:-mx-5 lg:-mx-0 gap-10">
            <div class="lg:max-w-142.5 md:w-6/12 md:px-5 lg:px-0">
                <div class="intro-left flex">
                    <div class="intro-bg1">
                        <?php  if($intro_bg_1_image) :?>
                            <img src="<?php echo esc_url($intro_bg_1_image); ?>" alt="Intro Image One">
                        <?php endif; ?>
                    </div>
                    <div class="intro-bg2">
                        <?php  if($intro_bg_2_image) :?>
                            <img src="<?php echo esc_url($intro_bg_2_image); ?>" alt="Intro Image One">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="lg:max-w-117.5 md:w-6/12">
                <div class="intro-right">
                    <div class="intro-content">
                        <h3><?php echo esc_html($intro_title); ?></h3>
                        <p><?php echo esc_html($intro_description); ?></p>
                        <p><?php echo esc_html($intro_description_2); ?></p>
                    </div>
                    <a class="intro-btn" href="<?php echo esc_url($intro_button_url); ?>"><?php echo esc_html($intro_button_text); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>