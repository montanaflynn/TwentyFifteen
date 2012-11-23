<?php
/**
 * The template for displaying posts in the Link Post Format on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 0.5.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
			<hgroup>
				<h2 class="entry-title"><a href="<?php echo get_post_meta($post->ID, 'link-url', true); ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
			</hgroup>

		</header><!-- .entry-header -->

</article><!-- #post-<?php the_ID(); ?> -->
