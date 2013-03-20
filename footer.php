<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage TwentyFifteen
 * @since TwentyFifteen 0.3.0
 */
?>
</div>
	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
    <div class="content">
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				
				<?php footer_copyright(); ?>
				
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



<img style="position: fixed; bottom: 0; right: 0; border: 0;z-index:20000" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/resize-me.png" alt="Responsive Design Resize Browser">

</body>
</html>