<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_slider_customizer' ) ) {

	add_action( 'customize_register', 'oxsn_slider_customizer' );
	function oxsn_slider_customizer( $wp_customize ) {
	   
		$wp_customize->add_panel( 'oxsn_plugin_panel', array(
			'priority'       => '',
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => 'OXSN Plugins',
			'description'    => '',
		) );

			$wp_customize->add_section( 'oxsn_slider_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Slider',
				'description'    => '',
				'panel'  => 'oxsn_plugin_panel',
			) );

				$wp_customize->add_setting( 'oxsn_slider_effect_control', array(
					'type' => 'option',
					'default' => 'fade',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_slider_effect_control', array(
					'type'     => '',
					'priority' => '',
					'section'  => 'oxsn_slider_section',
					'label'    => 'Effect',
				) ) );

				$wp_customize->add_setting( 'oxsn_slider_pause_control', array(
					'type' => 'option',
					'default' => '6400',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_slider_pause_control', array(
					'type'     => '',
					'priority' => '',
					'section'  => 'oxsn_slider_section',
					'label'    => 'Pause',
				) ) );

				$wp_customize->add_setting( 'oxsn_slider_slide_count_control', array(
					'type' => 'option',
					'default' => '1',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_slider_slide_count_control', array(
					'type'     => '',
					'priority' => '',
					'section'  => 'oxsn_slider_section',
					'label'    => 'Slide Count',
				) ) );

				$wp_customize->add_setting( 'oxsn_slider_move_count_control', array(
					'type' => 'option',
					'default' => '1',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_slider_move_count_control', array(
					'type'     => '',
					'priority' => '',
					'section'  => 'oxsn_slider_section',
					'label'    => 'Move Count',
				) ) );

				$wp_customize->add_setting( 'oxsn_slider_auto_control', array(
					'type' => 'option',
					'default' => 'true',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_slider_auto_control', array(
					'type'     => '',
					'priority' => '',
					'section'  => 'oxsn_slider_section',
					'label'    => 'Auto Start',
				) ) );

				$wp_customize->add_setting( 'oxsn_slider_pagination_control', array(
					'type' => 'option',
					'default' => 'true',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_slider_pagination_control', array(
					'type'     => '',
					'priority' => '',
					'section'  => 'oxsn_slider_section',
					'label'    => 'Pagination',
				) ) );

	}

}


?>