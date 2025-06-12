<?php
/**
 * Register Guttenberg Blocks
 *
 * @package WPBoilerplaeACFBlocksTheme
 */

namespace WPBoilerplaeACFBlocksTheme\Core;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Guttenberg Blocks Class
 */
class Register_Blocks {
	use \WPBoilerplaeACFBlocksTheme\Traits\Singleton;

	/**
	 * Initialize
	 *
	 * @return  void
	 */
	private function initialize() {
		add_action( 'init', array( $this, 'register_blocks' ) );

		// add_filter( 'block_type_metadata_settings', function( $settings, $metadata ) {
		// 	if ( is_admin() ) {
		// 		return $settings;
		// 	}

		// 	add_action( 'wp_enqueue_scripts', function() use ( &$settings ) {
		// 		global $post;

		// 		if ( has_block( $settings['name'], $post->ID ) && str_starts_with( $settings['name'], 'acf/' ) ) {
		// 			foreach ( $settings['style_handles'] as $style_handle ) {
		// 				wp_enqueue_style( $style_handle );
		// 			}

		// 			$settings['style_handles'] = array();
		// 		}
		// 	});

		// 	return $settings;
		// }, 10, 2 );
	}

	/**
	 * Register Guttenberg Blocks
	 *
	 * @return  void
	 */
	public function register_blocks() {
		$block_directories = glob( THEME_DIR . '/build/blocks/*', GLOB_ONLYDIR );

        foreach ( $block_directories as $block ) {
            register_block_type( $block );
        }
	}
}
