<?php if(is_active_sidebar( 'footer-one' )): ?>
    <div>
        <?php dynamic_sidebar ( 'footer-one' )?>
    </div>
<?php endif ?>

<div>
    <?php if(is_active_sidebar( 'footer-col-two' )): ?>
        <div>
            <?php dynamic_sidebar ( 'footer-col-two' )?>
        </div>
    <?php endif ?>

    <?php if(is_active_sidebar( 'footer-col-three' )): ?>
        <div>
            <?php dynamic_sidebar ( 'footer-col-three' )?>
        </div>
    <?php endif ?>

    <?php if(is_active_sidebar( 'footer-col-four' )): ?>
        <div>
            <?php dynamic_sidebar ( 'footer-col-four' )?>
        </div>
    <?php endif ?>
</div>

