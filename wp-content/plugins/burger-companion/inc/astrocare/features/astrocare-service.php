<?php
function astrocare_service_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Service Section
	=========================================*/
	$wp_customize->add_section(
		'service_setting', array(
			'title'   => esc_html__( 'Service Section', 'astrocare' ),
			'priority'=> 5,
			'panel'   => 'astrocare_frontpage_sections',
		)
	);

	// Service Settings Section // 
	$wp_customize->add_setting(
		'service_setting_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_text',
			'priority' => 2
		)
	);

	$wp_customize->add_control(
		'service_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Settings','astrocare'),
			'section' => 'service_setting'
		)
	);

	// hide/show
	$wp_customize->add_setting( 
		'hs_service', 
		array(
			'default'   => '1',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_checkbox',
			'priority' => 2
		) 
	);
	
	$wp_customize->add_control(
		'hs_service', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'astrocare' ),
			'section'     => 'service_setting',
			'type'        => 'checkbox'
		) 
	);	

	// Service Title // 
	$wp_customize->add_setting(
		'service_title',
		array(
			'default'			=> __('Service','astrocare'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_html',
			'transport'         => $selective_refresh,
			'priority'          => 3
		)
	);	
	
	$wp_customize->add_control( 
		'service_title',
		array(
			'label'   => __('Title','astrocare'),
			'section' => 'service_setting',
			'type'    => 'text'
		)  
	);

	// Service Subtitle // 
	$wp_customize->add_setting(
		'service_subtitle',
		array(
			'default'			=> __('We Provide Best Astro Services For You','astrocare'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4
		)
	);	

	$wp_customize->add_control( 
		'service_subtitle',
		array(
			'label'   => __('Subtitle','astrocare'),
			'section' => 'service_setting',
			'type'    => 'textarea'
		)  
	);

	// Service content Section // 
	$wp_customize->add_setting(
		'service_content_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
		'service_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','astrocare'),
			'section' => 'service_setting',
		)
	);

	/**
	 * Customizer Repeater for add service
	 */
	$wp_customize->add_setting( 'service_contents', 
		array(
			'sanitize_callback' => 'burger_companion_repeater_sanitize',
			'priority' => 8,
			'default'  => astrocare_get_service_default()
		)
	);

	$wp_customize->add_control( 
		new Burger_Companion_Repeater( $wp_customize, 
			'service_contents', 
			array(
				'label'   => esc_html__('Service','astrocare'),
				'section' => 'service_setting',
				'add_field_label'                   => esc_html__( 'Add New Service', 'astrocare' ),
				'item_name'                         => esc_html__( 'Service', 'astrocare' ),

				'customizer_repeater_title_control'    => true,
				'customizer_repeater_link_control'     => true,
				'customizer_repeater_image_control'    => true,
			) 
		) 
	);

	//Pro feature
	class Astrocare_service_section_upgrade extends WP_Customize_Control {
		public function render_content() { 
		$theme = wp_get_theme(); // gets the current theme
		if ( 'Astrocare' == $theme->name){
			?>	
			<a class="customizer_Astrocare_service_upgrade_section up-to-pro" href="<?php echo esc_url('https://burgerthemes.com/astrocare-pro/'); ?>" target="_blank" style="display: none;"><?php _e('More Service Available in Astrocare Pro','astrocare'); ?></a>
			
			<?php
		}}
	}

	$wp_customize->add_setting( 'astrocare_service_upgrade_to_pro', array(
		'capability'	    => 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new Astrocare_service_section_upgrade(
			$wp_customize,
			'astrocare_service_upgrade_to_pro',
			array(
				'section'	=> 'service_setting'
			)
		)
	);
}
add_action( 'customize_register', 'astrocare_service_setting' );

// Service selective refresh
function astrocare_service_partials( $wp_customize ){
	
	// service_title
	$wp_customize->selective_refresh->add_partial( 'service_title', array(
		'selector'            => '.ast_service_section .astro_theme_titles h5',
		'settings'            => 'service_title',
		'render_callback'     => 'astrocare_service_title_render_callback',
	) );

	// service_subtitle
	$wp_customize->selective_refresh->add_partial( 'service_subtitle', array(
		'selector'            => '.ast_service_section .astro_theme_titles h2',
		'settings'            => 'service_subtitle',
		'render_callback'     => 'astrocare_service_subtitle_render_callback',
	) );
}

add_action( 'customize_register', 'astrocare_service_partials' );

// service_title
function astrocare_service_title_render_callback() {
	return get_theme_mod( 'service_title' );
}

// service_subtitle
function astrocare_service_subtitle_render_callback() {
	return get_theme_mod( 'service_subtitle' );
}