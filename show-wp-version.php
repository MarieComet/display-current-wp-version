<?php
/*
 * Plugin Name: Display Current WP Version
 * Description: Show current WordPress version with shortcode [wp-version]
 * Version: 1.0.0
 * Author: Marie Comet
 * Author URI: https://mc-cpts.fr
 * License: GNU General Public License v3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: show-wp-version
 */

// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_shortcode( 'wp-version', 'swpv_version_shortcode' );
if ( ! function_exists( 'swpv_version_shortcode' ) ) {
	function swpv_version_shortcode( $atts ) {
		return get_bloginfo( 'version' );
	}
}