<?php
/**
 * Footer template
 *
 * @package WPBoilerplaeACFBlocksTheme
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
	<footer>
		<div class="copyright">
			<?php esc_html_e( 'All Rights Reserved', 'wordpress-boilerplate-acf-blocks-theme' ); ?>
			&copy;
			<?php echo esc_html( gmdate( 'Y' ) ); ?>
		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>
