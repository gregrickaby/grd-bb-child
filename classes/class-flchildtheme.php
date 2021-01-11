<?php
/**
 * Helper class for child theme functions.
 *
 * @author Greg Rickaby
 * @version 1.0.0
 * @package grd-bb-child
 * @link https://kb.wpbeaverbuilder.com/article/31-install-the-beaver-builder-theme-and-child-theme
 */

// @codingStandardsIgnoreStart
final class FLChildTheme {

	public static function enqueue_scripts() {

		// Set up our files and paths.
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
// @codingStandardsIgnoreEnd
