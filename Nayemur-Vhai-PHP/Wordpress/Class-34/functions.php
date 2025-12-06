<?php

// Enqueue scripts and style

use function PHPSTORM_META\type;

/*-------------- lessonlms_theme_scripts--------------------- */
require_once('inc/enqueue.php');

/* ---------------lessonlms_theme_registration----------------*/
require_once('inc/setup.php');


/*------------ lessonlms_customize_register---------------------*/
require_once('inc/customize.php');

/*------------------- lessonlms_register_sidebar--------------------*/
require_once('inc/sidebar.php');

/*-----------------lessonlms_custom_post-------------------------- */
require_once('inc/custom-post-type.php');

/*----------------service-meta-box--------------------- */
require_once('inc/service-meta-box.php');

/*---------------------------Calling Ajax Enrollment Handler File----------------- */
require_once('inc/ajax-enrollment-handler.php');













?>