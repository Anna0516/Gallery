<?php
/**
 * Template Name: Artists external
 */
?>

<?php
 get_header(); ?>

<h3>Konstnärer Galleri Thomassen </h3>
<?php

$request = wp_remote_get( 'https://www.gallerithomassen.se/wp-json/wp/v2/artist?_fields[]=title&_fields[]=content&per_page=25' );

if( is_wp_error( $request ) ) {
	return false;
}

$body = wp_remote_retrieve_body( $request );

$artists = json_decode( $body );


if(!empty($artists)) { ?>

 <?php foreach($artists as $post) { ?>


      <div class="third-text external-artist">
        <p class="artist"><?php echo $post->title->rendered; ?></p>
        <p ><?php echo $post->content->rendered;  ?></p>
        </div>

<?php
$postContent = $post->content->rendered;
$postTitle = $post->title->rendered;
// Gather post data.
$my_post = array(
	'post_title'    => $postTitle,
	'post_content'  => $postContent,
	'post_status'   => 'publish',
	'post_author'   => 1,

);

// Insert the post into the database.
wp_insert_post( $my_post );
   }
}

 get_template_part( 'template-parts/footer-menus-widgets' ); ?>
