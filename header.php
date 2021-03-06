
<?php
/*
===========================================================================================================
Fervent - header.php
===========================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files for a theme 
(the other footer.php). The header.php template file only displays the header section of this theme. This 
also displays the navigation menu as well or any extra features.

@package        Fervent WordPress Theme
@copyright      Copyright (C) 2018. Benjamin Lu
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://luthemes.com/)
===========================================================================================================
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://gmpg.org/xfn/11" rel="profile" />
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
    <section id="site-container" class="site-container">
        <div id="branding-navigation" class="branding-navigation">
            <div class="site-branding">
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                <h4 class="site-description"><?php bloginfo('description'); ?></h4>
            </div>
            <div id="main-navigation" class="main-navigation">
                <?php fervent_do_primary_navigation_setup(); ?>
            </div>
        </div>
        <header id="site-header" class="site-header">
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /> 
        </header>
        <section id="site-content" class="site-content">