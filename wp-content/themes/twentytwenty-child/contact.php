<?php
/**
 * Template Name: Contact

 */
?>


<?php get_header(); ?>



<div class="main">
<?php

// the loop
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        ?>

        <div class='single-content'>
            <?php the_content(); ?>
        </div>
        <?php
    endwhile;
endif;

?>


</div>






<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
<?php get_footer(); ?>
