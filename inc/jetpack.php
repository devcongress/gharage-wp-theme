<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package DevCongress Gharage
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function dc_gharage_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'dc_gharage_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function dc_gharage_jetpack_setup
add_action( 'after_setup_theme', 'dc_gharage_jetpack_setup' );

function dc_gharage_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function dc_gharage_infinite_scroll_render