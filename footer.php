<?php
/*
===========================================================================================================
Fervent - footer.php
===========================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files for a theme 
(the other header.php). The footer.php template file only displays the footer section of this theme. This 
also displays the navigation menu.

@package        Fervent WordPress Theme
@copyright      Copyright (C) 2018. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://luthemes.com/)
===========================================================================================================
*/
?>
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