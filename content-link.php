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
	<div class="entry-content">
		<h2><a href="<?php echo get_post_meta($post->ID, 'link-url', true); ?>"><?php the_title(); ?></a></h2>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
