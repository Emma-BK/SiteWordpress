<?php
function decorme_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'decorme'),
		) 
	);
	
	/*=========================================
	Footer Background
	=========================================*/
	$wp_customize->add_section(
        'footer_background',
        array(
            'title' 		=> __('Footer Background','decorme'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
	
	// Background // 
	$wp_customize->add_setting(
		'footer_bg_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'footer_bg_head',
		array(
			'type' => 'hidden',
			'label' => __('Background','decorme'),
			'section' => 'footer_background',
		)
	);
	
	// Background Image // 
    $wp_customize->add_setting( 
    	'footer_bg_img' , 
    	array(
			'default' 			=> esc_url(get_template_directory_uri() .'/assets/images/footer_pattern.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_url',	
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'footer_bg_img' ,
		array(
			'label'          => esc_html__( 'Background Image', 'decorme'),
			'section'        => 'footer_background',
		) 
	));
	
		
	/*=========================================
	Footer Copyright
	=========================================*/	
	$wp_customize->add_section(
        'footer_copyright',
        array(
            'title' 		=> __('Footer Copyright','decorme'),
			'panel'  		=> 'footer_section',
			'priority'      => 6,
		)
    );
	
	// Footer Copyright Head
	$wp_customize->add_setting(
		'footer_btm_copy_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_text',
			'priority'  => 3,
		)
	);

	$wp_customize->add_control(
	'footer_btm_copy_head',
		array(
			'type' => 'hidden',
			'label' => __('Copyright','decorme'),
			'section' => 'footer_copyright',
		)
	);
	
	// Footer Copyright 
	$decorme_foo_copy = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'decorme' );
	$wp_customize->add_setting(
    	'footer_copyright',
    	array(
			'default' => $decorme_foo_copy,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright',
		array(
		    'label'   		=> __('Copytight','decorme'),
		    'section'		=> 'footer_copyright',
			'type' 			=> 'textarea',
			'transport'         => $selective_refresh,
		)  
	);	
	
	
}
add_action( 'customize_register', 'decorme_footer' );
// Footer selective refresh
function decorme_footer_partials( $wp_customize ){

	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.footer-copyright .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'decorme_footer_copyright_render_callback',
	) );
	
	}
add_action( 'customize_register', 'decorme_footer_partials' );

// copyright_content
function decorme_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}