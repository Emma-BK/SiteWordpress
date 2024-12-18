<?php
function decorme_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Blog Section
	=========================================*/
	$wp_customize->add_panel(
		'decorme_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'decorme' ),
		)
	);
	$wp_customize->add_section(
		'blog_setting', array(
			'title' => esc_html__( 'Blog Section', 'decorme' ),
			'priority' => 12,
			'panel' => 'decorme_frontpage_sections',
		)
	);
	
	// Setting head
	$wp_customize->add_setting(
		'blog_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'blog_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','decorme'),
			'section' => 'blog_setting',
		)
	);
	
	// Hide / Show
	$wp_customize->add_setting(
		'blog_hs'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_checkbox',
			'priority' => 2,
		)
	);

	$wp_customize->add_control(
	'blog_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','decorme'),
			'section' => 'blog_setting',
		)
	);
	
	
	// Blog Header Section // 
	$wp_customize->add_setting(
		'blog_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'blog_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','decorme'),
			'section' => 'blog_setting',
		)
	);
	
	// Blog Title // 
	$wp_customize->add_setting(
    	'blog_title',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'blog_title',
		array(
		    'label'   => __('Title','decorme'),
		    'section' => 'blog_setting',
			'type'           => 'text',
		)  
	);
	
	// Blog Subtitle // 
	$wp_customize->add_setting(
    	'blog_subtitle',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'blog_subtitle',
		array(
		    'label'   => __('Subtitle','decorme'),
		    'section' => 'blog_setting',
			'type'           => 'text',
		)  
	);
	
	// Blog Description // 
	$wp_customize->add_setting(
    	'blog_description',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'blog_description',
		array(
		    'label'   => __('Description','decorme'),
		    'section' => 'blog_setting',
			'type'           => 'textarea',
		)  
	);

	// Blog content Section // 
	
	$wp_customize->add_setting(
		'blog_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'blog_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','decorme'),
			'section' => 'blog_setting',
		)
	);
	
	// blog_display_num
	if ( class_exists( 'Burger_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'blog_display_num',
			array(
				'default' => '3',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'decorme_sanitize_range_value',
				'priority' => 8,
			)
		);
		$wp_customize->add_control( 
		new Burger_Customizer_Range_Control( $wp_customize, 'blog_display_num', 
			array(
				'label'      => __( 'No of Posts Display', 'decorme' ),
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
}

add_action( 'customize_register', 'decorme_blog_setting' );

// Blog selective refresh
function decorme_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.post-home .theme-heading span.placeholder',
		'settings'            => 'blog_title',
		'render_callback'  => 'decorme_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.post-home .theme-heading h5.text-primary',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'decorme_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.post-home .theme-heading span.font-weight-normal',
		'settings'            => 'blog_description',
		'render_callback'  => 'decorme_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'decorme_blog_section_partials' );

// blog_title
function decorme_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function decorme_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function decorme_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}