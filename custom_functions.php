<?php

function enqueue_styles_scripts() { 
	wp_enqueue_style('gfonts', get_stylesheet_directory_uri() . '/css/raleway.css');
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');

	// Remember to comment out enqueueing of navigation.js in functions.php
	// Note jquery listed as dependancy which prompts WP to load it
	wp_enqueue_script( 'testtheme-navigation', get_template_directory_uri() . '/js/navigation-custom.js', array('jquery') );
	
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js' );
	wp_enqueue_script( 'REM-unit-polyfill', get_template_directory_uri() . '/js/rem.js', false, false, true );
} 

add_action('wp_enqueue_scripts', 'enqueue_styles_scripts');


// Activate support for featured images
add_theme_support( 'post-thumbnails' );

// Set the post thumbnail default size to suit the theme layout
set_post_thumbnail_size( 811, 456, true );

// Add a div wrapper around the "Continue Reading" button
// From https://tommcfarlin.com/more-tag-wrapper/
function add_continue_wrapper( $link, $text ) {
	$html = '<div class="continue_btn">' . $link . '</div>';
	return $html;
}
add_action( 'the_content_more_link', 'add_continue_wrapper', 10, 2 );


// Register custom widget locations
register_sidebar(
	array(
		'name' => __("Above Header", "soar"),
		'id' => 'aboveheader',
		'description' => 'Above header and menu, right aligned, use for social icons',
		'before_widget' => "<div class='aboveheader'>",
		'after_widget' => "</div>"
	)
);

register_sidebar(
	array(
		'name' => __("Above Content Area", "soar"),
		'id' => 'abovecontent',
		'description' => 'Front page only, use for sliders',
		'before_widget' => "<div class='abovecontent'>",
		'after_widget' => "</div>"
	)
);

?>