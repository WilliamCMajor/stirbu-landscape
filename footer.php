<?php
/*
* The footer for our theme
* footer content.
*
* @package Stirbu Landscape
* @since 1.0.0
*/
?>

        </div><!-- closing tag for site-content -->
        <footer>
            <div class="rehd-container">
                <?php get_template_part('template-parts/sidebar', 'footer'); ?>
            </div>
            <div class="rehd-container">
                <?php get_template_part('template-parts/desktop', 'footer'); ?>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>