<?php
function kundoo_testimonial_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	 Testimonial Section
	 =========================================*/
	 $wp_customize->add_section(
	 	'testimonial_setting', array(
	 		'title' => esc_html__( 'Testimonial Section', 'kundoo' ),
	 		'priority' => 19,
	 		'panel' => 'kundoo_frontpage_sections',
	 	)
	 );
	// Testimonial Settings Section // 
	 $wp_customize->add_setting(
	 	'testimonial_setting_head'
	 	,array(
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_text',
	 		'priority'          => 1,
	 	)
	 );
	 $wp_customize->add_control(
	 	'testimonial_setting_head',
	 	array(
	 		'type'    => 'hidden',
	 		'label'   => __('Settings','kundoo'),
	 		'section' => 'testimonial_setting',
	 	)
	 );
	// hide/show
	 $wp_customize->add_setting( 
	 	'hs_testimonial' , 
	 	array(
	 		'default'           => '1',
	 		'capability'        => 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_checkbox',
	 		'priority' => 2,
	 	) 
	 );
	 $wp_customize->add_control(
	 	'hs_testimonial', 
	 	array(
	 		'label'	      => esc_html__( 'Hide/Show', 'kundoo' ),
	 		'section'     => 'testimonial_setting',
	 		'type'        => 'checkbox',
	 	) 
	 );
	 // Testimonial Header Section // 
	 $wp_customize->add_setting(
	 	'testimonial_headings'
	 	,array(
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_text',
	 		'priority'          => 2,
	 	)
	 );
	 $wp_customize->add_control(
	 	'testimonial_headings',
	 	array(
	 		'type'    => 'hidden',
	 		'label'   => __('Header','kundoo'),
	 		'section' => 'testimonial_setting',
	 	)
	 );
	// Testimonial Title // 
	 $wp_customize->add_setting(
	 	'testimonial_title',
	 	array(
	 		'default'			=> __('Testimonials','kundoo'),
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_html',
	 		'priority'          => 1,
	 	)
	 );	
	 $wp_customize->add_control( 
	 	'testimonial_title',
	 	array(
	 		'label'   => __('Title','kundoo'),
	 		'section' => 'testimonial_setting',
	 		'type'    => 'text',
	 	)  
	 );
	// Testimonial Subtitle // 
	 $wp_customize->add_setting(
	 	'testimonial_subtitle',
	 	array(
	 		'default'			=> __('What Customers <span class="text-primary">Says About Us</span>','kundoo'),
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_html',
	 		'priority'          => 2,
	 	)
	 );	
	 $wp_customize->add_control( 
	 	'testimonial_subtitle',
	 	array(
	 		'label'   => __('Subtitle','kundoo'),
	 		'section' => 'testimonial_setting',
	 		'type'    => 'textarea',
	 	)  
	 );
	// Testimonial Description // 
	 $wp_customize->add_setting(
	 	'testimonial_description',
	 	array(
	 		'default'			=> __("This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.",'kundoo'),
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_html',
	 		'priority'          => 3,
	 	)
	 );	

	 $wp_customize->add_control( 
	 	'testimonial_description',
	 	array(
	 		'label'   => __('Description','kundoo'),
	 		'section' => 'testimonial_setting',
	 		'type'    => 'textarea',
	 	)  
	 );
	// Testimonial content Section // 
	 $wp_customize->add_setting(
	 	'testimonial_content_head'
	 	,array(
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_text',
	 		'priority'          => 3,
	 	)
	 );
	 $wp_customize->add_control(
	 	'testimonial_content_head',
	 	array(
	 		'type'   => 'hidden',
	 		'label'  => __('Content','kundoo'),
	 		'section'=> 'testimonial_setting',
	 	)
	 );
	/**
	 * Customizer Repeater for add Testimonial
	 */
	$wp_customize->add_setting( 'testimonial_contents', 
		array(
			'sanitize_callback' => 'burger_companion_repeater_sanitize',
			'priority'          => 1,
			'default'           => kundoo_get_testimonial_default()
		)
	);
	$wp_customize->add_control( 
		new Burger_Companion_Repeater( $wp_customize, 
			'testimonial_contents', 
			array(
				'label'   => esc_html__('Testimonial','kundoo'),
				'section' => 'testimonial_setting',
				'add_field_label'                   => esc_html__( 'Add New Testimonial', 'kundoo' ),
				'item_name'                         => esc_html__( 'Testimonial', 'kundoo' ),
				'customizer_repeater_image_control'    => true,
				'customizer_repeater_title_control'    => true,
				'customizer_repeater_subtitle_control' => true,
				'customizer_repeater_text_control'     => true
			) 
		) 
	);

 // Pro feature
	class Kundoo_testimonial_upgrade_section extends WP_Customize_Control {
		public function render_content() { 
			?>	

			<a class="customizer_Kundoo_testimonial_upgrade_section up-to-pro" href="https://burgerthemes.com/kundoo-pro/" target="_blank" style="display: none;"><?php _e('More Testimonials Available in Kundoo Pro','kundoo'); ?></a>

			<?php
		}
	}
	$wp_customize->add_setting( 'Kundoo_testimonial_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	    => 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new Kundoo_testimonial_upgrade_section(
			$wp_customize,
			'Kundoo_testimonial_upgrade_to_pro',
			array(
				'section'				=> 'testimonial_setting'
			)
		)
	);
}
add_action( 'customize_register', 'kundoo_testimonial_setting' );

// Testimonial selective refresh
function kundoo_testimonial_section_partials( $wp_customize ){

	// Testimonial subtitle
	$wp_customize->selective_refresh->add_partial( 'testimonial_subtitle', array(
		'selector'            => '.testimonials-section .heading-default h2',
		'settings'            => 'testimonial_subtitle',
		'render_callback'     => 'kundoo_testimonial_subtitle_render_callback',
	) );
}
add_action( 'customize_register', 'kundoo_testimonial_section_partials' );

	// Testimonial subtitle
function kundoo_testimonial_subtitle_render_callback() {
	return get_theme_mod( 'testimonial_subtitle' );
}
