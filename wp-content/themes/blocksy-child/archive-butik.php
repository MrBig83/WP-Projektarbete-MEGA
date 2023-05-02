<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blocksy
 */
function my_theme_styles() {
    wp_enqueue_style('store-style', get_stylesheet_directory_uri() . "/style.css", array(), '1.0', 'all');
    
}
add_action( 'wp_enqueue_scripts', 'my_theme_styles', 99 );

get_header();

if( have_posts() ){
	while( have_posts() ){
		the_post();
		get_template_part('template-parts/archive');
		
	};
}; 

// if (
// 	! function_exists('elementor_theme_do_location')
// 	||
// 	! elementor_theme_do_location('archive')
// ) {
// 	get_template_part('template-parts/archive');
// }

get_footer();
