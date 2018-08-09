<?php
/*
================================================================================================
fervent - index.php
================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files
for a theme (the other being style.css). The index.php template file is flexible. It can be used to
include all references to the header, content, widget, footer and any other pages created in
WordPress. Or it can be divided into modular template files, each taking on part of the workload.
If you do not provide other template files, WordPress may have default files or functions to
perform their jobs.

@package        Fervent WordPress Theme
@copyright      Copyright (C) 2018. Benjamin Lu
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://luthemes.com/)
================================================================================================
*/
?>
<?php get_header(); ?>
    <?php if ('left-sidebar' == get_theme_mod('global_layouts', 'left-sidebar')) { ?>
        <section id="global-layout" class="<?php echo esc_attr(get_theme_mod('global_layout', 'left-sidebar')); ?>">
            <div id="content-area" class="content-area">
                <article id="post-0" <?php post_class('post'); ?>>
                        <header class="entry-header">
                            <h1 class="entry-title"><?php esc_html_e('Whoa! You broke something', 'fervent'); ?></h1>
                        </header>
                        <div class="entry-content">
                            <p>
                                <?php printf(esc_html__("Just kidding! You tried going to %s, which doesn't exist, so that means I probably broke something. To find what you are looking for, check out the most recent articles below or try a search: ", 'fervent'), 
                                '<code>' . home_url(esc_url($_SERVER['REQUEST_URI'])) . '</code>'); ?>
                            </p>
                            <?php get_search_form(); ?>
                        </div>
                </article>
            </div>
            <?php get_sidebar(); ?>
        </section>
    <?php } else if ('right-sidebar' == get_theme_mod('global_layouts', 'right-sidebar')) { ?>
        <section id="global-layout" class="<?php echo esc_attr(get_theme_mod('global_layout', 'left-sidebar')); ?>">
            <div id="content-area" class="content-area">
                <article id="post-0" <?php post_class('post'); ?>>
                        <header class="entry-header">
                            <h1 class="entry-title"><?php esc_html_e('Whoa! You broke something', 'fervent'); ?></h1>
                        </header>
                        <div class="entry-content">
                            <p>
                                <?php printf(esc_html__("Just kidding! You tried going to %s, which doesn't exist, so that means I probably broke something. To find what you are looking for, check out the most recent articles below or try a search: ", 'fervent'), 
                                '<code>' . home_url(esc_url($_SERVER['REQUEST_URI'])) . '</code>'); ?>
                            </p>
                            <?php get_search_form(); ?>
                        </div>
                </article>
            </div>
            <?php get_sidebar(); ?>
        </section>
    <?php } else { ?>
        <section id="global-layout" class="<?php echo esc_attr(get_theme_mod('global_layout', 'left-sidebar')); ?>">
            <div id="content-area" class="content-area">
                <article id="post-0" <?php post_class('post'); ?>>
                        <header class="entry-header">
                            <h1 class="entry-title"><?php esc_html_e('Whoa! You broke something', 'fervent'); ?></h1>
                        </header>
                        <div class="entry-content">
                            <p>
                                <?php printf(esc_html__("Just kidding! You tried going to %s, which doesn't exist, so that means I probably broke something. To find what you are looking for, check out the most recent articles below or try a search: ", 'fervent'), 
                                '<code>' . home_url(esc_url($_SERVER['REQUEST_URI'])) . '</code>'); ?>
                            </p>
                            <?php get_search_form(); ?>
                        </div>
                </article>
            </div>
        </section>
    <?php } ?>
<?php get_footer(); ?>