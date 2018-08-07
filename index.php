<?php
/*
===========================================================================================================
Fervent - index.php
===========================================================================================================
This is the most generic template file in a WordPress Theme and is one of the two required files for a 
theme (the other being style.css). The index.php template file is flexible. It can be used to include all 
references to the header, content, widget, footer and any other pages created in WordPress. Or it can be 
divided into modular template files, each taking on part of the workload. If you do not provide other 
template files, WordPress may have default files or functions to perform their jobs.

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
                <?php if (has_nav_menu('primary-navigation')) { ?>
                    <nav id="site-navigation" class="primary-navigation">
                        <button class="menu-toggle" aria-conrol="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'fervent'); ?></button>
                        <?php wp_nav_menu(array(
                            'theme_location'    => 'primary-navigation',
                            'menu_id'           => 'primary-menu',
                            'menu_class'        => 'nav-menu'   
                        )); 
                    ?>
                    </nav>
                <?php } ?>
            </div>
        </div>
        <header id="site-header" class="site-header">
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /> 
        </header>
        <section id="site-content" class="site-content">

        </section>
        <footer id="site-footer" class="site-footer">
            <div id="site-info" class="site-info">
                <?php printf(esc_html__('Proudly Powered By: %s', 'fervent'), '<a href="https://wordpress.org">WordPress</a>'); ?><br />
                <?php printf(esc_html__('Theme: %1$s By: %2$s.', 'fervent' ), 'Fervent', '<a href="https://luthemes.com/">Benjamin Lu</a>');
                ?>
            </div>
        </footer>
    </section>
    <?php wp_footer(); ?>
</body>
</html>