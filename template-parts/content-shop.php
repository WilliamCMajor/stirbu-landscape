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
    <div class="shop-category">
        <ul>
            <li><a href="">shop</a></li>
            <li><a href="">best sellers</a></li>
            <li><a href="">mountain</a></li>
            <li><a href="">urban</a></li>
            <li><a href="">nature</a></li>
            <li><a href="">landscapes</a></li>
        </ul>
    </div>
    <div class="shop-main">
        <div class="filter">
            <h2>Filter By:</h2>
            <?php dynamic_sidebar('sidebar'); ?>
        </div>
        <div class="shop-container">
            <?php echo do_shortcode ('[products]'); ?> 
        </div>
    </div>
</main>







<!-- //display footer -->
<?php get_footer(); ?>