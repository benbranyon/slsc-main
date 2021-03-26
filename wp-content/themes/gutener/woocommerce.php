<?php
/**
 * The template for displaying archived woocommerce products
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @package Gutener
 */
get_header(); 
?>
<div id="content" class="site-content">
	<div class="container">
		<section class="wrap-detail-page">
			<?php 
			if ( get_theme_mod( 'breadcrumbs_controls', 'disable_in_all_pages' ) == 'show_in_all_page_post'  ){gutener_breadcrumb_wrap();
			} ?>
			<div class="row">
				<?php
					$noSidebarClass = 'col-md-8 col-xl-9';
					$SidebarClass = '';
					if ( get_theme_mod( 'sidebar_settings', 'right' ) == 'no-sidebar' ){
						$noSidebarClass = 'col-12';
					}
					if ( get_theme_mod( 'sidebar_settings', 'right' ) == 'right' ){
						$SidebarClass = 'right-sidebar';
						if( !is_active_sidebar( 'right-sidebar') ){
							$SidebarClass = '';
							$noSidebarClass = 'col-12';
						}
					}
					if ( get_theme_mod( 'sidebar_settings', 'right' ) == 'right-left' ){
						$SidebarClass = 'left-sidebar right-sidebar';
						$noSidebarClass = 'col-lg-6';
						if( !is_active_sidebar( 'left-sidebar') && !is_active_sidebar( 'right-sidebar') ){
							$SidebarClass = '';
							$noSidebarClass = 'col-12';
						}
					}
					if ( get_theme_mod( 'sidebar_settings', 'right' ) == 'left' ){
						$SidebarClass = 'left-sidebar';
						if( !is_active_sidebar( 'left-sidebar') ){
							$SidebarClass = '';
							$noSidebarClass = 'col-12';
						}
						if( is_active_sidebar( 'left-sidebar') ){ ?>
							<div id="secondary" class="sidebar col-md-4 col-xl-3">
								<?php dynamic_sidebar( 'left-sidebar' ); ?>
							</div>
						<?php }
					}
					if ( get_theme_mod( 'sidebar_settings', 'right' ) == 'right-left' ){
						if( is_active_sidebar( 'left-sidebar') || is_active_sidebar( 'right-sidebar') ){ ?>
							<div id="secondary" class="sidebar col-lg-3">
								<?php dynamic_sidebar( 'left-sidebar' ); ?>
							</div>
						<?php
						}
					}
					?>
				<div id="primary" class="content-area <?php echo esc_attr($noSidebarClass), ' ', esc_attr($SidebarClass); ?>">
					<main id="main" class="site-main post-detail-content woocommerce-products" role="main">
						<?php if ( have_posts() ) :
							woocommerce_content();
						endif;
						?>
					</main><!-- #main -->
				</div><!-- #primary -->
				<?php
					if ( get_theme_mod( 'sidebar_settings', 'right' ) == 'right' ){
						if( is_active_sidebar( 'right-sidebar') ){ ?>
							<div id="secondary" class="sidebar col-md-4 col-xl-3">
								<?php dynamic_sidebar( 'right-sidebar' ); ?>
							</div>
						<?php }
					}
					if ( get_theme_mod( 'sidebar_settings', 'right' ) == 'right-left' ){
						if( is_active_sidebar( 'left-sidebar') || is_active_sidebar( 'right-sidebar') ){ ?>
							<div id="secondary" class="sidebar col-lg-3">
								<?php dynamic_sidebar( 'right-sidebar' ); ?>
							</div>
						<?php
						}
					}
				?>
			</div>
		</section>
<?php
get_footer();
