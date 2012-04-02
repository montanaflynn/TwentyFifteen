<?php
/**
 * Template Name: Blog Template
 * Description: Displays latest posts
 *
 * @package WordPress
 * @subpackage TwentyFifteen
 * @since TwentyFifteen 0.2.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php /* Start the Loop */ ?>

				<?php
					$temp = $wp_query;
					$wp_query= null;
					$wp_query = new WP_Query();
					$wp_query->query('paged='.$paged);
					while ($wp_query->have_posts()) : $wp_query->the_post();
				?>
				
				<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>
				
				<?php wp_pagenavi(); ?>
				
				<?php $wp_query = null; $wp_query = $temp;?>
			
				

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>