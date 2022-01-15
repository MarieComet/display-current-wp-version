<?php
/*
 * Plugin Name: Display Current WP Version
 * Description: Show current WordPress version with shortcode [wp-version]
 * Version: 1.0.0
 * Author: Marie Comet
 * Author URI: https://mariecomet.fr
 * License: GNU General Public License v3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: display-current-wp-version
 */

// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'DWPV_PATH' ) ) {
    define( 'DWPV_PATH', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'DWPV_URL' ) ) {
    define( 'DWPV_URL', plugin_dir_url( __FILE__ ) );
}

add_shortcode( 'wp-version', 'dwpv_version_shortcode' );
if ( ! function_exists( 'dwpv_version_shortcode' ) ) {
	function dwpv_version_shortcode( $atts ) {
		return get_bloginfo( 'version' );
	}
}

/**
 * Load files
 */
add_action( 'plugins_loaded', 'dwpv_load_files' );
function dwpv_load_files() {
	require_once DWPV_PATH . 'inc/blocks.php';
}