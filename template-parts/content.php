<?php
/*
================================================================================================
Fervent - content.php
================================================================================================
This is the most generic template file in a WordPress theme and is one required files to display
content. This content.php is the main content that will be displayed when is on front page, home
or index.

@package        Fervent WordPress Theme
@copyright      Copyright (C) 2018. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://www.luthemes.com/)
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
        <?php the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h1>'); ?>
    </header>
    <span class="entry-timestamp"><?php echo fervent_entry_time_stamp_setup(); ?></span>
    <div class="entry-excerpt">
        <?php the_excerpt(); ?>
        <div class="continue-reading">
            <a href="<?php echo esc_url(get_permalink()); ?>">
                <?php
                    printf(
                        esc_html__('Continue Reading %s', 'fervent'), 
                        the_title('<span class="screen-reader-text">', '</span>', false)
                    );
                ?>
            </a>
        </div>
    </div>
</article>