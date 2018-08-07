<?php
/*
===========================================================================================================
Fervent - primary-navigation.php
===========================================================================================================
This is the most generic template file in a WordPress theme and is one of the required files for a theme. 
This primary-navigation.php template file allows you to add the primary navigation in the header by using
do_action(); and keep the codes clean as possible. 

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
 1.0 - Primary Navigation
===========================================================================================================
*/

/*
===========================================================================================================
 1.0 - Require Files
===========================================================================================================
*/
function fervent_do_primary_navigation_setup() {
    do_action('fervent_do_primary_navigation_setup');
}

function fervent_output_primary_navigation_setup() {
    if (has_nav_menu('primary-navigation')) { ?>
        <nav id="site-navigation" class="primary-navigation">
            <button class="menu-toggle" aria-conrol="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'fervent'); ?></button>
                <?php wp_nav_menu(array(
                    'theme_location'    => 'primary-navigation',
                    'menu_id'           => 'primary-menu',
                    'menu_class'        => 'nav-menu'   
                )); 
                ?>
        </nav>
    <?php }
}
add_action('fervent_do_primary_navigation_setup', 'fervent_output_primary_navigation_setup');