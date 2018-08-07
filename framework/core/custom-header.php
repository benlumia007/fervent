<?php
/*
===========================================================================================================
Fervent - custom-header.php
===========================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files for a 
theme. This framework.php template file allows you to add features and functionality that has been preset 
to be use in this WordPress theme which is stored in the theme's framework directory in the theme folder.

@package        fervent WordPress Theme
@copyright      Copyright (C) 2018. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://luthemes.com/)
===========================================================================================================
*/
/*
===========================================================================================================
Table of Content
===========================================================================================================
 1.0 - Custom Header
 2.0 - Custom Header CSS
===========================================================================================================
*/
/*
===========================================================================================================
1.0 - Meta Charset
===========================================================================================================
*/
function fervent_custom_header_setup() {
    $args = array(
        /*
        ===================================================================================================
        Default Text Color and Default Image when used for a custom header.
        ===================================================================================================
        */
        'default-text-color'     => 'ffffff',
        'default-image'          => get_template_directory_uri() . '/images/header-image.jpg',
        
        /*
        ===================================================================================================
        This will set height and width of the image and set the max width as well.
        ===================================================================================================
        */
        'height'                 => 300,
        'width'                  => 1170,
        'max-width'             =>  2000,
        
        /*
        ===================================================================================================
        Support flexible Height and Width
        ===================================================================================================
        */
        'flex-height'            => false,
        'flex-width'             => false,
        /*
        ===================================================================================================
        Callbacks for styling the custom header style.
        ===================================================================================================
        */
        'wp-head-callback'       => 'fervent_custom_header_style',
    );
    add_theme_support('custom-header', $args);
    
    /*
    =======================================================================================================
    This will set the default headers for header image. 
    =======================================================================================================
    */
    register_default_headers(array(
        'header-image' => array(
            'url'           => '%s/images/header-image.jpg',
            'thumbnail_url' => '%s/images/header-image.jpg',
            'description'   => esc_html__('Header Image', 'fervent')
    )));
}
add_action('after_setup_theme', 'fervent_custom_header_setup');
/*
===============================================================================================================
2.0 - Custom Header CSS 
===============================================================================================================
*/
function fervent_custom_header_style() {
    $text_color = esc_html(get_header_textcolor());
    	
	if ($text_color == get_theme_support('custom-header', 'default-text-color')) {
            return;
    }
    if (!display_header_text()) {
        $custom_css = "
            .site-header .site-branding {
                display: none;
            }
        ";
        wp_add_inline_style('fervent-style', $custom_css);
    } else {
        $custom_css = "
        .site-header .site-branding .site-title a,
        .site-header .site-branding .site-description {
            color: #{$text_color};
        }
        ";
        wp_add_inline_style('fervent-style', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'fervent_custom_header_style');