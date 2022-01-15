<?php
/**
 * Register blocks.
 */

if ( ! function_exists( 'dwpv_register_blocks' ) ) {
	function dwpv_register_blocks() {
		register_block_type(
			DWPV_PATH,
			array(
				'render_callback'   => 'dwpv_block_version_render_callback'
			)
		);
	}
}
add_action( 'init', 'dwpv_register_blocks' );


/**
 * Renders the `dwpv/version` block on server.
 *
 * @param array $attributes The block attributes.
 *
 * @return string Returns WP Version.
 */
if ( ! function_exists( 'dwpv_block_version_render_callback' ) ) {
	function dwpv_block_version_render_callback( $attributes, $content ) {
		$wrapper_attributes = get_block_wrapper_attributes();
		ob_start();
		printf(
			'<span %s>%s</span>',
			$wrapper_attributes,
			get_bloginfo( 'version' )
		);
		return ob_get_clean();
	}
}