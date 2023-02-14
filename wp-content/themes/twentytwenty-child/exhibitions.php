<?php
/**
 * Template Name: Exhibitions
 */
?>

<?php
 get_header(); ?>


<?php

$args = array(
  'post_type' => 'exhibition',
  'posts_per_page' => 3,
);

// Get current page and append to custom query parameters array
$args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;


// The Query
$the_query = new WP_Query( $args );

// Pagination fix
$temp_query = $wp_query;
$wp_query   = NULL;
$wp_query   = $the_query;
// The Loop
if ( $the_query->have_posts() ) {
?>
 <div class="row">
  <?php
	while ( $the_query->have_posts() ) {
		$the_query->the_post();

    $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    ?>

      <div class="third col-4">

       <div class="third-text" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
       <?php the_post_thumbnail('thumbnail'); ?>

      <div class="exh-text">
        <p class="artist"><?php echo get_the_title(); ?><p>

        <p><?php the_field('start_date'); ?> -
        <?php the_field('end_date'); ?></p>
        <a href="http://galleri.local/exhibition/<?php global $post;
        echo $post->post_name; ?>" >
        </div>
        <button class="link-button">Till utställningen</button> </a>

       </div>

      </div>

  <?php
	}

} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();


?>
</div>
<div class="myPagination">
  <button class="buttonLeft-Right">
  <?php
// Custom query loop pagination
  previous_posts_link( '<<' ); ?> </button>
  <button class="buttonLeft-Right">
  <?php
  next_posts_link( '>>', $custom_query->max_num_pages );
  ?> </button>

</div>
  <?php
// Reset main query object
$wp_query = NULL;
$wp_query = $temp_query;

 get_template_part( 'template-parts/footer-menus-widgets' ); ?>
