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
    <!-- <h2><?php //the_title(); ?></h2> -->
    <div class="entry-content">
        <!-- display page or post content -->
        <?php echo get_the_post_thumbnail( $post_id, 'large'); ?>
        <?php the_content(); ?>
        <!-- other things you could put in here would be: pagination (more used for blog posts), custom posts, anything you need for site. -->
    </div>

    <section class="about-me-home">
        <div class="rehd-container">
            <img src="http://stirbu.web.dmitcapstone.ca/stirbu_landscape/wp-content/uploads/2021/03/about-me-picture.jpg" alt="robert-portrait">
            <div class="about-me-info">
                <h1>robert stirbu</h1>
                <p class="hidden">
                    How did RNS Photography start... Well first of all RNS. How did RNS Photography start... 
                    Well first of all RNS. How did RNS Photography start... Well first of all RNS. How did RNS Well first of all RNS.
                    How did RNS Photography start... Well first of all RNS. How did RNS Photography start.
                </p>
                <p>
                    Well first of all RNS. How did RNS Photography start... Well first of all RNS. How did RNS Well first of all RNS.
                </p>

                <div>
                    <a href="#">LEARN MORE ></a>
                </div>
            </div>
        </div>
        <div id="background"></div>
    </section>
    
    
</article>
