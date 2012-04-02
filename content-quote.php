<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 0.4.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		
	</article><!-- #post-<?php the_ID(); ?> -->
