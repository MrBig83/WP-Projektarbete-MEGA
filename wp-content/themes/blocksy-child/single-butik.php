<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Blocksy
 */
get_header();

function my_theme_styles() {
    wp_enqueue_style('store-style', get_stylesheet_directory_uri() . "/style.css", array(), '1.0', 'all');
    
}
add_action( 'wp_enqueue_scripts', 'my_theme_styles', 99 );

                            if( have_posts() ){
                                while( have_posts() ){
                                    the_post();
                                    //get_template_part('template-parts/content', 'archive');
									?>
									<h1 class="test"><?php the_title(); ?></h1>
									<p><?php the_field('ort'); ?></p>   
        <p>Haha</p>

									<?php
									
                                    
                                };
                            }; 
                      
// if (
// 	! function_exists('elementor_theme_do_location')
// 	||
// 	! elementor_theme_do_location('single')
// ) {
// 	get_template_part('template-parts/single');
// }

get_footer();

