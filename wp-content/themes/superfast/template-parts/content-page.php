<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Superfast
 */
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Disable meta data options via customizer
$metadata = get_theme_mod( 'gmr_active-metasingle', 0 );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php echo superfast_itemtype_schema( 'CreativeWork' ); ?>>

	<div class="gmr-box-content gmr-single">
		<header class="entry-header">
			<?php the_title( '<h1 class="title" ' . superfast_itemprop_schema( 'headline' ) . '>', '</h1>' ); ?>
			<div class="screen-reader-text">
				<?php 
				if ( $metadata === 0 ) :
					gmr_posted_on(); 
				endif;				
				?>
			</div>
		</header><!-- .entry-header -->
		
		<div class="entry-content entry-content-page" <?php echo superfast_itemprop_schema( 'text' ); ?>>
			<?php
				the_content();
			?>
		</div><!-- .entry-content -->

		<?php edit_post_link( __( 'Edit', 'superfast' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
		
	</div><!-- .gmr-box-content -->
	
</article><!-- #post-## -->