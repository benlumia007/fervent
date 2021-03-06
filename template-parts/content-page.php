<?php
/*
================================================================================================
Fervent - content-page.php
================================================================================================
This is the most generic template file in a WordPress theme and is one required files to display
content. This content.php is the main content that will be displayed.

@package        Fervent WordPress Theme
@copyright      Copyright (C) 2017. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://luthemes.com/)
================================================================================================
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (has_post_thumbnail()) { ?>
        <?php if ('no-sidebar' == get_theme_mod('global_layout', 'no-sidebar')) { ?>
            <div class="entry-post-thumbnail">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('fervent-large-thumbnails'); ?></a>
            </div>
        <?php } else { ?>
            <div class="entry-post-thumbnail">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('fervent-medium-thumbnails'); ?></a>
            </div>
        <?php } ?>
    <?php } ?>
    <header class="entry-header">
        <?php the_title(sprintf('<h1 class="entry-title">', '</h1>')); ?>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array(
            'before'      => '<div class="page-links">' . esc_html__('Pages:', 'fervent'),
            'after'       => '</div>',
            'link_before' => '<span>',
            'link_after'  => '</span>',
            'pagelink'    => '<span class="screen-reader-text">' . esc_html__('Page', 'fervent') . ' </span>%',
            'separator'   => '<span class="screen-reader-text">,</span> ',
        ));
        ?>
    </div>
</article>
<?php comments_template(); ?>