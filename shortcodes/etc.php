<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//[oxsn_slider_wrap class=""]
if ( ! function_exists ( 'oxsn_slider_shortcode' ) ) {

	add_shortcode('oxsn_slider_wrap', 'oxsn_slider_wrap_shortcode');
	function oxsn_slider_wrap_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
		), $atts );

		$oxsn_slider_wrap_class = esc_attr($a['class']);

		return '<div class="oxsn_slider"><ul class="' . $oxsn_slider_wrap_class . '">' . do_shortcode($content) . '</ul></div>';
	}

}

//[oxsn_slider_slide class=""]
if ( ! function_exists ( 'oxsn_slider_slide_shortcode' ) ) {

	add_shortcode('oxsn_slider_slide', 'oxsn_slider_slide_shortcode');
	function oxsn_slider_slide_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
		), $atts );

		$oxsn_slider_slide_class = esc_attr($a['class']);

		return '<li class="' . $oxsn_slider_slide_class . '">' . do_shortcode($content) . '</li>';
	}

}


?>