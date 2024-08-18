<?php
/**
 * Set up Compilation theme
 */

if ( ! function_exists( 'compilation_setup' ) ) {
	function compilation_setup() {

		// Add translation
		load_theme_textdomain( 'compilation', get_template_directory() . '/languages' );

		// Enqueue editor stylesheet
		add_editor_style( get_template_directory_uri() . '/style.css' );

		// Remove core block patterns, we don't need that
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'compilation_setup' );

/**
 * Enqueue stylesheet
 */
function compilation_enqueue_stylesheet() {

	wp_enqueue_style( 'compilation', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'compilation_enqueue_stylesheet' );

/**
 * Block pattern category
 */
function compilation_register_block_pattern_categories() {

	register_block_pattern_category(
		'compilation-pages',
		array(
			'label'       => __( 'Pages', 'compilation' ),
			'description' => __( 'Full page patterns included with the Compilation theme', 'compilation' ),
		)
	);
	register_block_pattern_category(
		'compilation-headers',
		array(
			'label'       => __( 'Headers', 'compilation' ),
			'description' => __( 'Header patterns included with the Compilation theme', 'compilation' ),
		)
	);

	register_block_pattern_category(
		'compilation-heroes',
		array(
			'label'       => __( 'Heroes', 'compilation' ),
			'description' => __( 'Hero patterns included with the Compilation theme', 'compilation' ),
		)
	);

	register_block_pattern_category(
		'compilation-footers',
		array(
			'label'       => __( 'Footers', 'compilation' ),
			'description' => __( 'Footer patterns included with the Compilation theme', 'compilation' ),
		)
	);

	register_block_pattern_category(
		'compilation-posts',
		array(
			'label'       => __( 'Posts', 'compilation' ),
			'description' => __( 'Post patterns included with the Compilation theme', 'compilation' ),
		)
	);

	
	register_block_pattern_category(
		'compilation-cat',
		array(
			'label'       => __( 'Categories', 'compilation' ),
			'description' => __( 'Taxonomy patterns included with the Compilation theme', 'compilation' ),
		)
	);

}

add_action( 'init', 'compilation_register_block_pattern_categories' );


/**
 * Add block style variations
 */
function compilation_register_block_styles() {

	$block_styles = array(
		'core/query-pagination' => array(
			'pagination-button' => __( 'Compilation', 'compilation' ),
		),
		'core/categories' => array(
			'category-block' => __( '4 Column', 'compilation' ),			
			'category-block-3c' => __( '3 Column', 'compilation' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'compilation_register_block_styles' );

/**
 * Load custom block styles only when the block is used
 */
function compilation_enqueue_custom_block_styles() {

	// Scan the css folder to locate block styles.
	$files = glob( get_template_directory() . '/assets/css/*.css' );

	foreach ( $files as $file ) {

		// Get the filename and core block name.
		$filename   = basename( $file, '.css' );
		$block_name = str_replace( 'core-', 'core/', $filename );

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => "compilation-block-{$filename}",
				'src'    => get_theme_file_uri( "assets/css/{$filename}.css" ),
				'path'   => get_theme_file_path( "assets/css/{$filename}.css" ),
			)
		);
	}
}
add_action( 'init', 'compilation_enqueue_custom_block_styles' );