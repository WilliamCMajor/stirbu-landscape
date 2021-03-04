<?php
/*
* The header for our theme
* This is the template that displays all of the <head> section and everything up until your opening main
* container section (i.e. <div class="main-content">).
* @package Stirbu Landscape
* @since 1.0.0
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
 <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?> >
    <div class="wrapper">
    <header>
        <img class="logo" src="http://stirbu.web.dmitcapstone.ca/stirbu_landscape/wp-content/uploads/2021/03/logo-transparent.png" alt="RNS logo transparent">
        <div class="header-icons">
            <img class="style-svg" src="http://stirbu.web.dmitcapstone.ca/stirbu_landscape/wp-content/uploads/2021/03/search-solid.svg" alt="search icon">
            <img class="style-svg" src="http://stirbu.web.dmitcapstone.ca/stirbu_landscape/wp-content/uploads/2021/03/shopping-cart-solid.svg" alt="shopping cart icon">
            <div class="menu-icon"><img class="style-svg" src="http://stirbu.web.dmitcapstone.ca/stirbu_landscape/wp-content/uploads/2021/03/bars-solid.svg" alt="menu icon"></div>
        </div>
        <nav>
            <?php get_template_part('template-parts/sidebar', 'header'); ?>       
        </nav>

    </header>
        <div id="content" class="site-content" >