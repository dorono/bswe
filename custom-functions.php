<?php
//   function remove_meta_descriptions($html) {
//     $pattern = '/<meta property="og:url" content=(.*)>/i';
//     $html = preg_replace($pattern, '<meta property="og:url" content="this works" />', $html);
//     return $html;
// }
// function clean_meta_descriptions($html) {
//     ob_start('remove_meta_descriptions');
// }
// add_action('get_header', 'clean_meta_descriptions', 100);

//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
  return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'add_opengraph_doctype');

//Lets add Open Graph Meta Info

function insert_fb_in_head() {
global $post;

$permalink = get_permalink();
$find = array( 'http://', 'https://' );
$replace = 'http://www.';
$http_link = str_replace( $find, $replace, $permalink );


if ( !is_singular()) //if it is not a post or a page
  return;
  // echo '<meta property="fb:admins" content="625863218"/>';
  echo '<meta property="og:title" content="' . $output . '"/>';
  echo '<meta property="og:type" content="website"/>';
  echo '<meta property="og:url" content="' . $http_link . '"/>';
  echo '<meta property="og:site_name" content="' . wp_title() . '"/>';
  echo '<meta property="og:description" content="' . get_bloginfo('description') . '"/>';
if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image`
  $default_image="<?php bloginfo( 'url' ); ?>/wp-content/themes/responz/images/bswe-sax.png"; //replace this with a default image on your server or an image in your media library
  echo '<meta property="og:image" content="' . $default_image . '"/>';
}
else{
  $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
  echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
}
echo "
";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );

?>