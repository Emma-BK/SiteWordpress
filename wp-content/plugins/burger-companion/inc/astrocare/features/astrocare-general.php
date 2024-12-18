<?php
function astrocare_burger_general_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

	/*=========================================
	Blog  Section
	=========================================*/
	// Blog content Section // 
	
	$wp_customize->add_setting(
		'blog_content_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
		'blog_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','astrocare'),
			'section' => 'blog_setting',
		)
	);

     // Logo Width // 
	if ( class_exists( 'Burger_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'logo_width',
			array(
				'default'			=> '140',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'astrocare_sanitize_range_value',
				'transport'         => 'postMessage',
			)
		);
		$wp_customize->add_control( 
			new Burger_Customizer_Range_Control( $wp_customize, 'logo_width', 
				array(
					'label'      => __( 'Logo Width', 'astrocare' ),
					'section'  => 'title_tagline',
					'input_attrs' => array(
						'min'    => 1,
						'max'    => 500,
						'step'   => 1,
					//'suffix' => 'px', //optional suffix
					),
				) ) 
		);
	}

	// blog_display_num
	if ( class_exists( 'Burger_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'blog_display_num',
			array(
				'default' => '3',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'astrocare_sanitize_range_value',
				'priority' => 8,
			)
		);
		$wp_customize->add_control( 
			new Burger_Customizer_Range_Control( $wp_customize, 'blog_display_num', 
				array(
					'label'      => __( 'No of Posts Display', 'astrocare' ),
					'section'  => 'blog_setting',
					'input_attrs' => array(
						'min'    => 1,
						'max'    => 100,
						'step'   => 1,
					//'suffix' => 'px', //optional suffix
					),
				) ) 
		);
	}
	/*=========================================
	Breadcrumb  Section
	=========================================*/
	
	// Breadcrumb Content Section // 
	$wp_customize->add_setting(
		'breadcrumb_contents'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_text',
		)
	);

	$wp_customize->add_control(
		'breadcrumb_contents',
		array(
			'type' => 'hidden',
			'label' => __('Content','astrocare'),
			'section' => 'breadcrumb_setting',
			'priority' => 5,
		)
	);
	
	// Content size // 
	$wp_customize->add_setting(
		'breadcrumb_min_height',
		array(
			'default'     	    => '236',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_range_value',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control( 
		new Burger_Customizer_Range_Control( $wp_customize, 'breadcrumb_min_height', 
			array(
				'label'      => __( 'Min Height', 'astrocare'),
				'section'  => 'breadcrumb_setting',
				'priority' => 8,
				'input_attrs' => array(
					'min'    => 0,
					'max'    => 1000,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
	);
	
	
}

add_action( 'customize_register', 'astrocare_burger_general_setting' );

