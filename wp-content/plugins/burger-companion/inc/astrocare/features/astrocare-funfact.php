<?php
function astrocare_funfact_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Funfact Section
	=========================================*/
	$wp_customize->add_section(
		'funfact_setting', array(
			'title'   => esc_html__( 'Funfact Section', 'astrocare' ),
			'priority'=> 6,
			'panel'   => 'astrocare_frontpage_sections',
		)
	);

	// funfact Settings Section // 
	$wp_customize->add_setting(
		'funfact_setting_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_text',
			'priority' => 2
		)
	);

	$wp_customize->add_control(
		'funfact_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Settings','astrocare'),
			'section' => 'funfact_setting'
		)
	);

	// hide/show
	$wp_customize->add_setting( 
		'hs_funfact', 
		array(
			'default'   => '1',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_checkbox',
			'priority' => 2
		) 
	);
	
	$wp_customize->add_control(
		'hs_funfact', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'astrocare' ),
			'section'     => 'funfact_setting',
			'type'        => 'checkbox'
		) 
	);

	// Funfact content Section // 
	$wp_customize->add_setting(
		'funfact_content_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_text',
			'priority' => 3
		)
	);

	$wp_customize->add_control(
		'funfact_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','astrocare'),
			'section' => 'funfact_setting'
		)
	);

	/**
	 * Customizer Repeater for add Funfact
	 */
	$wp_customize->add_setting( 'funfact_contents', 
		array(
			'sanitize_callback' => 'burger_companion_repeater_sanitize',
			'priority' => 1,
			'default' => astrocare_get_funfact_default()
		)
	);

	$wp_customize->add_control( 
		new Burger_Companion_Repeater( $wp_customize, 
			'funfact_contents', 
			array(
				'label'   => esc_html__('Funfact','astrocare'),
				'section' => 'funfact_setting',
				'add_field_label'                     => esc_html__( 'Add New Funfact', 'astrocare' ),
				'item_name'                           => esc_html__( 'Funfact', 'astrocare' ),
				'customizer_repeater_title_control'   => true,
				'customizer_repeater_subtitle_control'=> true,
			) 
		) 
	);

	//Pro feature
	class Astrocare_funfact_section_upgrade extends WP_Customize_Control {
		public function render_content() { 
		$theme = wp_get_theme(); // gets the current theme
		if ( 'Astrocare' == $theme->name){
			?>	
			<a class="customizer_Astrocare_funfact_upgrade_section up-to-pro" href="<?php esc_url('https://burgerthemes.com/astrocare-pro/');?>" target="_blank" style="display: none;"><?php _e('More Funfact Available in Astrocare Pro','astrocare'); ?></a>
			
			<?php
		}}
	}

	$wp_customize->add_setting( 'astrocare_funfact_upgrade_to_pro', array(
		'capability'	    => 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new Astrocare_funfact_section_upgrade(
			$wp_customize,
			'astrocare_funfact_upgrade_to_pro',
			array(
				'section'	=> 'funfact_setting'
			)
		)
	);

	 // Funfact content Section // 
	$wp_customize->add_setting(
		'funfact_bg_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_text',
			'priority' => 2,
		)
	);

	$wp_customize->add_control(
		'funfact_bg_head',
		array(
			'type' => 'hidden',
			'label' => __('Background','astrocare'),
			'section' => 'funfact_setting',
		)
	);

	$wp_customize->add_setting( 
		'funfact_bg_setting' , 
		array(
			'default'	=> BURGER_COMPANION_PLUGIN_URL . 'inc/astrocare/images/bg/bg-funfact.png',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_url',	
			'priority' => 1,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'funfact_bg_setting' ,
		array(
			'label'          => __( 'Background Image', 'astrocare' ),
			'section'        => 'funfact_setting',
		) 
	));

}
add_action( 'customize_register', 'astrocare_funfact_setting' );

// funfact selective refresh
function astrocare_funfact_partials( $wp_customize ){
	
	// funfact_bg_setting
	$wp_customize->selective_refresh->add_partial( 'funfact_bg_setting', array(
		'selector'            => '.funfact-section .funfact-overlay',
		'settings'            => 'funfact_bg_setting',
		'render_callback'     => 'astrocare_funfact_image_render_callback',
	) );
}
add_action( 'customize_register', 'astrocare_funfact_partials' );

// funfact_bg_setting
function astrocare_funfact_image_render_callback() {
	return get_theme_mod( 'funfact_bg_setting' );
}