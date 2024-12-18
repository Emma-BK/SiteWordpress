<?php
function kundoo_service_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Service  Section
	=========================================*/
	$wp_customize->add_section(
		'service_setting', array(
			'title' => esc_html__( 'Service Section', 'kundoo' ),
			'priority' => 3,
			'panel' => 'kundoo_frontpage_sections',
		)
	);
	
	// Service Settings Section // 
	$wp_customize->add_setting(
		'service_setting_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'kundoo_sanitize_text',
			'priority'          => 2,
		)
	);

	$wp_customize->add_control(
		'service_setting_head',
		array(
			'type'    => 'hidden',
			'label'   => __('Settings','kundoo'),
			'section' => 'service_setting',
		)
	);
	// hide/show
	$wp_customize->add_setting( 
		'hs_service' , 
		array(
			'default'           => '1',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'kundoo_sanitize_checkbox',
			'priority' => 2,
		) 
	);
	$wp_customize->add_control(
		'hs_service', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'kundoo' ),
			'section'     => 'service_setting',
			'type'        => 'checkbox',
		) 
	);
	// Service Header Section // 
	$wp_customize->add_setting(
		'service_headings',
		array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'kundoo_sanitize_text',
			'priority'          => 3,
		)
	);

	$wp_customize->add_control(
		'service_headings',
		array(
			'type'    => 'hidden',
			'label'   => __('Header','kundoo'),
			'section' => 'service_setting',
		)
	);	
	// Service Title // 
	$wp_customize->add_setting(
		'service_title',
		array(
			'default'			=> __('Services','kundoo'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'kundoo_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 1,
		)
	);	
	
	$wp_customize->add_control( 
		'service_title',
		array(
			'label'   => __('Title','kundoo'),
			'section' => 'service_setting',
			'type'    => 'text',
		)  
	);
	// Service Subtitle // 
	$wp_customize->add_setting(
		'service_subtitle',
		array(
			'default'			=>__('Explore <span class="text-primary">Our Services</span>','kundoo'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'kundoo_sanitize_html',
			'transport'         => $selective_refresh,
			'priority'          => 2,
		)
	);
	$wp_customize->add_control( 
		'service_subtitle',
		array(
			'label'   => __('Subtitle','kundoo'),
			'section' => 'service_setting',
			'type'    => 'textarea',
		)  
	);
	// Service Description // 
	$wp_customize->add_setting(
		'service_description',
		array(
			'default'			=> __('We are your partners in progress. Our comprehensive range of service is designed to drive your business','kundoo'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'kundoo_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 3,
		)
	);	
	$wp_customize->add_control( 
		'service_description',
		array(
			'label'   => __('Description','kundoo'),
			'section' => 'service_setting',
			'type'    => 'textarea',
		)  
	);
	// Service content Section // 
	$wp_customize->add_setting(
		'service_content_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'kundoo_sanitize_text',
			'priority'          => 4,
		)
	);
	$wp_customize->add_control(
		'service_content_head',
		array(
			'type'   => 'hidden',
			'label'  => __('Content','kundoo'),
			'section'=> 'service_setting',
		)
	);
		/**
	 * Customizer Repeater for add service
	 */
		$wp_customize->add_setting( 'service_contents', 
			array(
				'sanitize_callback' => 'burger_companion_repeater_sanitize',
				'transport'         => $selective_refresh,
				'priority'          => 1,
				'default'           => kundoo_get_service_default()
			)
		);
		$wp_customize->add_control( 
			new Burger_Companion_Repeater( $wp_customize, 
				'service_contents', 
				array(
					'label'   => esc_html__('Service','kundoo'),
					'section' => 'service_setting',
					'add_field_label'                   => esc_html__( 'Add New Service', 'kundoo' ),
					'item_name'                         => esc_html__( 'Service', 'kundoo' ),
					'customizer_repeater_icon_control'  => true,
					'customizer_repeater_title_control' => true,
					'customizer_repeater_text_control'  => true,
					'customizer_repeater_link_control'  => true,
				) 
			) 
		);
        // Pro feature
		class Kundoo_service_upgrade_section extends WP_Customize_Control {
			public function render_content() { 
				?>	

				<a class="customizer_Kundoo_service_upgrade_section up-to-pro" href="https://burgerthemes.com/kundoo-pro/" target="_blank" style="display: none;"><?php _e('More Services Available in Kundoo Pro','kundoo'); ?></a>

				<?php
			}
		}
		$wp_customize->add_setting( 'Kundoo_service_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	    => 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new Kundoo_service_upgrade_section(
				$wp_customize,
				'Kundoo_service_upgrade_to_pro',
				array(
					'section'				=> 'service_setting'
				)
			)
		);
	     // Image // 
		$wp_customize->add_setting( 
			'service_img' , 
			array(
				'default' 			=> BURGER_COMPANION_PLUGIN_URL .'inc/kundoo/images/services/girl-02.png',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'kundoo_sanitize_url',	
				'priority'          => 10,
			) 
		);
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'service_img' ,
			array(
				'label'          => esc_html__( 'Image', 'kundoo'),
				'section'        => 'service_setting',
			) 
		));

	}

	add_action( 'customize_register', 'kundoo_service_setting' );

	// service selective refresh
	function kundoo_home_service_section_partials( $wp_customize ){	
	// service subtitle
		$wp_customize->selective_refresh->add_partial( 'service_subtitle', array(
			'selector'            => '.service-section .heading-default .service-sec',
			'settings'            => 'service_subtitle',
			'render_callback'     => 'kundoo_service_subtitle_render_callback',

		) );
	}
	add_action( 'customize_register', 'kundoo_home_service_section_partials' );

// service title
	function kundoo_service_subtitle_render_callback() {
		return get_theme_mod( 'service_subtitle' );
	}