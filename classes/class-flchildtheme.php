<?php
/**
 * Extend child theme with Beaver Builder.
 *
 * @class FLChildTheme
 * @package grd-bb-child
 */

/**
 * Helper class for child theme functions.
 */
final class FLChildTheme {
	/**
	 * Enqueue styles and scripts.
	 *
	 * @author Greg Rickaby <greg@gregrickaby.com>
	 * @return void
	 */
	public static function enqueue_scripts() {

		// Setup paths and assets.
		$asset_file      = require get_stylesheet_directory() . '/build/index.asset.php';
		$frontend_style  = FL_CHILD_THEME_URL . '/build/index.css';
		$frontend_script = FL_CHILD_THEME_URL . '/build/index.js';

		// Register child theme styles.
		wp_register_style(
			'fl-child-theme-styles',
			$frontend_style,
			[],
			$asset_file['version']
		);

		// Register child theme scripts.
		wp_register_script(
			'fl-child-theme-scripts',
			$frontend_script,
			$asset_file['dependencies'],
			$asset_file['version'],
			true
		);

		// Disable Gutenberg styles.
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );

		// Enqueue child theme styles and scripts.
		wp_enqueue_style( 'fl-child-theme-styles' );
		wp_enqueue_script( 'fl-child-theme-scripts' );
	}
}
