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
 1.0 - Main Query (Content with Post Format)
===========================================================================================================
*/

/*
===========================================================================================================
 1.0 - Main Query (Content with Post Format)
===========================================================================================================
*/
function fervent_do_main_query_content_post_format_setup() {
    do_action('fervent_do_main_query_content_post_format_setup');
}

function fervent_output_main_content_post_format_setup() {
    if (have_posts()) :
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', get_post_format());
    endwhile;
            the_posts_pagination();
    else :
            get_template_part('template-parts/content', 'none');
    endif;
}
add_action('fervent_do_main_query_content_post_format_setup', 'fervent_output_main_content_post_format_setup');