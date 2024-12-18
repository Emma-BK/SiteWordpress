<?php
function kundoo_cta_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	 CTA Section
	 =========================================*/
	 $wp_customize->add_section(
	 	'cta_setting', array(
	 		'title' => esc_html__( 'CTA Section', 'kundoo' ),
	 		'priority' => 4,
	 		'panel' => 'kundoo_frontpage_sections',
	 	)
	 );
	// CTA Settings Section // 
	 $wp_customize->add_setting(
	 	'cta_setting_head'
	 	,array(
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_text',
	 		'priority'          => 2,
	 	)
	 );
	 $wp_customize->add_control(
	 	'cta_setting_head',
	 	array(
	 		'type'    => 'hidden',
	 		'label'   => __('Settings','kundoo'),
	 		'section' => 'cta_setting',
	 	)
	 );
	// hide/show
	 $wp_customize->add_setting( 
	 	'hs_cta' , 
	 	array(
	 		'default'           => '1',
	 		'capability'        => 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_checkbox',
	 		'priority' => 2,
	 	) 
	 );
	 $wp_customize->add_control(
	 	'hs_cta', 
	 	array(
	 		'label'	      => esc_html__( 'Hide/Show', 'kundoo' ),
	 		'section'     => 'cta_setting',
	 		'type'        => 'checkbox',
	 	) 
	 );
	// CTA content Section // 
	 $wp_customize->add_setting(
	 	'cta_content_head'
	 	,array(
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_text',
	 		'priority'          => 3,
	 	)
	 );
	 $wp_customize->add_control(
	 	'cta_content_head',
	 	array(
	 		'type'   => 'hidden',
	 		'label'  => __('Content','kundoo'),
	 		'section'=> 'cta_setting',
	 	)
	 );
   // CTA Title // 
	 $wp_customize->add_setting(
	 	'cta_title',
	 	array(
	 		'default'			=> __("Don't hesitate to say hello",'kundoo'),
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_html',
	 		'transport'         => $selective_refresh,
	 		'priority'          => 1,
	 	)
	 );	
	 $wp_customize->add_control( 
	 	'cta_title',
	 	array(
	 		'label'   => __('Title','kundoo'),
	 		'section' => 'cta_setting',
	 		'type'    => 'text',
	 	)  
	 );
	// CTA Subtitle // 
	 $wp_customize->add_setting(
	 	'cta_subtitle',
	 	array(
	 		'default'			=> __('Have a Project in Your Mind','kundoo'),
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_html',
	 		'transport'         => $selective_refresh,
	 		'priority'          => 2,
	 	)
	 );	
	 $wp_customize->add_control( 
	 	'cta_subtitle',
	 	array(
	 		'label'   => __('Subtitle','kundoo'),
	 		'section' => 'cta_setting',
	 		'type'    => 'textarea',
	 	)  
	 );
	// CTA Description // 
	 $wp_customize->add_setting(
	 	'cta_description',
	 	array(
	 		'default'			=> __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','kundoo'),
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_html',
	 		'transport'         => $selective_refresh,
	 		'priority'          => 3,
	 	)
	 );
	 $wp_customize->add_control( 
	 	'cta_description',
	 	array(
	 		'label'   => __('Description','kundoo'),
	 		'section' => 'cta_setting',
	 		'type'    => 'textarea',
	 	)  
	 );
	  // Button Label // 
	 $wp_customize->add_setting(
	 	'cta_btn',
	 	array(
	 		'default'			=> __("LET'S TALK WITH US",'kundoo'),
	 		'sanitize_callback' => 'kundoo_sanitize_html',
	 		'transport'         => $selective_refresh,
	 		'capability'        => 'edit_theme_options',
	 		'priority'          => 4,
	 	)
	 );	
	 $wp_customize->add_control( 
	 	'cta_btn',
	 	array(
	 		'label'   		=> __('Label','kundoo'),
	 		'section' 		=> 'cta_setting',
	 		'type'		    =>	'text',
	 	)  
	 );
	// Button URL // 
	 $wp_customize->add_setting(
	 	'cta_btn_url',
	 	array(
	 		'default'			=> '',
	 		'sanitize_callback' => 'kundoo_sanitize_url',
	 		'transport'         => $selective_refresh,
	 		'capability'        => 'edit_theme_options',
	 		'priority'          => 5,
	 	)
	 );	
	 $wp_customize->add_control( 
	 	'cta_btn_url',
	 	array(
	 		'label'   	=> __('Link','kundoo'),
	 		'section' 	=> 'cta_setting',
	 		'type'		=>	'text',
	 	)  
	 );
	 // Button open new tab //
	 $wp_customize->add_setting( 
	 	'cta_btn_open_new_tab' , 
	 	array(
	 		'capability'        => 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_checkbox',
	 		'priority'          => 6,
	 	) 
	 );
	 $wp_customize->add_control(
	 	'cta_btn_open_new_tab', 
	 	array(
	 		'label'	      => esc_html__( 'Open in New Tab ?', 'kundoo' ),
	 		'section'     => 'cta_setting',
	 		'type'        => 'checkbox',
	 	) 
	 );
	 // Image // 
	 $wp_customize->add_setting( 
	 	'cta_img' , 
	 	array(
	 		'default' 			=> BURGER_COMPANION_PLUGIN_URL .'inc/kundoo/images/cta/cta-01.jpg',
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_url',	
	 		'priority'          => 7,
	 	) 
	 );
	 $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'cta_img' ,
	 	array(
	 		'label'          => esc_html__( 'Image', 'kundoo'),
	 		'section'        => 'cta_setting',
	 	) 
	 ));

	}
	add_action( 'customize_register', 'kundoo_cta_setting' );

	// cta selective refresh
function kundoo_cta_section_partials( $wp_customize ){	
	// cta subtitle
	$wp_customize->selective_refresh->add_partial( 'cta_subtitle', array(
		'selector'            => '.home-cta-01 h3',
		'settings'            => 'cta_subtitle',
		'render_callback'     => 'kundoo_cta_subtitle_render_callback',
	
	) );
	// cta button
	$wp_customize->selective_refresh->add_partial( 'cta_btn', array(
		'selector'            => '.home-cta-01 .cta-btn-wrap',
		'settings'            => 'cta_btn',
		'render_callback'     => 'kundoo_cta_btn_render_callback',
	
	) );
}
add_action( 'customize_register', 'kundoo_cta_section_partials' );

// cta subtitle
function kundoo_cta_subtitle_render_callback() {
	return get_theme_mod( 'cta_subtitle' );
}
// cta button
function kundoo_cta_btn_render_callback() {
	return get_theme_mod( 'cta_btn' );
}