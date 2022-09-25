<?php
/**
 * Gutenify Photography: Block Patterns
 *
 * @since Gutenify Photography 1.0
 */

 /**
  * Get patterns content.
  *
  * @param string $file_name Filename.
  * @return string
  */
function gutenify_photography_get_pattern_content( $file_name ) {
	ob_start();
	include get_theme_file_path( '/inc/patterns/' . $file_name . '.php' );
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}

/**
 * Registers block patterns and categories.
 *
 * @since Gutenify Photography 1.0
 *
 * @return void
 */
function gutenify_photography_register_block_patterns() {

	$patterns = array(
		'header-default' => array(
			'title'      => __( 'Default header', 'gutenify-photography' ),
			'categories' => array( 'gutenify-photography' ),
			'blockTypes' => array( 'core/template-part/header' ),
		),
		'header-two' => array(
			'title'      => __( 'Header Two ', 'gutenify-photography' ),
			'categories' => array( 'gutenify-photography' ),
			'blockTypes' => array( 'core/template-part/header' ),
		),
		'header-three' => array(
			'title'      => __( 'Header Three', 'gutenify-photography' ),
			'categories' => array( 'gutenify-photography' ),
			'blockTypes' => array( 'core/template-part/header' ),
		),
		'footer-default' => array(
			'title'      => __( 'Default footer', 'gutenify-photography' ),
			'categories' => array( 'gutenify-photography' ),
			'blockTypes' => array( 'core/template-part/footer' ),
		),
		'home-banner' => array(
			'title'      => __( 'Home Banner', 'gutenify-photography' ),
			'categories' => array( 'gutenify-photography-banner' ),
		),
		'call-to-action' => array(
			'title'      => __( 'Call To Action', 'gutenify-photography' ),
			'categories' => array( 'gutenify-photography' ),
		),
		'gallery' => array(
			'title'      => __( 'Gallery', 'gutenify-photography' ),
			'categories' => array( 'gutenify-photography' ),
		),
		'service-one' => array(
			'title'      => __( 'Service One', 'gutenify-photography' ),
			'categories' => array( 'gutenify-photography' ),
		),
		'counter' => array(
			'title'      => __( 'Counter Up', 'gutenify-photography' ),
			'categories' => array( 'gutenify-photography' ),
		),
		'hero-section' => array(
			'title'      => __( 'Hero Section', 'gutenify-photography' ),
			'categories' => array( 'gutenify-photography' ),
		),
		'primary-sidebar' => array(
			'title'    => __( 'Primary Sidebar', 'gutenify-photography' ),
			'categories' => array( 'gutenify-photography' ),
		),
		'hidden-404' => array(
			'title'    => __( '404 content', 'gutenify-photography' ),
			'categories' => array( 'gutenify-photography' ),
		),
		'post-listing-single-column' => array(
			'title'    => __( 'Post Single Column', 'gutenify-photography' ),
			//'inserter' => false,
			'categories' => array( 'gutenify-photography' ),
		),
		'post-listing-two-column' => array(
			'title'    => __( 'Post Two Column', 'gutenify-photography' ),
			//'inserter' => false,
			'categories' => array( 'gutenify-photography' ),
		),
		'post-listing-three-column' => array(
			'title'    => __( 'Post Three Column', 'gutenify-photography' ),
			//'inserter' => false,
			'categories' => array( 'gutenify-photography' ),
		),
		'post-listing-four-column' => array(
			'title'    => __( 'Post Four Column', 'gutenify-photography' ),
			//'inserter' => false,
			'categories' => array( 'gutenify-photography' ),
		),
		'comment-section' => array(
			'title'    => __( 'Comment Section', 'gutenify-photography' ),
			'categories' => array( 'gutenify-photography' ),
		),
		'cover-with-post-title' => array(
			'title'    => __( 'Cover With Post Title', 'gutenify-photography' ),
			'categories' => array( 'gutenify-photography' ),
		),
		'cover-with-archive-title' => array(
			'title'    => __( 'Cover With Archive Title', 'gutenify-photography' ),
			'categories' => array( 'gutenify-photography' ),
		),
		'section-title' => array(
			'title'    => __( 'Section Title', 'gutenify-photography' ),
			'categories' => array( 'gutenify-photography' ),
		),
	);

	$block_pattern_categories = array(
		'gutenify-photography' => array( 'label' => __( 'Gutenify Photography', 'gutenify-photography' ) ),
		'gutenify-photography-footers' => array( 'label' => __( 'Footers', 'gutenify-photography' ) ),
		'gutenify-photography-headers' => array( 'label' => __( 'Headers', 'gutenify-photography' ) ),
		'gutenify-photography-pages'   => array( 'label' => __( 'Pages', 'gutenify-photography' ) ),
		'gutenify-photography-query'   => array( 'label' => __( 'Query', 'gutenify-photography' ) ),
		'gutenify-photography-sidebars'   => array( 'label' => __( 'Sidebars', 'gutenify-photography' ) ),
		'gutenify-photography-banner'   => array( 'label' => __( 'Banner Sections', 'gutenify-photography' ) ),
		'gutenify-photography-hero-section'   => array( 'label' => __( 'Hero Sections', 'gutenify-photography' ) ),
		'gutenify-photography-section-title'          => array( 'label' => __( 'Section Title', 'gutenify-photography' ) ),
		'gutenify-photography-Services'   => array( 'label' => __( 'Services', 'gutenify-photography' ) ),
		'gutenify-photography-gallery' => array( 'label' => __( 'Gallery', 'gutenify-photography' ) ),
		'gutenify-photography-comment-section'   => array( 'label' => __( 'Comment Sections', 'gutenify-photography' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Gutenify Photography 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'gutenify_photography_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Gutenify Photography 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$patterns = apply_filters( 'gutenify_photography_block_patterns', $patterns );

	foreach ( $patterns as $block_pattern => $pattern ) {
		$pattern['content'] = gutenify_photography_get_pattern_content( $block_pattern );
		register_block_pattern(
			'gutenify-photography/' . $block_pattern,
			$pattern
		);
	}
}
add_action( 'init', 'gutenify_photography_register_block_patterns', 9 );
