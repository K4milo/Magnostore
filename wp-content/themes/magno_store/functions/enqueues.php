<?php

function magno_child_assets() {

  // Bootstrap Support
  //enqueue bootstrap in the child theme

  wp_enqueue_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', false, NULL, 'all');
  wp_enqueue_style('material-icons', '//fonts.googleapis.com/icon?family=Material+Icons', false, NULL, 'all');
  wp_enqueue_style('font-icons', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', false, NULL, 'all');
  wp_enqueue_style('animate-css', '//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', false, NULL, 'all');

  // Styles
  $theme_info = wp_get_theme();

  wp_enqueue_style('my-styles', get_stylesheet_directory_uri().'/assets/css/theme.css', array(), $theme_info->get('Version'));

  // Scripts
  wp_enqueue_script('wow-js', '//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', false, null, true);
  wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', false, NULL, true);
  wp_enqueue_script('theme-scripts', get_stylesheet_directory_uri().'/assets/js/theme.js', false, null, true);
}

add_action('wp_enqueue_scripts', 'magno_child_assets', 300);

function storefront_credit() {
?>
  <div class="site-info">
    &copy; <?php echo get_bloginfo( 'name' ) . ' ' . get_the_date( 'Y' ); ?>
  </div>
  <!-- .site-info -->
<?php
}
/* Remove sidebars */
function remove_sidebars() {
  unregister_sidebar( 'sidebar-1' ); // primary
 // unregister_sidebar( 'sidebar-2' ); // secondary
}
/* Remove sidebar from all pages except those using page-sidebar.php template */
// Need to figure out width CSS for sidebar pages later...
if (!is_admin()) {
  $url = explode('?', 'http://'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
  $id = url_to_postid($url[0]);
  $template = get_post_meta( $id, '_wp_page_template', true );
  if ($template !== "page-sidebar.php") {
    //error_log('template ' . $template);
    add_action( 'widgets_init', 'remove_sidebars', 11 );
  }
}

/* Remove search from header */
add_action( 'init', 'remove_storefront_header_search' );

function remove_storefront_header_search() {
  remove_action( 'storefront_header', 'storefront_product_search', 	40 );
}
