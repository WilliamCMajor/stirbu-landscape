<?php
/***
* Template part for displaying content in the front-page.php
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package Stirbu Landscape
* @since 1.0.0
*/
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >
    <div class="entry-content">
        <!-- display page or post content -->
        <?php echo get_the_post_thumbnail( $post_id, 'large'); ?>
        <?php the_content(); ?>
        <!-- other things you could put in here would be: pagination (more used for blog posts), custom posts, anything you need for site. -->
    </div>
    
</article>
