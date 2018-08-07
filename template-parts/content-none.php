<?php
/*
================================================================================================
Fervent - content-none.php
================================================================================================
This is the most generic template file in a WordPress theme and is one required files to display
404 and Search as well as recent posts.

@package        Fervent WordPress Theme
@copyright      Copyright (C) 2018. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://luthemes.com/)
================================================================================================
*/
?>
<article id="post-0" <?php post_class('post'); ?>>
    <header class="entry-header">
        <?php if (is_home() && current_user_can('publish_posts')) { ?>
            <h1 class="entry-title"><?php esc_html_e('Getting Started', 'benjlu'); ?></h1>
        <?php } else { ?>
            <h1 class="entry-title"><?php esc_html_e('Nothing Found', 'benjlu'); ?></h1>
        <?php } ?>
    </header>
    <div class="entry-content">
        <?php if (is_home() && current_user_can('publish_posts')) : ?>
            <p><?php printf(esc_html__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'fervent'), esc_url(admin_url('post-new.php'))); ?></p>
        <?php else : ?>
            <p><?php esc_html_e('It seems we cannot find what you are looking for. Perhaps searching can help.', 'fervent'); ?></p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
</article>