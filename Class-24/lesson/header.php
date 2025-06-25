<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson</title>

    <?php wp_head();?>
</head>
<body class="font-Poppins">

    <!-- Header Area -->
    <Header class="header-area">
        <div class="container">
            <div class="flex flex-col md:flex-row md:justify-between items-center md:gap-3">
                <div class="md:w-21.25">
                    <a  href="#" class="site-logo">
                        <img class="object-cover w-21.25" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo-png">
                    </a>
                </div>
                <div class="w-">
                    <nav class="mainmenu flex flex-col md:flex-row items-center md:gap-[70px] rrf-menu">
                        <!-- <ul class="flex flex-col md:flex-row md:gap-[42px] gap-5">
                            <li><a class="active" href="#">Home</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Reviews</a></li>
                        </ul>
                        <div class="header-btn">
                            <a href="#">Sign Up</a>
                        </div> -->
                        <?php
                            wp_nav_menu( [
                                'theme_location' => 'primary'
                            ] );
                        
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </Header>