<?php
/**
 * Helper class for child theme functions.
 *
 * @author Greg Rickaby
 * @version 1.0.0
 * @package grd-bb-child
 * @link https://kb.wpbeaverbuilder.com/article/31-install-the-beaver-builder-theme-and-child-theme
 */

/**
 * FLChildTheme
 */
final class FLChildTheme {

	/**
	 * Enqueues scripts and styles.
	 *
	 * @author Greg Rickaby
	 */
	public static function enqueue_scripts() {

		// Register child theme styles and scripts.
		wp_register_style( 'fl-child-theme-styles', FL_CHILD_THEME_URL . '/dist/css/app.css', array(), '1.0.0' );
		wp_register_script( 'fl-child-theme-scripts', FL_CHILD_THEME_URL . '/dist/js/app.min.js', null, '1.0.0', true );

		// Enqueue child theme styles and scripts.
		wp_enqueue_style( 'fl-child-theme-styles' );
		wp_enqueue_script( 'fl-child-theme-scripts' );
	}
}
