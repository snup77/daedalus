<?php

if ( ! function_exists( 'daedalus_styles' ) ) :

	function daedalus_styles() {
		$theme_style = 'theme-style';
		wp_enqueue_style( $theme_style, get_stylesheet_uri() );
		wp_enqueue_style( 'mobile-menu-styles', get_template_directory_uri() . '/assets/css/mobile-menu-styles.css', array( $theme_style ) );
	}
endif;

add_action( 'wp_enqueue_scripts', 'daedalus_styles' );


if ( ! function_exists( 'sticky_header_script' ) ) :

	function sticky_header_script() {
		wp_enqueue_script('sticky-header-js', get_template_directory_uri() . '/assets/js/sticky.js');
		wp_enqueue_script('mobile-menu-js', get_template_directory_uri() . '/assets/js/mobile-menu.js');
	}
endif;

add_action('wp_footer', 'sticky_header_script');