
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
    Enable and activate add_theme_support('title-tag); for fervent WordPress Theme. This feature should be 
    used in place instead of wp_title() function. 
    =======================================================================================================
    */
    add_theme_support('title-tag');
    /*
    =======================================================================================================
    Enable and activate add_theme_support('automatic-feed-links'); for fervent WordPress Theme. This 
    feature when enabled allows feed links for posts and comments in the head. This should be used in place 
    of the deprecated automatic_feed_link(); function.
    =======================================================================================================
    */
    add_theme_support('automatic-feed-links');

    /*
    =======================================================================================================
    Enable and activate register_nav_menus(); for Fervent WordPress theme. This feature when enabled,
    you can create a Primary Navigation, Secondary Navigation, and Social Navigation menus in the dashboard
    under menus.
    =======================================================================================================
    */   
    register_nav_menus(array(
        'primary-navigation'    => esc_html__('Primary Navigation', 'fervent'),
    ));

    /*
    =======================================================================================================
    Enable and activate add_theme_support('html5'); for fervent WordPress Theme. This feature allows the 
    use of HTML5 markup for search forms, comment forms, comment list, gallery, and captions.
    =======================================================================================================
    */
    add_theme_support('html5', array(
        'comment-list', 
        'comment-form', 
        'search-form', 
        'gallery', 
        'caption'
    ));

    /*
    =======================================================================================================
    Enable and activate add_theme_support('post-thumbnails); for fervent WordPress Theme. This feature 
    enables Post Thumbnails (Featured Images) support for a theme. If you wish to display thumbnails, 
    use the following to display the_post_thumbnail();. If you need to to check of there is a post thumbnail, 
    then use has_post_thumbnail();.
    =======================================================================================================
    */
    add_theme_support('post-thumbnails');

    /*
    =======================================================================================================
    add_image_size('fervent-medium-thumbnails', 810, 250, true); should be used under the following files, 
    content-single.php and content-page.php
    =======================================================================================================
    */
    add_image_size('fervent-medium-thumbnails', 810, 250, true);

    /*
    =======================================================================================================
    add_image_size('fervent-large-thumbnail', 1170, 300, true); should be used under the following files, 
    content-single.php and content-page.php
    =======================================================================================================
    */
    add_image_size('fervent-large-thumbnails', 1170, 300, true);
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

    /*
    =======================================================================================================
    Enable and activate the threaded comments for fervent. This allows users to comment by clicking on reply 
    so that it gets nested to the comments you are trying to respnse too. 
    =======================================================================================================
    */
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'fervent_enqueue_scripts_and_styles_setup');
/*
===========================================================================================================
 3.0 - Content Width
===========================================================================================================
*/
function fervent_content_width_setup() {
    $GLOBALS['content_width'] = apply_filters('fervent_content_width_setup', 810);
}
add_action('after_setup_theme', 'fervent_content_width_setup', 0);
/*
===========================================================================================================
 4.0 - Register Sidebars
===========================================================================================================
*/
function fervent_register_sidebars_setup() {
    /*
    ============================================================================================
    Enable and activate Primary Sidebar for Fervent WordPress Theme. The Primary Sidebar
    should only show in the blog posts only rather in the pages. 
    ============================================================================================
    */
    register_sidebar(array(
        'name'          => esc_html__('Primary Sidebar', 'fervent'),
        'description'   => esc_html__('Add widgets here to appear in your sidebar on Blog Posts and Archives only', 'fervent'),
        'id'            => 'primary-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<div class="widget-header"><h2 class="widget-title">',
        'after_title'   => '</h2></div>',
    ));
}
add_action('widgets_init', 'fervent_register_sidebars_setup');
/*
===========================================================================================================
 5.0 - Required Files
===========================================================================================================
*/
require_once(get_template_directory() . '/framework/framework.php');
require_once(get_template_directory() . '/includes/template-tags.php');