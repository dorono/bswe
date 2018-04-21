<?php

add_action('wp_head', 'remove_all_wpseo_og', 1);
function remove_all_wpseo_og() {
  remove_action( 'wpseo_head', array( $GLOBALS['wpseo_og'], 'opengraph' ), 30 );
}

add_filter( 'wpseo_opengraph_type', 'yoast_change_opengraph_type', 10, 1 );
function yoast_change_opengraph_type( $type ) {
  /* Make magic happen here
   * Example below changes the homepage to a book type
   */
  
  if ( is_home() ) {
    return 'book';
  } else {
    return $type;
  }
}

add_action('wp_head', 'remove_one_wpseo_og', 1);
function remove_one_wpseo_og() {
  if ( is_single ( 123456 ) ) {
    remove_action( 'wpseo_head', array( $GLOBALS['wpseo_og'], 'opengraph' ), 30 );
  }
    /* Use a second if statement here when needed */
}

add_filter('wpseo_opengraph_url' , '__return_false' );
add_filter('wpseo_opengraph_desc', '__return_false' );
add_filter('wpseo_opengraph_title', '__return_false' );
add_filter('wpseo_opengraph_type', '__return_false' );
add_filter('wpseo_opengraph_site_name', '__return_false' );

?>