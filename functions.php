
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
@author         Benjamin Lu (https://luthemes.com/)
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