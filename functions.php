<?php
/**
 * Theme functions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package grd-bb-child
 */

namespace GRD\Functions;

// Instantiate the child theme.
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );
require_once 'classes/class-flchildtheme.php';
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 999 );

/**
 * Theme setup.
 *
 * @link https://developer.wordpress.org/reference/hooks/after_setup_theme/
 * @author Greg Rickaby
 */
function theme_setup() {
	add_image_size( 'eight-fifty-three', 853, 480, array( 'center', 'center' ) );
	add_image_size( 'seven-twenty', 1280, 720, array( 'center', 'center' ) );
	add_image_size( 'full-width', 1920, 1080, array( 'center', 'center' ) );
}
add_action( 'after_setup_theme', 'GRD\Functions\theme_setup' );

/**
 * Inform Beaver Builder of the custom image sizes.
 *
 * @param array $sizes A list of image sizes.
 * @return array
 * @author Greg Rickaby
 */
function insert_custom_image_sizes( $sizes ) {
	global $_wp_additional_image_sizes;

	if ( empty( $_wp_additional_image_sizes ) ) {
		return $sizes;
	}

	foreach ( $_wp_additional_image_sizes as $id => $data ) {
		if ( ! isset( $sizes[ $id ] ) ) {
			$sizes[ $id ] = ucfirst( str_replace( '-', ' ', $id ) );
		}
	}
	return $sizes;
}
add_filter( 'image_size_names_choose', 'GRD\Functions\insert_custom_image_sizes' );

/**
 * Add scripts to the footer.
 *
 * @author Greg Rickaby
 */
function footer_scripts() {
	?>
	<?php
}
add_action( 'wp_footer', 'GRD\Functions\footer_scripts', 99 );


if ( WPSEO_NAMESPACES ) {

	/**
	 * Move Yoast SEO below post content.
	 *
	 * @author Greg Rickaby
	 * @return string
	 */
	function move_yoastseo_metabox() {
		return 'low';
	}

	add_filter( 'wpseo_metabox_prio', 'GRD\Functions\move_yoastseo_metabox' );
}

