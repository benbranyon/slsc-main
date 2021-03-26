<?php
/**
 * Template part for displaying site info
 *
 * @package Gutener
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( get_theme_mod( 'footer_text', '' ) ) ); ?>
</div><!-- .site-info -->