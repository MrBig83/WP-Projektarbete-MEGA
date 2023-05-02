<?php
/**
 * Blocksy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blocksy
 */


// incherit parent theme styles

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri(). '/style.css');
}


function wc_remove_checkout_fields( $fields ){


	unset( $fields['billing']['billing_email'] );

	return $fields;	
}
add_filter( 'woocommerce_checkout_fields', 'wc_remove_checkout_fields' );

add_filter( 'woocommerce_review_order_after_submit', 'test' );

function test(){ ?>
	<p></p>
	Kundtjänst: 031-654654
	<br>
	<a href="http://localhost/WP-Projektarbete-MEGA/cart/">Ändra varukorg</a>
	<?php

}

// add_action('blocksy_header_before', function() {
// 	remove_action('blocksy_header', 'blocksy_print_header_wrapper_open', 10);
// 	remove_action('blocksy_header', 'blocksy_print_header_logo', 20);
// 	remove_action('blocksy_header', 'blocksy_print_header_wrapper_close', 30);
//   });
  
  



// if (version_compare(PHP_VERSION, '5.7.0', '<')) {
// 	require get_template_directory() . '/inc/php-fallback.php';
// 	return;
// }

// require get_template_directory() . '/inc/init.php';

?>