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

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				
				Powered by WordPress using my own TwentyFifteen child theme. The server is running ubuntu and nginx powering PHP-FPM with varnish caching installed.  <a href="http://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=video&cd=6&ved=0CEsQtwIwBQ&url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D-20zdelhi3I&ei=rO94T6iFG_LciALTzr2nDg&usg=AFQjCNFb6dydIL4-uQwVxBL45MUQoX1hpQ">Smokin!</a> 
				
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>