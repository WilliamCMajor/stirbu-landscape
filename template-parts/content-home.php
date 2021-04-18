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
            
            $shop_now_0 = get_field('shop_now_0');
            $shop_now_1 = get_field('shop_now_1');
            $shop_now_2 = get_field('shop_now_2');
            $shop_now_3 = get_field('shop_now_3');
        ?>

        <div class="featured-container">
            <?php 
                if( !empty( $home_content_img_0 ) ): ?>
                    <img src="<?php echo esc_url($home_content_img_0['url']); ?>" alt="<?php echo esc_attr($home_content_img_0['alt']); ?>" />
            <?php endif; ?>

           <div>
                <h2><?php if($home_content_title_0) { (_e($home_content_title_0)); } ?></h2>
                <p><?php if($home_content_text_0) { (_e($home_content_text_0)); } ?></p>
                <button class="shop-now">
                    <?php if($shop_now_0){
                        $shop_now_0_title = $shop_now_0['title'];
                        $shop_now_0_url = $shop_now_0['url'];
                    } ?>
                <a href="<?php print_r( esc_url($shop_now_0_url) ); ?>"><?php print_r(esc_html($shop_now_0_title)); ?></a>
                </button>
           </div>
        </div>

        <div class="featured-container text-left">
            <?php 
                if( !empty( $home_content_img_1 ) ): ?>
                    <img src="<?php echo esc_url($home_content_img_1['url']); ?>" alt="<?php echo esc_attr($home_content_img_1['alt']); ?>" />
            <?php endif; ?>

            <div>
                <h2><?php if($home_content_title_1) { (_e($home_content_title_1)); } ?></h2>
                <p><?php if($home_content_text_1) { (_e($home_content_text_1)); } ?></p>
    
                <button class="shop-now">
                    <?php if($shop_now_1){
                        $shop_now_1_title = $shop_now_1['title'];
                        $shop_now_1_url = $shop_now_1['url'];
                    } ?>
                <a href="<?php print_r( esc_url($shop_now_1_url) ); ?>"><?php print_r(esc_html($shop_now_1_title)); ?></a>
                </button>
            </div>
        </div>

        <div class="featured-container">
            <?php 
                if( !empty( $home_content_img_2 ) ): ?>
                    <img src="<?php echo esc_url($home_content_img_2['url']); ?>" alt="<?php echo esc_attr($home_content_img_2['alt']); ?>" />
            <?php endif; ?>

            <div>
                <h2><?php if($home_content_title_2) { (_e($home_content_title_2)); } ?></h2>
                <p><?php if($home_content_text_2) { (_e($home_content_text_2)); } ?></p>
    
                <button class="shop-now">
                    <?php if($shop_now_2){
                        $shop_now_2_title = $shop_now_2['title'];
                        $shop_now_2_url = $shop_now_2['url'];
                    } ?>
                <a href="<?php print_r( esc_url($shop_now_2_url) ); ?>"><?php print_r(esc_html($shop_now_2_title)); ?></a>
                </button>
            </div>
        </div>

        <div class="featured-container text-left">
            <?php 
                if( !empty( $home_content_img_3 ) ): ?>
                    <img src="<?php echo esc_url($home_content_img_3['url']); ?>" alt="<?php echo esc_attr($home_content_img_3['alt']); ?>" />
            <?php endif; ?>

            <div>
                <h2><?php if($home_content_title_3) { (_e($home_content_title_3)); } ?></h2>
                <p><?php if($home_content_text_3) { (_e($home_content_text_3)); } ?></p>
    
                <button class="shop-now">
                    <?php if($shop_now_3){
                        $shop_now_3_title = $shop_now_3['title'];
                        $shop_now_3_url = $shop_now_3['url'];
                    } ?>
                <a href="<?php print_r( esc_url($shop_now_3_url) ); ?>"><?php print_r(esc_html($shop_now_3_title)); ?></a>
                </button>
            </div>
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
                    <a href="http://stirbu.web.dmitcapstone.ca/stirbu_landscape/about-the-artist/">LEARN MORE ></a>
                </div>
            </div>
        </div>
        <div id="background"></div>
    </section>
    
    
</article>
