<?php
/**
* Loads all the components related to customizer 
*
* @since Gutener Charity NGO 1.0.0
*/

function gutener_charity_ngo_default_styles(){

	// begin style block
	$css = '<style>';

	# Colors
	$site_primary_color = get_theme_mod( 'site_primary_color', '#ffd012' );
	$blog_post_category_color = get_theme_mod( 'blog_post_category_color', '#ffd012' );
	$notification_bar_button_background_color = get_theme_mod( 'notification_bar_button_background_color', '#f9a032' );
	$notification_bar_button_text_color = get_theme_mod( 'notification_bar_button_text_color', '#ffffff' );
	$css .= '
		/* Primary Background */
		.section-title:before, .button-primary, .woocommerce span.onsale, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
			background-color: '. esc_attr( $site_primary_color ) .';
		}
		/* Primary Border */		
		.post .entry-content .entry-header .cat-links a, .attachment .entry-content .entry-header .cat-links a, .banner-content .entry-content .entry-header .cat-links a {
			border-color: '. esc_attr( $site_primary_color ) .';
		}
		/* Primary Color */
	 	blockquote:before, .post .entry-content .entry-header .cat-links a, .attachment .entry-content .entry-header .cat-links a, .banner-content .entry-content .entry-header .cat-links a, .post .entry-meta a:before, .attachment .entry-meta a:before, .banner-content .entry-meta a:before {
			color: '. esc_attr( $site_primary_color ) .';
		}
	';

	$css .= '
		.post .entry-content .entry-header .cat-links a,
		.banner-content .entry-content .entry-header .cat-links a {
			color: '. esc_attr( $blog_post_category_color ) .';
		}
	';

	$css .= '
		.post .entry-content .entry-header .cat-links a, 
		.attachment .entry-content .entry-header .cat-links a, 
		.banner-content .entry-content .entry-header .cat-links a {
			border-color: '. esc_attr( $blog_post_category_color ) .';
		}
	';

	$css .= '
		.notification-bar .button-primary {
			background-color: '. esc_attr( $notification_bar_button_background_color ) .';
			color: '. esc_attr( $notification_bar_button_text_color ) .';
		}
		.notification-bar .button-primary:hover,
		.notification-bar .button-primary:focus,
		.notification-bar .button-primary:active {
			color: #ffffff;
		}
	';

	// end style block
	$css .= '</style>';

	// return generated & compressed CSS
	echo str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css); 
}
add_action( 'wp_head', 'gutener_charity_ngo_default_styles', 99 );