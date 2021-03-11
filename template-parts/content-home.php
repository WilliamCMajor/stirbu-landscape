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
    <?php the_content(); ?>

    <div class="home-content">
        <!-- Home page content Advanced Custom Field-->
        <?php 
            $home_content_title_0 = get_field('home_content_title_0');
            $home_content_title_1 = get_field('home_content_title_1');
            $home_content_title_2 = get_field('home_content_title_2'); 
            $home_content_title_3 = get_field('home_content_title_3');

            $home_content_text_0 = get_field('home_content_text_0');
            $home_content_text_1 = get_field('home_content_text_1');
            $home_content_text_2 = get_field('home_content_text_2');
            $home_content_text_3 = get_field('home_content_text_3');

            $home_content_img_0 = get_field('home_content_img_0');
            $home_content_img_1 = get_field('home_content_img_1');
            $home_content_img_2 = get_field('home_content_img_2');
            $home_content_img_3 = get_field('home_content_img_3');          
        ?>

        <div>
            <?php 
                if( !empty( $home_content_img_0 ) ): ?>
                    <img src="<?php echo esc_url($home_content_img_0['url']); ?>" alt="<?php echo esc_attr($home_content_img_0['alt']); ?>" />
            <?php endif; ?>

            <h2><?php if($home_content_title_0) { (_e($home_content_title_0)); } ?></h2>
            <p><?php if($home_content_text_0) { (_e($home_content_text_0)); } ?></p>
        </div>

        <div>
            <?php 
                if( !empty( $home_content_img_1 ) ): ?>
                    <img src="<?php echo esc_url($home_content_img_1['url']); ?>" alt="<?php echo esc_attr($home_content_img_1['alt']); ?>" />
            <?php endif; ?>

            <h2><?php if($home_content_title_1) { (_e($home_content_title_1)); } ?></h2>
            <p><?php if($home_content_text_1) { (_e($home_content_text_1)); } ?></p>
        </div>

        <div>
            <?php 
                if( !empty( $home_content_img_2 ) ): ?>
                    <img src="<?php echo esc_url($home_content_img_2['url']); ?>" alt="<?php echo esc_attr($home_content_img_2['alt']); ?>" />
            <?php endif; ?>

            <h2><?php if($home_content_title_2) { (_e($home_content_title_2)); } ?></h2>
            <p><?php if($home_content_text_2) { (_e($home_content_text_2)); } ?></p>
        </div>

        <div>
            <?php 
                if( !empty( $home_content_img_3 ) ): ?>
                    <img src="<?php echo esc_url($home_content_img_3['url']); ?>" alt="<?php echo esc_attr($home_content_img_3['alt']); ?>" />
            <?php endif; ?>

            <h2><?php if($home_content_title_3) { (_e($home_content_title_3)); } ?></h2>
            <p><?php if($home_content_text_3) { (_e($home_content_text_3)); } ?></p>
        </div>


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
