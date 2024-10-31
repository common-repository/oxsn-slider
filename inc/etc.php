<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_slider_inc_css' ) ) {

	add_action( 'wp_enqueue_scripts', 'oxsn_slider_inc_css' );
	function oxsn_slider_inc_css() {

		wp_enqueue_style( 'oxsn_slider_etc_css', oxsn_slider_plugin_dir_url . 'inc/css/etc.css', array(), '1.0.0', 'all' ); 

	}

}

if ( ! function_exists ( 'oxsn_slider_inc_js' ) ) {

	add_action( 'wp_enqueue_scripts', 'oxsn_slider_inc_js' );
	function oxsn_slider_inc_js() {

		wp_enqueue_script( 'oxsn_slider_sudoslider_min_js', oxsn_slider_plugin_dir_url . 'inc/js/jquery.sudoSlider.min.js', array(), '3.4.2', 'all' );

	}

}

if ( ! function_exists ( 'oxsn_slider_footer_inc' ) ) {

	add_action( 'wp_footer', 'oxsn_slider_footer_inc', 999999);
	function oxsn_slider_footer_inc() { 

		require_once( oxsn_slider_plugin_dir_path . 'inc/php/etc.php' );

	}

}


?>