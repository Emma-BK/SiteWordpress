<?php
function decorme_general_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'decorme_general', array(
			'priority' => 31,
			'title' => esc_html__( 'General', 'decorme' ),
		)
	);
	
	/*=========================================
	Breadcrumb  Section
	=========================================*/
	$wp_customize->add_section(
		'breadcrumb_setting', array(
			'title' => esc_html__( 'Breadcrumb Section', 'decorme' ),
			'priority' => 1,
			'panel' => 'decorme_general',
		)
	);
	
	// Settings
	$wp_customize->add_setting(
		'breadcrumb_settings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'breadcrumb_settings',
		array(
			'type' => 'hidden',
			'label' => __('Settings','decorme'),
			'section' => 'breadcrumb_setting',
		)
	);
	
	// Breadcrumb Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'hs_breadcrumb' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'decorme_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_breadcrumb', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'decorme' ),
			'section'     => 'breadcrumb_setting',
			'settings'    => 'hs_breadcrumb',
			'type'        => 'checkbox'
		) 
	);
		
	// Background // 
	$wp_customize->add_setting(
		'breadcrumb_bg_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_text',
			'priority' => 9,
		)
	);

	$wp_customize->add_control(
	'breadcrumb_bg_head',
		array(
			'type' => 'hidden',
			'label' => __('Background','decorme'),
			'section' => 'breadcrumb_setting',
		)
	);
	
	//  Image // 
    $wp_customize->add_setting( 
    	'breadcrumb_img1' , 
    	array(
			'default' 			=> esc_url(get_template_directory_uri() .'/assets/images/light_1.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_url',	
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'breadcrumb_img1' ,
		array(
			'label'          => esc_html__( 'Light Image 1', 'decorme'),
			'section'        => 'breadcrumb_setting',
		) 
	));
	
	//  Image 2// 
    $wp_customize->add_setting( 
    	'breadcrumb_img2' , 
    	array(
			'default' 			=> esc_url(get_template_directory_uri() .'/assets/images/light_2.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_url',	
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'breadcrumb_img2' ,
		array(
			'label'          => esc_html__( 'Light Image 2', 'decorme'),
			'section'        => 'breadcrumb_setting',
		) 
	));
	
	//  Image 3// 
    $wp_customize->add_setting( 
    	'breadcrumb_img3' , 
    	array(
			'default' 			=> esc_url(get_template_directory_uri() .'/assets/images/light_3.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_url',	
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'breadcrumb_img3' ,
		array(
			'label'          => esc_html__( 'Light Image 3', 'decorme'),
			'section'        => 'breadcrumb_setting',
		) 
	));
	
	//  Image 4// 
    $wp_customize->add_setting( 
    	'breadcrumb_img4' , 
    	array(
			'default' 			=> esc_url(get_template_directory_uri() .'/assets/images/light_4.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_url',	
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'breadcrumb_img4' ,
		array(
			'label'          => esc_html__( 'Light Image 4', 'decorme'),
			'section'        => 'breadcrumb_setting',
		) 
	));
	
	//  Image 5// 
    $wp_customize->add_setting( 
    	'breadcrumb_img5' , 
    	array(
			'default' 			=> esc_url(get_template_directory_uri() .'/assets/images/light_5.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_url',	
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'breadcrumb_img5' ,
		array(
			'label'          => esc_html__( 'Light Image 5', 'decorme'),
			'section'        => 'breadcrumb_setting',
		) 
	));
	
	//  Image 6// 
    $wp_customize->add_setting( 
    	'breadcrumb_img6' , 
    	array(
			'default' 			=> esc_url(get_template_directory_uri() .'/assets/images/light_6.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_url',	
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'breadcrumb_img6' ,
		array(
			'label'          => esc_html__( 'Light Image 6', 'decorme'),
			'section'        => 'breadcrumb_setting',
		) 
	));
	
}
add_action( 'customize_register', 'decorme_general_setting' );

