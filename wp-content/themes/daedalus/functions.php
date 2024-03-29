<?php

if ( ! function_exists( 'daedalus_styles' ) ) :

	function daedalus_styles() {
		wp_enqueue_style( 'daedalus', get_stylesheet_uri() );
	}
endif;

add_action( 'wp_enqueue_scripts', 'daedalus_styles' );


if ( ! function_exists( 'sticky_header_script' ) ) :

function sticky_header_script() {
    wp_enqueue_script(
        'sticky-header-js', get_template_directory_uri() . '/assets/js/sticky.js');
}
endif;

add_action('wp_footer', 'sticky_header_script');