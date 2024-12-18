<?php
function astrocare_kundli_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Kundli Section
	=========================================*/
	$wp_customize->add_section(
		'kundli_setting', array(
			'title'   => esc_html__( 'Kundli Section', 'astrocare' ),
			'priority'=> 7,
			'panel'   => 'astrocare_frontpage_sections'
		)
	);

	// Kundli Settings Section // 
	$wp_customize->add_setting(
		'kundli_setting_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_text',
			'priority' => 2
		)
	);

	$wp_customize->add_control(
		'kundli_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Settings','astrocare'),
			'section' => 'kundli_setting'
		)
	);

	// hide/show
	$wp_customize->add_setting( 
		'hs_kundli', 
		array(
			'default'   => '1',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_checkbox',
			'priority' => 2
		) 
	);
	
	$wp_customize->add_control(
		'hs_kundli', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'astrocare' ),
			'section'     => 'kundli_setting',
			'type'        => 'checkbox'
		) 
	);

	// Kundli Title // 
	$wp_customize->add_setting(
		'kundli_title',
		array(
			'default'			=> __('Free Kundali','astrocare'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_html',
			'transport'         => $selective_refresh,
			'priority'          => 3
		)
	);	
	
	$wp_customize->add_control( 
		'kundli_title',
		array(
			'label'   => __('Title','astrocare'),
			'section' => 'kundli_setting',
			'type'    => 'text'
		)  
	);

	// Kundli Subtitle // 
	$wp_customize->add_setting(
		'kundli_subtitle',
		array(
			'default'			=> __('Get Free Kundali','astrocare'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4
		)
	);	

	$wp_customize->add_control( 
		'kundli_subtitle',
		array(
			'label'   => __('Subtitle','astrocare'),
			'section' => 'kundli_setting',
			'type'    => 'textarea'
		)  
	);

	// Kundli content Section // 
	$wp_customize->add_setting(
		'kundli_content_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_text',
			'priority' => 2,
		)
	);

	$wp_customize->add_control(
		'kundli_content_head',
		array(
			'type'    => 'hidden',
			'label'   => __('Content','astrocare'),
			'section' => 'kundli_setting',
		)
	);

	// Kundli Wave Title // 
	$wp_customize->add_setting(
		'kundli_wave_title',
		array(
			'default'			=> __('Astro','astrocare'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 1
		)
	);	

	$wp_customize->add_control( 
		'kundli_wave_title',
		array(
			'label'   => __('Wave Title','astrocare'),
			'section' => 'kundli_setting',
			'type'    => 'text'
		)  
	);

	// Kundli Wave URL // 
	$wp_customize->add_setting(
		'kundli_wave_url',
		array(
			'default'			=> '',
			'sanitize_callback' => 'astrocare_sanitize_url',
			'transport'         => $selective_refresh,
			'capability'        => 'edit_theme_options',
			'priority'          => 2
		)
	);	

	$wp_customize->add_control( 
		'kundli_wave_url',
		array(
			'label'   		=> __('Link','astrocare'),
			'section' 		=> 'kundli_setting',
			'type'		    => 'text'
			
		)  
	);	

	// Kundli Wave clipart // 
	$wp_customize->add_setting( 
		'hs_clipart', 
		array(
			'default'  => '1',
			'sanitize_callback' => 'astrocare_sanitize_checkbox',
			'capability'        => 'edit_theme_options',
			'priority'          => 3
		) 
	);
	
	$wp_customize->add_control(
		'hs_clipart', 
		array(
			'label'	      => esc_html__( 'Hide/Show Clip Art', 'astrocare' ),
			'section'     => 'kundli_setting',
			'type'        => 'checkbox'
		) 
	);
}
add_action( 'customize_register', 'astrocare_kundli_setting' );

// Kundli selective refresh
function astrocare_kundli_partials( $wp_customize ){
	
	// kundli_title
	$wp_customize->selective_refresh->add_partial( 'kundli_title', array(
		'selector'            => '.ast_kundli-section .astro_theme_titles h5',
		'settings'            => 'kundli_title',
		'render_callback'     => 'astrocare_kundli_title_render_callback',
	) );

	// kundli_subtitle
	$wp_customize->selective_refresh->add_partial( 'kundli_subtitle', array(
		'selector'            => '.ast_kundli-section .astro_theme_titles h2',
		'settings'            => 'kundli_subtitle',
		'render_callback'     => 'astrocare_kundli_subtitle_render_callback',
	) );

	// kundli_wave_title
	$wp_customize->selective_refresh->add_partial( 'kundli_wave_title', array(
		'selector'            => '.ast_kundli-section .hs_waves2 h4',
		'settings'            => 'kundli_wave_title',
		'render_callback'     => 'astrocare_kundli_wave_title_render_callback',
	) );
}

add_action( 'customize_register', 'astrocare_kundli_partials' );

// kundli_title
function astrocare_kundli_title_render_callback() {
	return get_theme_mod( 'kundli_title' );
}

// kundli_subtitle
function astrocare_kundli_subtitle_render_callback() {
	return get_theme_mod( 'kundli_subtitle' );
}

// kundli_wave_title
function astrocare_kundli_wave_title_render_callback() {
	return get_theme_mod( 'kundli_wave_title' );
}
