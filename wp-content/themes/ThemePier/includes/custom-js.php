<?php
add_action( 'wp_enqueue_scripts', 'cherry_child_custom_scripts' );

function cherry_child_custom_scripts() {
	/**
	 * How to enqueue script?
	 *
	 * @link http://codex.wordpress.org/Function_Reference/wp_enqueue_script
	 */
	
	wp_enqueue_script( 'my_script', get_stylesheet_directory_uri() . '/js/my_script.js', array('jquery'), '1.0' );
	
	if ( !wp_script_is( 'googlemapapis', 'enqueued' ) ) {
		wp_enqueue_script( 'googlemapapis', '//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array( 'jquery' ), false, false );
	}
	
} ?>