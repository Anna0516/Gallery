<?php
/**
 * Template Name: Paintings
 */
?>

<?php
 get_header();
//Get exhibition names
$exhibitions = get_posts(['post_type'=>'exhibition','numberposts'=>-1]); ?>


<div class="filter-control-row">
<form action="">
<div class="filter-control-column">
  <!-- Form price -->
<label for="price">Sortera efter pris</label>

  <select name="price" id="price">

  <option value="expensive">Dyrast</option>
  <option value="cheapest">Billigast</option>
  </select>

</div>
<div class="filter-control-column">
<!-- Form artist -->
  <label for="painting-filter-artist">Sortera efter konstnär</label>

<select name="painting-filter-artist" id="">
  <option value="all">Alla</option>
  <?php
  foreach($exhibitions as $exhibition):?>
  <option value="<?php echo $exhibition->post_title?>">
  <?= (isset($_GET['painting-filter-artist']) && $_GET['painting-filter-artist'] == $exhibition->post_title ? 'selected' : '' ) ?>

  <?php echo $exhibition->post_title; ?></option>
  <?php
  endforeach;
  ?>
</select>

</div>
<div class="filter-control-column">
<input id="filterButton" type="submit" value="Sortera"></input>
</div>
</form>

</div>
<?php

//Sort by price
if(isset($_GET['price']) && $_GET['price'] === 'expensive'){
  $sorting = 'DESC';

} else if(isset($_GET['price']
 ) && $_GET['price'] === 'cheapest') {
  $sorting = 'ASC';
  }

//Sort by artist
  $artistName='';
if(isset($_GET['painting-filter-artist']) && $_GET['painting-filter-artist'] === 'all' ) {
$artistName='';
}

else if(isset($_GET['painting-filter-artist']) ) {
  $artistName = $_GET['painting-filter-artist'];
}

  $args = array(
    'post_type' => 'painting',
    'numberposts' => -1,
    'orderby' => 'meta_value_num',
    'meta_key' => 'lowest_price',
    'order' => $sorting,
     'meta_query' => array(
       array(
       'key' => 'artist_name',
        'value' => $artistName,
        'compare' => 'LIKE',
     )
     )

  );

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
?>


<?php




?>

 <div class="row">
  <?php
	while ( $the_query->have_posts() ) {
		$the_query->the_post();

    $myBackgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    ?>

      <div class="third col-4">


       <div class="third-text" style="background: url('<?php echo $myBackgroundImg[0]; ?>') no-repeat;">
        <div class="imgBg">
        <a href="http://galleri.local/painting/<?php global $post;
echo $post->post_name; ?>" ><?php the_post_thumbnail('thumbnail'); ?> </a>
        </div>
        <div class="painting-text">
        <p class="artist"><?php the_field('artist_name'); ?></p>
        <p><?php echo get_the_title(); ?><p> (id nr: <?php the_field('painting_id'); ?>)


        <h5><?php the_field('lowest_price'); ?> kr</h5>
  </div>
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

<?php


get_template_part( 'template-parts/footer-menus-widgets' ); ?>
