    <!-- Footer Area -->
    <footer class="footer-area">
        <div class="container">
            <div class="flex flex-col md:flex-row justify-between gap-8 border-b-1 border-[#59554B]">
                <div class="lg:w-66.75 md:w-4/12">
                    <div class="single-footer1">
                        <div class="single-footer-list1">
                            <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>">
                                <?php if(get_theme_mod('footer_logo')) : ?>
                                    <img src="<?php echo esc_url(get_theme_mod('footer_logo')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                                <?php endif; ?>
                            </a>
                            <p><?php echo get_theme_mod('footer_about_text'); ?></p>
                            <ul class="footer-social flex gap-4">
                                <li>
                                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('footer_twitter_link','#')); ?>">
                                        <svg fill="#FFFFFF" class="size-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z"/></svg>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('footer_facebook_link','#')); ?>">
                                        <svg fill="#FFFFFF" class="size-5" viewBox="0 0 24 24" id="facebook" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color"><path id="primary" d="M14,6h3a1,1,0,0,0,1-1V3a1,1,0,0,0-1-1H14A5,5,0,0,0,9,7v3H7a1,1,0,0,0-1,1v2a1,1,0,0,0,1,1H9v7a1,1,0,0,0,1,1h2a1,1,0,0,0,1-1V14h2.22a1,1,0,0,0,1-.76l.5-2a1,1,0,0,0-1-1.24H13V7A1,1,0,0,1,14,6Z" style="fill: #FFFFFF;"></path></svg>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('footer_linkedin_link','#')); ?>">
                                        <svg fill="#ffffff" class="size-5" viewBox="-2 -2 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-linkedin"><path d='M19.959 11.719v7.379h-4.278v-6.885c0-1.73-.619-2.91-2.167-2.91-1.182 0-1.886.796-2.195 1.565-.113.275-.142.658-.142 1.043v7.187h-4.28s.058-11.66 0-12.869h4.28v1.824l-.028.042h.028v-.042c.568-.875 1.583-2.126 3.856-2.126 2.815 0 4.926 1.84 4.926 5.792zM2.421.026C.958.026 0 .986 0 2.249c0 1.235.93 2.224 2.365 2.224h.028c1.493 0 2.42-.989 2.42-2.224C4.787.986 3.887.026 2.422.026zM.254 19.098h4.278V6.229H.254v12.869z' /></svg>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('footer_instagram_link','#')); ?>">
                                        <svg fill="#FFFFFF" class="size-5" viewBox="-2 -2 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-instagram"><path d='M14.017 0h-8.07A5.954 5.954 0 0 0 0 5.948v8.07a5.954 5.954 0 0 0 5.948 5.947h8.07a5.954 5.954 0 0 0 5.947-5.948v-8.07A5.954 5.954 0 0 0 14.017 0zm3.94 14.017a3.94 3.94 0 0 1-3.94 3.94h-8.07a3.94 3.94 0 0 1-3.939-3.94v-8.07a3.94 3.94 0 0 1 3.94-3.939h8.07a3.94 3.94 0 0 1 3.939 3.94v8.07z'/><path d='M9.982 4.819A5.17 5.17 0 0 0 4.82 9.982a5.17 5.17 0 0 0 5.163 5.164 5.17 5.17 0 0 0 5.164-5.164A5.17 5.17 0 0 0 9.982 4.82zm0 8.319a3.155 3.155 0 1 1 0-6.31 3.155 3.155 0 0 1 0 6.31z'/><circle cx='15.156' cy='4.858' r='1.237'/></svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="lg:w-32.5 md:w-2/12">
                    <div class="single-footer-list">
                        <div class="footer-title">
                            <h4><?php echo esc_html(get_theme_mod('footer_menu_1_title')); ?></h4>
                            <div class="footer-divider"></div>
                        </div>
                        <div class="footer-link">
                            <?php wp_nav_menu(array(
                                'theme_location' => 'footer_menu_1'
                            )); ?>
                        </div>
                    </div>
                </div>
                <div class="single-footer3 lg:w-34.25 md:w-2/12">
                    <div class="single-footer-list">
                         <div class="footer-title">
                            <h4><?php echo esc_html(get_theme_mod('footer_menu_2_title')); ?></h4>
                            <div class="footer-divider"></div>
                        </div>
                        <div class="footer-link">
                           <?php wp_nav_menu(array(
                                'theme_location' => 'footer_menu_2'
                            )); ?>
                            
                        </div>
                    </div>
                </div>
                <div class="single-footer4 lg:w-57.75 md:w-4/12">
                    <div class="single-footer-list">
                         <div class="footer-title">
                            <h4><?php echo esc_html(get_theme_mod('footer_menu_3_title')); ?></h4>
                            <div class="footer-divider"></div>
                        </div>
                        <div class="footer-data">
                            <a href="#" class="footer-add">
                                <span><?php echo esc_html(get_theme_mod('footer_location')); ?></span> <?php echo esc_html(get_theme_mod('footer_location_description')); ?>
                            </a>
                            <a href="#" class="footer-add">
                                <span><?php echo esc_html(get_theme_mod('footer_title_email')); ?></span> <?php echo esc_html(get_theme_mod('footer_email')); ?>
                            </a>
                            <a href="#" class="footer-add">
                                <span><?php echo esc_html(get_theme_mod('footer_title_phone')); ?></span> <?php echo esc_html(get_theme_mod('footer_phone')); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_template_part('sections/cta'); ?>
        </div>
    </footer>

    
    
    <?php wp_footer(); ?>
</body>
</html>