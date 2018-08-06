
<?php
/*
===========================================================================================================
Fervent - functions.php
===========================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files for a 
theme. This functions.php template file allows you to add features and functionality to a WordPress theme 
which is stored in the theme's root directory in the theme folder.

@package        Fervent WordPress Theme
@copyright      Copyright (C) 2018. Benjamin Lu
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://fervent.com/)
===========================================================================================================
*/
/*
===========================================================================================================
Table of Content
===========================================================================================================
 1.0 - Theme Setup
 2.0 - Enqueue Scripts and Styles
 3.0 - Content Width
 4.0 - Register Sidebars
 5.0 - Required Files
===========================================================================================================
*/
/*
===========================================================================================================
 1.0 - Theme Setup
===========================================================================================================
*/
function fervent_theme_setup() {
    /*
    =======================================================================================================
    Enable and activate register_nav_menus(); for Fervent WordPress theme. This feature when enabled,
    you can create a Primary Navigation, Secondary Navigation, and Social Navigation menus in the dashboard
    under menus.
    =======================================================================================================
    */   
    register_nav_menus(array(
        'primary-navigation'    => esc_html__('Primary Navigation', 'fervent'),
        'secondary-navigation'  => esc_html__('Secondary Navigation', 'fervent'),
        'social-navigation'     => esc_html__('Social Navigation', 'fervent')
    ));
}
add_action('after_setup_theme', 'fervent_theme_setup');
/*
===========================================================================================================
 2.0 - Enqueue Scripts and Styles
===========================================================================================================
*/
function fervent_enqueue_scripts_and_styles_setup() {
    /*
    =======================================================================================================
    Enable and activate the main stylesheet and custom stylesheet if available for Fervent WordPress theme. 
    The main stylesheet should be enqueued rather than using @import. The other custom stylesheet is theme 
    normalize.css that is to makes browsers render all elements more consistently and in line with modern 
    standards. It is precisly targets only the styles that needs normalizing.
    =======================================================================================================
    */
    wp_enqueue_style('fervent-style', get_stylesheet_uri());
    wp_enqueue_style('fervent-normalize', get_template_directory_uri() . '/css/normalize.css', '08012018', true);

    /*
    =======================================================================================================
    Enable and activate Google Fonts (Sanchez and Merriweather Sans) locally for fervent. For more 
    information regarding this feature, please go the following url to begin the awesomeness of Google 
    WebFonts Helper (https://google-webfonts-helper.herokuapp.com/fonts)
    =======================================================================================================
    */
    wp_enqueue_style('fervent-local-fonts', get_template_directory_uri() . '/extras/fonts/custom-fonts.css', '08012018', true);
    
    /*
    =======================================================================================================
    Enable and activate Font Awesome 4.7 locally for fervent. For more information about Font Awesome, 
    please navigate to the URL for more information. (http://fontawesome.io/)
    =======================================================================================================
    */
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/extras/font-awesome/css/font-awesome.css', '08012018', true);

    /*
    =======================================================================================================
    Enable and activate JavaScript/JQuery to support Navigation for Primary Navigation for fervent. This 
    allows you to use click feature for dropdowns and multiple depths, When using this new feature of the 
    navigation. The Menu for mobile side is now at the bottom of the page.
    =======================================================================================================
    */
    wp_enqueue_script('fervent-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '08012018', true);
	wp_localize_script('fervent-navigation', 'ferventScreenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . esc_html__('expand child menu', 'fervent') . '</span>',
		'collapse' => '<span class="screen-reader-text">' . esc_html__('collapse child menu', 'fervent') . '</span>',
    ));
}
add_action('wp_enqueue_scripts', 'fervent_enqueue_scripts_and_styles_setup');
/*
===========================================================================================================
 3.0 - Content Width
===========================================================================================================
*/
function fervent_content_width_setup() {
    
}
add_action('after_setup_theme', 'fervent_content_width_setup', 0);
/*
===========================================================================================================
 4.0 - Register Sidebars
===========================================================================================================
*/
function fervent_register_sidebars_setup() {
    
}
add_action('widgets_init', 'fervent_register_sidebars_setup');
/*
===========================================================================================================
 5.0 - Required Files
===========================================================================================================
*/