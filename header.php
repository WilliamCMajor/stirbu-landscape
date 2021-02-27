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

        <nav>
            <?php //get_template_part('template-parts/sidebar', 'header'); ?>       
        </nav>

    </header>
        <div id="content" class="site-content" >