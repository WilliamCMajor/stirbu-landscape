<?php
/***
* Template part for displaying content in the customerDash.php
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package Stirbu Landscape
* @since 1.0.0
*/
?>
<article class="my-account-page" <?php post_class();?> id="post-<?php the_ID();?>" >

    <?php
        the_content(); // displays all of the content within the editor in pages in the dashboard
    ?>
    <button class="my-account"><a href="<?php echo get_site_url(); ?>/my-account/orders">My Orders</a></button>

</article>
