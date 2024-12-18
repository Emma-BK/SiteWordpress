<?php
function astrocare_astroform_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	AstroForm Section
	=========================================*/
	$wp_customize->add_section(
		'astroform_setting', array(
			'title'    => esc_html__( 'AstroForm Section', 'astrocare' ),
			'priority' => 3,
			'panel'    => 'astrocare_frontpage_sections',
		)
	);
	// AstroForm Settings Section // 
	$wp_customize->add_setting(
		'astroform_setting_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_text',
			'priority'          => 5,
		)
	);

	$wp_customize->add_control(
		'astroform_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Settings','astrocare'),
			'section' => 'astroform_setting',
		)
	);

	// hide/show
	$wp_customize->add_setting( 
		'hs_astroform' , 
		array(
			'default'           => '1',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_checkbox',
			'priority'          => 6
		) 
	);
	
	$wp_customize->add_control(
		'hs_astroform', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'astrocare' ),
			'section'     => 'astroform_setting',
			'type'        => 'checkbox',
		) 
	);

	// AstroForm Title // 
	$wp_customize->add_setting(
		'astroform_title',
		array(
			'default'			=> __('Know Your Moon Sign','astrocare'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_html',
			'transport'         => $selective_refresh,
			'priority'          => 7
		)
	);	
	
	$wp_customize->add_control( 
		'astroform_title',
		array(
			'label'   => __('Title','astrocare'),
			'section' => 'astroform_setting',
			'type'    => 'text'
		)  
	);	
}
add_action( 'customize_register', 'astrocare_astroform_setting' );

// Astroform selective refresh
function astrocare_astroform_partials( $wp_customize ){
	
	// astroform_title
	$wp_customize->selective_refresh->add_partial( 'astroform_title', array(
		'selector'            => '.ast_astro-slider-form .astro_theme_titles h5',
		'settings'            => 'astroform_title',
		'render_callback'     => 'astrocare_astroform_render_callback',
	) );
}

add_action( 'customize_register', 'astrocare_astroform_partials' );

// astroform_title
function astrocare_astroform_render_callback() {
	return get_theme_mod( 'astroform_title' );
}
