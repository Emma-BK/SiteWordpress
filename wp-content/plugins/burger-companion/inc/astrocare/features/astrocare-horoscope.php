<?php
function astrocare_horoscope_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Horoscope Section
	=========================================*/
	$wp_customize->add_section(
		'horoscope_setting', array(
			'title'    => esc_html__( 'Horoscope Section', 'astrocare' ),
			'priority' => 4,
			'panel'    => 'astrocare_frontpage_sections',
		)
	);

	//  Horoscope Settings Section // 
	$wp_customize->add_setting(
		'horoscope_setting_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_text',
			'priority'          => 5
		)
	);

	$wp_customize->add_control(
		'horoscope_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Settings','astrocare'),
			'section' => 'horoscope_setting'
		)
	);

	// hide/show
	$wp_customize->add_setting( 
		'hs_horoscope' , 
		array(
			'default'           => '1',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_checkbox',
			'priority'          => 6
		) 
	);
	
	$wp_customize->add_control(
		'hs_horoscope', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'astrocare' ),
			'section'     => 'horoscope_setting',
			'type'        => 'checkbox'
		) 
	);

	// Horoscope Title // 
	$wp_customize->add_setting(
		'horoscope_title',
		array(
			'default'			=> __('Zodiac Sign','astrocare'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_html',
			'transport'         => $selective_refresh,
			'priority'          => 7
		)
	);	
	
	$wp_customize->add_control( 
		'horoscope_title',
		array(
			'label'   => __('Title','astrocare'),
			'section' => 'horoscope_setting',
			'type'    => 'text'
		)  
	);

	// Horoscope Subtitle // 
	$wp_customize->add_setting(
		'horoscope_subtitle',
		array(
			'default'			=> __('Choose Your Horoscope','astrocare'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 8
		)
	);	

	$wp_customize->add_control( 
		'horoscope_subtitle',
		array(
			'label'   => __('Subtitle','astrocare'),
			'section' => 'horoscope_setting',
			'type'    => 'textarea'
		)  
	);

}
add_action( 'customize_register', 'astrocare_horoscope_setting' );

// Horoscope selective refresh
function astrocare_horoscope_partials( $wp_customize ){
	
	// horoscope_title
	$wp_customize->selective_refresh->add_partial( 'horoscope_title', array(
		'selector'            => '.astrocare-horoscope .astro_theme_titles h5',
		'settings'            => 'horoscope_title',
		'render_callback'     => 'astrocare_horoscope_title_render_callback',
	) );

	// horoscope_subtitle
	$wp_customize->selective_refresh->add_partial( 'horoscope_subtitle', array(
		'selector'            => '.astrocare-horoscope .astro_theme_titles h2',
		'settings'            => 'horoscope_subtitle',
		'render_callback'     => 'astrocare_horoscope_subtitle_render_callback',
	) );
}

add_action( 'customize_register', 'astrocare_horoscope_partials' );

// horoscope_title
function astrocare_horoscope_title_render_callback() {
	return get_theme_mod( 'horoscope_title' );
}

// horoscope_subtitle
function astrocare_horoscope_subtitle_render_callback() {
	return get_theme_mod( 'horoscope_subtitle' );
}