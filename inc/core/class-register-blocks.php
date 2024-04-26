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
		add_filter( 'should_load_separate_core_block_assets', '__return_true' );
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
