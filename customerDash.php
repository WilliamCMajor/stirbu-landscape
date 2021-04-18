<?php
/***
* Template Name: Customer Dashboard
* description: template to display Customer Dashboard
*
* @package Stirbu Landscape
* @since 1.0.0
*/
//display header
get_header();
?>

<!-- display the produce page content -->
<?php if(have_posts()) : ?>
<!-- start the loop -->
    <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'customerDash' ); ?>
    <?php endwhile; ?>

    <?php else : ?>
<!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
        <?php get_template_part('template-parts/content', 'none'); ?>
<!-- end while loop -->
<?php endif; ?>

<!-- display footer -->
<?php get_footer(); ?>