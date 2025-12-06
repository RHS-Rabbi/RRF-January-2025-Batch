<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class('font-Poppins'); ?>>
    <!-- Header Area -->
    <header class="header-area py-4">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <?php if(has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <div class="w-[85px]">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                            <img class="object-cover w-full" src="<?php echo get_template_directory_uri(); ?>./assets/img/logo.png" alt="<?php esc_attr(get_bloginfo('name')); ?>">
                        </a>
                    </div>
                <?php endif; ?>
                <!-- Hamburger Icon for Mobile -->
                <div class="lg:hidden">
                    <button id="menu-toggle" class="text-gray-800 focus:outline-none cursor-pointer">
                        <!-- Hamburger Icon -->
                        <svg id="menu-open-icon" class="w-6 h-6 block" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>

                        <!-- Close Icon -->
                        <svg id="menu-close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Desktop Nav -->
                <nav class="mainmenu hidden md:hidden flex-row items-center gap-[70px] lg:flex">
                    <!-- Register menu Dynamic -->
                    <?php wp_nav_menu(array(
                        'theme_location' => 'primary_menu',  
                    )) ?>
                    <div class="header-btn">
                        <a href="#" class="btn">Sign Up</a>
                    </div>
                </nav>
            </div>
            <!-- Mobile Nav (Hidden by Default) -->
            <div id="mobile-menu" class="mainmenu-mobile lg:hidden hidden mt-4">
                <ul>
                    <!-- Register menu Dynamic -->
                    <?php wp_nav_menu(array(
                        'theme_location' => 'mobile_menu',  
                    )) ?>
                    
                    <li>
                        <div class="header-btn">
                            <a href="#" class="btn">Sign Up</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>