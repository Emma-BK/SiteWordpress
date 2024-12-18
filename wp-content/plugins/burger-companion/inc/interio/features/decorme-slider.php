<?php
function decorme_slider2_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Slider Section Panel
	=========================================*/
	$wp_customize->add_panel(
		'decorme_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'decorme' ),
		)
	);
	
	$wp_customize->add_section(
		'slider2_setting', array(
			'title' => esc_html__( 'Slider Section', 'decorme' ),
			'panel' => 'decorme_frontpage_sections',
			'priority' => 1,
		)
	);
	
	/*=========================================
	Slider Two
	=========================================*/
	
	// Setting head
	$wp_customize->add_setting(
		'slider2_setting_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_text',
			'priority' => 31,
		)
	);

	$wp_customize->add_control(
		'slider2_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','decorme'),
			'section' => 'slider2_setting',
		)
	);
	// Hide / Show
	$wp_customize->add_setting(
		'slider2_hs'
		,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_checkbox',
			'priority' => 31,
		)
	);

	$wp_customize->add_control(
		'slider2_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','decorme'),
			'section' => 'slider2_setting',
		)
	);

// Social Hide/Show
	$wp_customize->add_setting( 
		'slider2_hs_social_icon' , 
		array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_checkbox',
			'priority' => 32,
		) 
	);
	
	$wp_customize->add_control(
		'slider2_hs_social_icon', 
		array(
			'label'	      => esc_html__( 'Hide/Show Social Icon', 'decorme' ),
			'section'     => 'slider2_setting',
			'type'        => 'checkbox',
		) 
	);
	// Social Title // 
	$wp_customize->add_setting(
		'slider2_social_ttl',
		array(
			'default'			=> __('FOLLOW','decorme'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'decorme_sanitize_html',
			'priority' => 33,
		)
	);	
	$wp_customize->add_control( 
		'slider2_social_ttl',
		array(
			'label'   => __('Social Title','decorme'),
			'section' => 'slider2_setting',
			'type'           => 'text',
		)  
	);
   /**
	 * Customizer Repeater
	 */
   if ( class_exists( 'Burger_Companion_Repeater' ) ) {
   	$wp_customize->add_setting( 'slider2_social_icons', 
   		array(
   			'sanitize_callback' => 'burger_companion_repeater_sanitize',
   			'priority' => 34,
   			'default' => decorme_get_social_icon_default()
   		)
   	);
   	$wp_customize->add_control( 
   		new Burger_Companion_Repeater( $wp_customize, 
   			'slider2_social_icons', 
   			array(
   				'label'   => esc_html__('Social Icons','decorme'),
   				'add_field_label'                   => esc_html__( 'Add New Social', 'decorme' ),
   				'item_name'                         => esc_html__( 'Social', 'decorme' ),
   				'section' => 'slider2_setting',
   				'customizer_repeater_icon_control' => true,
   				'customizer_repeater_link_control' => true,
   			) 
   		) 
   	);		
   }
   //Pro feature
   class Decoreme_social_section_upgrade extends WP_Customize_Control {
   	public function render_content() { 
   		?>
   		<a class="customizer_DecorMe_social_upgrade_section up-to-pro" href="https://burgerthemes.com/interio-pro/" target="_blank" style="display: none;"><?php _e('More Icons Available in Interio Pro','decorme'); ?></a>
   		<?php
   	} 
   }
   $wp_customize->add_setting( 'decorme_social_upgrade_to_pro', array(
   	'capability'		   => 'edit_theme_options',
   	'priority'             => 35,
   	'sanitize_callback'	   => 'wp_filter_nohtml_kses',
   ));
   $wp_customize->add_control(
   	new Decoreme_social_section_upgrade(
   		$wp_customize,
   		'decorme_social_upgrade_to_pro',
   		array(
   			'section'				=> 'slider2_setting',
   		)
   	)
   );		
	//Content Head
   $wp_customize->add_setting(
   	'slider2_content_head'
   	,array(
   		'capability'     	=> 'edit_theme_options',
   		'sanitize_callback' => 'decorme_sanitize_text',
   		'priority' => 31,
   	)
   );

   $wp_customize->add_control(
   	'slider2_content_head',
   	array(
   		'type' => 'hidden',
   		'label' => __('Content','decorme'),
   		'section' => 'slider2_setting',
   	)
   );
	/**
	 * Customizer Repeater for add slides
	 */
	if ( class_exists( 'Burger_Companion_Repeater' ) ) {
		$wp_customize->add_setting( 'slider2', 
			array(
				'sanitize_callback' => 'burger_companion_repeater_sanitize',
				'priority' => 32,
				'default' => decorme_get_slider2_default()
			)
		);
		
		$wp_customize->add_control( 
			new Burger_Companion_Repeater( $wp_customize, 
				'slider2', 
				array(
					'label'   => esc_html__('Slide','decorme'),
					'section' => 'slider2_setting',
					'add_field_label'                   => esc_html__( 'Add New Slider', 'decorme' ),
					'item_name'                         => esc_html__( 'Slider', 'decorme' ),

					'customizer_repeater_title_control'    => true,
					'customizer_repeater_subtitle_control' => true,
					'customizer_repeater_text_control'     => true,
					'customizer_repeater_text2_control'    => true,
					'customizer_repeater_link_control'     => true,
					'customizer_repeater_image_control'    => true,	
				) 
			) 
		);
	}
  // Pro Feature
	class DecorMe_slider_section_upgrade extends WP_Customize_Control {
		public function render_content() { 
			?>
			<a class="customizer_DecorMe_slider_upgrade_section up-to-pro" href="https://burgerthemes.com/interio-pro/" target="_blank" style="display: none;"><?php _e('More Slides Available in Interio Pro','decorme'); ?></a>
			<?php
		} 
	}	
	
	$wp_customize->add_setting( 'decorme_slider_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		'priority' => 32,
	));
	$wp_customize->add_control(
		new DecorMe_slider_section_upgrade(
			$wp_customize,
			'decorme_slider_upgrade_to_pro',
			array(
				'section'				=> 'slider2_setting',
			)
		)
	);
}
add_action( 'customize_register', 'decorme_slider2_setting' );

// slider social icons selective refresh
function decorme_home_slider2_section_partials( $wp_customize ){	
	// Social Title
	$wp_customize->selective_refresh->add_partial( 'slider2_social_ttl', array(
		'selector'            => '.slider-section.home-slider-two .follow-us .title',
		'settings'            => 'slider2_social_ttl',
		'render_callback'     => 'decorme_slider2_social_ttl_render_callback',

	) );

	// info content
	$wp_customize->selective_refresh->add_partial( 'slider2_social_icons', array(
		'selector'            => '.slider-section.home-slider-two .widget_social'

	) );
}
add_action( 'customize_register', 'decorme_home_slider2_section_partials' );

// Social Title
function decorme_slider2_social_ttl_render_callback() {
	return get_theme_mod( 'slider2_social_ttl' );
}
