<?php
/**
 * Header template
 *
 * @package WPBoilerplaeACFBlocksTheme
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class( $post->post_name ); ?>>
	<?php wp_body_open(); ?>
	<header>
		<nav>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
				)
			);
			?>
		</nav>
	</header>
