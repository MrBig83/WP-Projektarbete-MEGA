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

add_filter( 'woocommerce_rest_check_permissions', 'dcwd_allow_rest_api_queries', 10, 4 );
function dcwd_allow_rest_api_queries( $permission, $context, $zero, $object ) {

    if(@$_GET['token']==='kaffe'){
        return true;  
    } else {
        return false;
    }
}

function ws_register_images_field() {
    register_rest_field( 
        'post',
        'images',
        array(
            'get_callback'    => 'ws_get_images_urls',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

//Kod för att akrivera kortkoder för ACF
add_filter('acf/format_value/type=textarea', 'do_shortcode');

function wc_remove_checkout_fields( $fields ){
	unset( $fields['billing']['billing_email'] );
	return $fields;	
}
add_filter( 'woocommerce_checkout_fields', 'wc_remove_checkout_fields' );

add_filter( 'woocommerce_review_order_after_submit', 'lmc' );
function lmc(){ ?>
	<p></p>
	Kundtjänst: 031-654654
	<br>
	<a href="http://localhost/WP-Projektarbete-MEGA/cart/">Ändra varukorg</a>
	<?php

}

?>