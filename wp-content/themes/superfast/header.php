<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Superfast
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head <?php echo superfast_itemtype_schema( 'WebSite' ); ?>>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
$chrome_color = get_theme_mod( 'gmr_chrome_mobile_color' );
if ( $chrome_color ) :
$color = sanitize_hex_color( $chrome_color );
?>
<meta name="theme-color" content="<?php echo $color; ?>" />
<?php 
endif; 
?>
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php echo superfast_itemtype_schema( 'WebPage' ); ?>>

<div class="site inner-wrap" id="site-container">
	
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'superfast' ); ?></a>
	
	<?php 
		global $post;
		
		// Prevent error in 404 page
		$id = ( isset( $post->ID ) ? get_the_ID() : NULL );
		
		$header_display = get_post_meta( $id, '_gmr_header_key', true ); 
		
		if ( ! $header_display || is_search() ) :
	?>
				
		<?php
		// Menu style via customizer
		$menu_style = get_theme_mod( 'gmr_menu_style', 'gmr-boxmenu' );
			
		// Disable top navigation via customizer
		$topnav = get_theme_mod( 'gmr_active-topnavigation', 0 );
		?>

		<header id="masthead" class="site-header" role="banner" <?php echo superfast_itemtype_schema( 'WPHeader' ); ?>>
		
			<?php if ( $topnav === 0 ) : ?>
				<div class="gmr-secondmenuwrap clearfix">
					<div class="container">
						<?php // Second top menu
							if ( has_nav_menu( 'secondary' ) ) {
						?>
							<nav id="site-navigation" class="gmr-secondmenu" role="navigation" <?php echo superfast_itemtype_schema( 'SiteNavigationElement' ); ?>>
								<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container' => 'ul', 'fallback_cb' => '', 'menu_id' => 'primary-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
							</nav><!-- #site-navigation -->
						<?php 
							} 
						?>							
						<nav id="site-navigation" class="gmr-social-icon" role="navigation" <?php echo superfast_itemtype_schema( 'SiteNavigationElement' ); ?>>
							<ul class="pull-right">
								<?php 
									$fb_url = get_theme_mod( 'gmr_fb_url_icon' );  
									if ( $fb_url ) :
										echo '<li><a href="' . esc_url($fb_url) . '" title="' . __( 'Facebook','superfast' ) . '" rel="nofollow"><span class="social_facebook"></span></a></li>';
									endif;

									$twitter_url = get_theme_mod( 'gmr_twitter_url_icon' );  
									if ( $twitter_url ) :
										echo '<li><a href="' . esc_url($twitter_url) . '" title="' . __( 'Twitter','superfast' ) . '" rel="nofollow"><span class="social_twitter"></span></a></li>';
									endif;
									
									$pinterest_url = get_theme_mod( 'gmr_pinterest_url_icon' );  
									if ( $pinterest_url ) :
										echo '<li><a href="' . esc_url($pinterest_url) . '" title="' . __( 'Pinterest','superfast' ) . '" rel="nofollow"><span class="social_pinterest"></span></a></li>';
									endif;
									
									$googleplus_url = get_theme_mod( 'gmr_googleplus_url_icon' );  
									if ( $googleplus_url ) :
										echo '<li><a href="' . esc_url($googleplus_url) . '" title="' . __( 'Google Plus','superfast' ) . '" rel="nofollow"><span class="social_googleplus"></span></a></li>';
									endif;
									
									$tumblr_url = get_theme_mod( 'gmr_tumblr_url_icon' );  
									if ( $tumblr_url ) :
										echo '<li><a href="' . esc_url($tumblr_url) . '" title="' . __( 'Tumblr','superfast' ) . '" rel="nofollow"><span class="social_tumblr"></span></a></li>';
									endif;
									
									$stumbleupon_url = get_theme_mod( 'gmr_stumbleupon_url_icon' );  
									if ( $stumbleupon_url ) :
										echo '<li><a href="' . esc_url($stumbleupon_url) . '" title="' . __( 'Stumbleupon','superfast' ) . '" rel="nofollow"><span class="social_tumbleupon"></span></a></li>';
									endif;
									
									$wordpress_url = get_theme_mod( 'gmr_wordpress_url_icon' );  
									if ( $wordpress_url ) :
										echo '<li><a href="' . esc_url($wordpress_url) . '" title="' . __( 'Wordpress','superfast' ) . '" rel="nofollow"><span class="social_wordpress"></span></a></li>';
									endif;
									
									$instagram_url = get_theme_mod( 'gmr_instagram_url_icon' );  
									if ( $instagram_url ) :
										echo '<li><a href="' . esc_url($instagram_url) . '" title="' . __( 'Instagram','superfast' ) . '" rel="nofollow"><span class="social_instagram"></span></a></li>';
									endif;
									
									$dribbble_url = get_theme_mod( 'gmr_dribbble_url_icon' );  
									if ( $dribbble_url ) :
										echo '<li><a href="' . esc_url($dribbble_url) . '" title="' . __( 'Dribbble','superfast' ) . '" rel="nofollow"><span class="social_dribbble"></span></a></li>';
									endif;
									
									$vimeo_url = get_theme_mod( 'gmr_vimeo_url_icon' );  
									if ( $vimeo_url ) :
										echo '<li><a href="' . esc_url($vimeo_url) . '" title="' . __( 'Vimeo','superfast' ) . '" rel="nofollow"><span class="social_vimeo"></span></a></li>';
									endif;
									
									$linkedin_url = get_theme_mod( 'gmr_linkedin_url_icon' );  
									if ( $linkedin_url ) :
										echo '<li><a href="' . esc_url($linkedin_url) . '" title="' . __( 'Linkedin','superfast' ) . '" rel="nofollow"><span class="social_linkedin"></span></a></li>';
									endif;
									
									$deviantart_url = get_theme_mod( 'gmr_deviantart_url_icon' );  
									if ( $deviantart_url ) :
										echo '<li><a href="' . esc_url($deviantart_url) . '" title="' . __( 'Deviantart','superfast' ) . '" rel="nofollow"><span class="social_deviantart"></span></a></li>';
									endif;
									
									$myspace_url = get_theme_mod( 'gmr_myspace_url_icon' );  
									if ( $myspace_url ) :			
										echo '<li><a href="' . esc_url($myspace_url) . '" title="' . __( 'Myspace','superfast' ) . '" rel="nofollow"><span class="social_myspace"></span></a></li>';
									endif;
									
									$skype_url = get_theme_mod( 'gmr_skype_url_icon' );  
									if ( $skype_url ) :
										echo '<li><a href="' . esc_url($skype_url) . '" title="' . __( 'Skype','superfast' ) . '" rel="nofollow"><span class="social_skype"></span></a></li>';
									endif;
									
									$youtube_url = get_theme_mod( 'gmr_youtube_url_icon' );  
									if ( $youtube_url ) :
										echo '<li><a href="' . esc_url($youtube_url) . '" title="' . __( 'Youtube','superfast' ) . '" rel="nofollow"><span class="social_youtube"></span></a></li>';
									endif;
									
									$picassa_url = get_theme_mod( 'gmr_picassa_url_icon' );  
									if ( $picassa_url ) :	
										echo '<li><a href="' . esc_url($picassa_url) . '" title="' . __( 'Picassa','superfast' ) . '" rel="nofollow"><span class="social_picassa"></span></a></li>';
									endif;
									
									$flickr_url = get_theme_mod( 'gmr_flickr_url_icon' );  
									if ( $flickr_url ) :	
										echo '<li><a href="' . esc_url($flickr_url) . '" title="' . __( 'Flickr','superfast' ) . '" rel="nofollow"><span class="social_flickr"></span></a></li>';
									endif;
									
									$blogger_url = get_theme_mod( 'gmr_blogger_url_icon' );  
									if ( $blogger_url ) :	
										echo '<li><a href="' . esc_url($blogger_url) . '" title="' . __( 'Blogger','superfast' ) . '" rel="nofollow"><span class="social_blogger"></span></a></li>';
									endif;
									
									$spotify_url = get_theme_mod( 'gmr_spotify_url_icon' );  
									if ( $spotify_url ) :	
										echo '<li><a href="' . esc_url($spotify_url) . '" title="' . __( 'Spotify','superfast' ) . '" rel="nofollow"><span class="social_spotify"></span></a></li>';
									endif;
									
									$delicious_url = get_theme_mod( 'gmr_delicious_url_icon' );  
									if ( $delicious_url ) :
										echo '<li><a href="' . esc_url($delicious_url) . '" title="' . __( 'Delicious','superfast' ) . '" rel="nofollow"><span class="social_delicious"></span></a></li>';
									endif;
			
									// Disable rss icon via customizer
									$rssicon = get_theme_mod( 'gmr_active-rssicon', 0 );
									if ( $rssicon === 0 ) :
										echo '<li><a href="' . get_bloginfo('rss2_url') . '" title="' . __( 'RSS','superfast' ) . '" rel="nofollow"><span class="social_rss"></span></a></li>';
									endif;
									
									if ( has_nav_menu( 'secondary' ) ) {
										echo '<li id="gmr-secondaryresponsive-menu"><a href="#secondmenus" title="' . __( 'Menus','superfast' ) . '" rel="nofollow"><span class="icon_menu-square_alt2"></span> ' . __( 'Menu','superfast' ) . '</a></li>';
									}
								?>
							</ul>
						</nav><!-- #site-navigation -->	
					</div>
				</div>
			<?php endif; ?>
			
		<?php
			$enable_logo = get_theme_mod( 'gmr_active-logosection', 0 );
			if ( $enable_logo === 0 ) {
		?>
				<div class="container">
					<div class="clearfix gmr-headwrapper">
						<?php 
							do_action( 'gmr_the_custom_logo' );
							do_action( 'idblog_core_top_banner' );
						?>
					</div>
				</div>
				
		<?php 	
			}
		?>
			
			<div class="top-header">
				<?php if ( $menu_style == 'gmr-boxmenu' ) : ?>
				<div class="container">
				<?php endif; ?>
					<div class="gmr-menuwrap clearfix">
					<?php if ( $menu_style == 'gmr-fluidmenu' ) : ?>
					<div class="container">
					<?php endif; ?>
						<a id="gmr-responsive-menu" href="#menus">
							<?php esc_html_e( 'MENU', 'superfast' ); ?>
						</a>
						<nav id="site-navigation" class="gmr-mainmenu" role="navigation" <?php echo superfast_itemtype_schema( 'SiteNavigationElement' ); ?>>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'ul', 'menu_id' => 'primary-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div><!-- .top-header -->
		</header><!-- #masthead -->

	<?php 	
		endif;
	?>

	<?php if ( ! is_page_template('page_builder.php') ) : ?>
		<div id="content" class="gmr-content">
		
			<?php 
				$setting = 'gmr_slider_shortcode';
				$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
				if ( isset($mod) && !empty($mod) && is_front_page() ) {
			?>
				<div class="gmr-slider">
					<div class="container">
						<?php echo do_shortcode($mod); ?>
					</div>
				</div>
			<?php
				}
			?>
		
			<?php do_action( 'idblog_core_top_banner_after_menu' ); ?>
			<div class="container">
				<div class="row">
					<?php do_action( 'idblog_core_view_breadcrumbs' ); ?>
	<?php endif; ?>