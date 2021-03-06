<?php
/**
 * @package themebergerbasic
 */


/* SUPPORT for Plugin POST KINDS */

function remove_kind_view() {
	remove_filter( 'the_content', array( 'Kind_View', 'content_response' ), 9 );
	remove_filter( 'the_excerpt', array( 'Kind_View', 'excerpt_response' ), 9 );
}
add_action( 'wp_loaded', 'remove_kind_view' );

function remove_kind_style() {
	wp_dequeue_style( 'kind' );
}
add_action( 'wp_print_styles', 'remove_kind_style', 100 );

function manipulate_response_display( $content ) {
	// phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_print_r
	print_r( '<!-- POST KIND -->' . "\n\r\n\r" );
	// phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_print_r
	print_r( $content );
	// phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_print_r
	print_r( "\n\r\n\r" . '<!-- / POST KIND -->' );
}
add_filter( 'kind_response_display_x', 'manipulate_response_display' );

/**/

/* SUPPORT for Plugin SYNDICATION LINKS */

if ( function_exists( 'get_post_syndication_links' ) ) :

	function remove_syndication_view() {
		remove_filter( 'the_content', array( 'Syn_Config', 'the_content' ), 30 );
	}
	add_action( 'init', 'remove_syndication_view', 11 );

	function add_syndication_view() {
		if ( is_single() || is_singular() ) {
			echo wp_kses( '<div id="syndication-links">' . get_post_syndication_links() . '</div>', THEMEBERGER_HTML );
		}
	}
	add_action( 'marlon_entry_footer', 'add_syndication_view', 50 );

	function remove_syndication_style() {
		wp_dequeue_style( 'syndication-style' );
	}
	add_action( 'wp_print_styles', 'remove_syndication_style', 100 );

endif;

/**/

/* SUPPORT for Plugin INDIEWEB */

function remove_indieweb_style() {
	wp_dequeue_style( 'indieweb' );
}
add_action( 'wp_print_styles', 'remove_indieweb_style', 100 );

/**/

/* SUPPORT for Plugin SVG SUPPORT */

function remove_svgsupport_style() {
	wp_dequeue_style( 'bodhi-svgs-attachment' );
}
add_action( 'wp_print_styles', 'remove_svgsupport_style', 100 );

/**/

/* SUPPORT for Plugin NIX PREFIX */

function remove_nixprefix_style() {
	wp_dequeue_style( 'nix-prefix-style' );
}
add_action( 'wp_print_styles', 'remove_nixprefix_style', 100 );

/**/
