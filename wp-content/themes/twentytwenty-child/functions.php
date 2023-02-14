<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'chld_thm_cfg_parent','twentytwenty-style','twentytwenty-print-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

// Register Custom Post Type
function generate_painting() {

	$labels = array(
		'name'                  => _x( 'Paintings', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Painting', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Paintings', 'text_domain' ),
		'name_admin_bar'        => __( 'Painting', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Painting', 'text_domain' ),
		'description'           => __( 'Painting in gallery', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',

	);
	register_post_type( 'painting', $args );

}
add_action( 'init', 'generate_painting', 0 );

// Register Custom Post Type Exhibition
function register_exhibition() {

	$labels = array(
		'name'                  => _x( 'Exhibitions', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Exhibition', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Exhibitions', 'text_domain' ),
		'name_admin_bar'        => __( 'Exhibition', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Exhibition', 'text_domain' ),
		'description'           => __( 'Exhibition', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',

	);
	register_post_type( 'exhibition', $args );

}
add_action( 'init', 'register_exhibition', 0 );

//add shortcode random image
function random_image() {

  $args = array(
   'post_type' => 'painting',
   'posts_per_page' => 1,
   'orderby' => 'rand'

  );

  // The Query
  $the_query = new WP_Query( $args );

  // The Loop
  if ( $the_query->have_posts() ) {
	  while ( $the_query->have_posts() ) {
		  $the_query->the_post();?>

      <a href="http://galleri.local/painting/<?php global $post;
      echo $post->post_name; ?>" ><?php the_post_thumbnail('thumbnail'); ?> </a>

     <?php
	  }

  }
  /* Restore original Post Data */
  wp_reset_postdata();
}
add_shortcode( 'randomimage', 'random_image' );

//add shortcode form newsletter
function form_newsletter(){
  ?>
  <div class="nlform">
<form action="https://www.filmqrt.com/newsletter/" method="POST">
  <label for="email">Ja tack, jag vill ha nyhetsbrevet.</label>
<div class="nlinput">
  <input id="nlfield"  type="email" id="nlEmail" name="e-mail" placeholder="E-postadress" >

  <input id="nlbutton" type="submit" value="Skicka">
  </div>
</form>
</div>
  <?php
}
add_shortcode( 'formnewsletter', 'form_newsletter' );

// add third footer column

function new_footer_widgets_init() {

  register_sidebar(array(
'name'          => __( 'Footer #3', 'options-for-twenty-twenty' ),
'id'            => 'sidebar-3',
'description'   => __( 'Widgets in this area will be displayed in the third column in the footer.', 'options-for-twenty-twenty' ),
    'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
    'after_title'   => '</h2>',
        'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
    'after_widget'  => '</div></div>',
    ));

}
add_action('widgets_init', 'new_footer_widgets_init', 11);

function get_new_footer_sidebars($index, $has_widgets) {

  if ($index == 'sidebar-2') {

  if (is_active_sidebar('sidebar-3')) {

  ?>
  <div class="footer-widgets column-three grid-item">
  <?php dynamic_sidebar( 'sidebar-3' ); ?>
  </div>
  <script type="text/javascript">
      (function () {
          var sidebarWrapper = document.getElementsByClassName('footer-widgets-wrapper')[0],
          newSidebar = document.getElementsByClassName('footer-widgets-wrapper')[0].getElementsByClassName('column-three')[0];
          sidebarWrapper.appendChild(newSidebar);
      }());
  </script>
  <?php

  }

  }

  }
  add_action('dynamic_sidebar_after', 'get_new_footer_sidebars', 10, 2);
