<?php
/**
 * Theme functions and definitions
 *
 * @package Gutener Charity NGO Charity NGO
 */

require get_stylesheet_directory() . '/inc/customizer/customizer.php';
require get_stylesheet_directory() . '/inc/customizer/loader.php';

if ( ! function_exists( 'gutener_charity_ngo_enqueue_styles' ) ) :
	/**
	 * @since Gutener Charity NGO 1.0.0
	 */
	function gutener_charity_ngo_enqueue_styles() {
		wp_enqueue_style( 'gutener-charity-ngo-style-parent', get_template_directory_uri() . '/style.css' );
	}

endif;
add_action( 'wp_enqueue_scripts', 'gutener_charity_ngo_enqueue_styles', 1 );

