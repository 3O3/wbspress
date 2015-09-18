<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package WordPress
 * @subpackage wbsPress
 * @since wbsPress 1.0.0
 */

if ( ! function_exists( 'wbsPress_scripts' ) ) :
	function wbsPress_scripts() {
// Enqueue the main Stylesheet.
	wp_enqueue_style( 'main-stylesheet', get_stylesheet_directory_uri() . '/style.css' );
// Deregister the jquery version bundled with WordPress.
	wp_deregister_script( 'jquery' );
// Modernizr is used for polyfills and feature detection. Must be placed in header. (Not required).
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', array(), '2.8.3', false );
// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );
// add main js file
	wp_enqueue_script( 'all-min-js', get_template_directory_uri() . '/assets/js/all.min.js', array(), '2.8.3', false );
	}
	add_action( 'wp_enqueue_scripts', 'wbsPress_scripts' );
endif;
?>
