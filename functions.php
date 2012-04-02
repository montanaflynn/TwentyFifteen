<?php
/**
* @package WordPress
* @subpackage TwentyFifteen
* @since TwentyFifteen 0.3.0
*/

if ( ! function_exists( 'twentyeleven_posted_on' ) ) :
function twentyeleven_posted_on() {
	printf( __( '<span class="sep">Posted on </span><time class="entry-date" datetime="%3$s" pubdate>%4$s</time><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'twentyeleven' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'twentyeleven' ), get_the_author() ) ),
		get_the_author()
	);
}
endif;


if ( ! function_exists( 'site_footer_message' ) ) :
function footer_copyright() {
	echo "&copy; Copyright" . date("Y") . ", All Rights Reserved.";
}
endif;