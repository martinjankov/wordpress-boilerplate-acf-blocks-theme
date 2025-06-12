<?php
/**
 * Init file
 *
 * @package WPBoilerplaeACFBlocksTheme
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once THEME_DIR . 'inc/core/autoloader.php';

WPBoilerplaeACFBlocksTheme\Core\Register_Blocks::get_instance();
