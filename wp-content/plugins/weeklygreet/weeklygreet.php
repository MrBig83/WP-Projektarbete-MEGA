<?php
/*
Plugin Name: Weekly Greet
Description: Ett plugin för att visa en välkomsthälsning. ===== Pluginet innehåller även en egen post-typ (news), där användaren kan lägga till nyheter efter behov. 
*/

//Enqueue stylesheet


function my_plugin_styles() {
    wp_enqueue_style('greet-style', plugins_url('weeklygreet', 'weeklygreet' ) . "/greet-style.css", array(), '1.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'my_plugin_styles' );


//Nedan är custom post types

function custom_post_type() {

    $labels = array(
        'name' => 'Hälsning',
        'singular_name' => 'Hälsning',
        'add_new' => 'Lägg till',
        'add_new_item' => 'Lägg till Hälsning',
        'edit_item' => 'Redigera Hälsning',
        'new_item' => 'Lägg till Hälsning',
        'view_item' => 'Visa Hälsning',
        'search_items' => 'Sök efter Hälsning',
        'not_found' =>  'Inga Hälsningar hittade',
        'not_found_in_trash' => 'Inga Hälsningar i papperskorgen',
        'parent_item_colon' => ''
        
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => false,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'greet' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title' )
    );

    register_post_type( 'greet', $args );
}
add_action( 'init', 'custom_post_type' );




function greet(){
    
    // Define the query arguments
$args = array(
    'post_type' => 'greet',
    'posts_per_page' => 1,
);

// Run the query
$custom_query = new WP_Query( $args );

// Check if there are any posts
if ( $custom_query->have_posts() ) {
    // Start the loop
    while ( $custom_query->have_posts() ) {
        $custom_query->the_post();
        // Display the post content
        ?>
            <div class="greet">
                <h3 class="greet_text"><?php the_title(); ?></h3>
            </div>
    <hr>
        <?php
    }
    // Reset the post data
    wp_reset_postdata();
} else {
    // If no posts are found, display a message
    echo 'No greets found.';
}




}


        
// function _greet(){
//     echo '<p class="greet">Detta är en häsadfasdfalsning</p>'. the_title();
// }

//Ovan är custom post types


add_action( 'woocommerce_archive_description', 'greet');
// function greet(){
//     echo '<p class="greet">Detta är en häsadfasdfalsning</p>'. the_title();
// }





?>


