<?php
/* 
*   This partial template will contain header widget area code
*
* @package Stirbu Landscape
* @since 1.0
*/
?>

<?php if (is_active_sidebar( 'header-nav' )) : ?>
    <?php dynamic_sidebar( 'header-nav' ); ?>
<?php endif ?>
