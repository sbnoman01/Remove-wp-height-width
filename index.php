<?php


//Add this code inside functions.php 
//  To remove autogenarated height and width from wp_get_attachment_image() or get_post_thumbnail() etc
add_filter( 'wp_get_attachment_image', 'remove_width_attribute', 10 );
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}
