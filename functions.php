<?php
/**
 * WC Orlando Demo.
 *
 * @package wc-orl-2018
 */

/**
 * Load files in the /assets/ directory
 *
 * @since 1.0.0
 */
function child_theme_load_assets() {
	// Load the main stylesheet first.
	if ( is_child_theme() ) {
		wp_enqueue_style( 'parent-styles', trailingslashit( get_template_directory_uri() ) . 'style.css' );
	}

	// Load the main CSS file.
	wp_enqueue_style( 'child-styles', get_stylesheet_directory_uri() . '/css/main.css' );
}
add_action( 'wp_enqueue_scripts', 'child_theme_load_assets', 1 );
