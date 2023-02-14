
<?php get_header(); ?>

<?php

// the loop
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>
<div class="single-painting-content">
        <h2 id="title-painting">
            <?php the_title(); ?>
        </h2>


<img src="<?php the_field('painting'); ?>" />

<div class="single-painting-text">
<h5>Pris: <?php the_field( 'lowest_price'); ?> kr</h5>
<br>
<p class="artist">Målad av: <?php echo get_post_meta($post->ID, 'artist_name', true); ?></p>
<br>
        id nr: <?php the_field('painting_id'); ?>
        </div>

        </div>
        <?php
    endwhile;
endif;
?>



<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
