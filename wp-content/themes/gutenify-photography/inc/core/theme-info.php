<?php
/**
 * Add theme page
 */
function gutenify_photography_menu() {
	add_theme_page( esc_html__( 'Gutenify Photography', 'gutenify-photography' ), esc_html__( 'Gutenify Theme', 'gutenify-photography' ), 'edit_theme_options', 'gutenify-photography-info', 'gutenify_photography_theme_page_display' );
}
add_action( 'admin_menu', 'gutenify_photography_menu' );

/**
 * Display About page
 */
function gutenify_photography_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info.php';
}
