
<?php
 get_header(); ?>

<?php
$title = get_the_title();

$args = array(
  'post_type' => 'painting',
  'meta_query' => array(
     array(
      'key' => 'artist_name',
       'value' => $title,
    )
   )

);



// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
?>
<div class="single-exhibition-head">
<h2 class="artist"><?php echo get_the_title(); ?><h2>

<p><?php the_field('start_date'); ?> -
<?php the_field('end_date'); ?></p>
</div>


 <div class="row">
  <?php
	while ( $the_query->have_posts() ) {
		$the_query->the_post();?>
      <div class="third col-4">

       <div class="third-text">
       <div class="imgBg">
       <a href="http://galleri.local/painting/<?php global $post;
echo $post->post_name; ?>" ><?php the_post_thumbnail('thumbnail'); ?> </a>
  </div>
  <p class="artist"><?php the_field('artist_name'); ?></p>
        <p><?php echo get_the_title(); ?><p> (id nr: <?php the_field('painting_id'); ?>)


        <h5><?php the_field('lowest_price'); ?> kr</h5>
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

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
