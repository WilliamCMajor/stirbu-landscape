<?php
/***
* This template is for displaying full blog article.
*
* @package Stirbu Landscape
* @since 1.0.0
*/
//display header
get_header();
?>

<main id="main" class="site-main" role="main">
    <?php echo do_shortcode ('[products limit="6" columns="2"]'); ?> 
</main>







<!-- //display footer -->
<?php get_footer(); ?>