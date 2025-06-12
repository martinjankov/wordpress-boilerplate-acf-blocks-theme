<?php
/**
 * Theme functions
 *
 * @package           WPBoilerplaeACFBlocksTheme
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'THEME_DIR' ) ) {
	define( 'THEME_DIR', trailingslashit( get_template_directory() ) );
}

if ( ! defined( 'THEME_URL' ) ) {
	define( 'THEME_URL', trailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'THEME_VERSION' ) ) {
	define( 'THEME_VERSION', 1 );
}

if ( ! function_exists( 'wpdd' ) ) {
	/**
	 * Print Debug information
	 *
	 * @param   mixed $data  The data to be printed.
     * @param   bool  $exit  Should it die or not.
	 *
	 * @return  void
	 */
	function wpdd( $data, $exit = true ) {
		echo '<pre>' . print_r( $data, true ) . '</pre>'; // phpcs:ignore

        if ( $exit ) {
            die;
        }
	}
}

// Require modules.
require_once THEME_DIR . 'inc/init.php';

/**
 * Sets up theme defaults and registers the various WordPress features
 */
function wp_boilerplate_theme_setup() {
	load_theme_textdomain( 'wordpress-boilerplate-acf-blocks-theme', THEME_DIR . '/languages' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	add_theme_support( 'title-tag' );

	register_nav_menu( 'primary', esc_html__( 'Main Menu', 'martincv' ) );
	register_nav_menu( 'footer', esc_html__( 'Footer Menu', 'martincv' ) );

	add_theme_support( 'post-thumbnails' );

	add_theme_support(
		'html5',
		array(
			'search-form',
		)
	);

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
}
add_action( 'after_setup_theme', 'wp_boilerplate_theme_setup' );

function wp_custom_scripts_and_styles() {
	wp_enqueue_style( 'wp-block-library' );

	$assets_info = include THEME_DIR . 'build/theme/index.asset.php';

	wp_enqueue_style( 'wp-theme-main', THEME_URL . 'build/theme/index.css', array(), $assets_info['version'] );
	wp_enqueue_script( 'wp-theme-main', THEME_URL . 'build/theme/index.js', $assets_info['dependencies'], $assets_info['version'] );
}
add_action( 'wp_enqueue_scripts', 'wp_custom_scripts_and_styles' );
