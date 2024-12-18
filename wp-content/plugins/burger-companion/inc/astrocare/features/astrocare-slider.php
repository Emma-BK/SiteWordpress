<?php
function astrocare_slider_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'astrocare' ),
			'panel' => 'astrocare_frontpage_sections',
			'priority' => 1
		)
	);

    // Slider Settings Section // 
	$wp_customize->add_setting(
		'slider_setting_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_text',
			'priority' => 1
		)
	);

	$wp_customize->add_control(
		'slider_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Settings','astrocare'),
			'section' => 'slider_setting'
		)
	);

	// hide/show section
	$wp_customize->add_setting( 
		'hs_slider', 
		array(
			'default'   => '1',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_checkbox',
			'priority' => 1
		) 
	);
	
	$wp_customize->add_control(
		'hs_slider', 
		array(
			'label'	      => esc_html__( 'Hide/Show Section', 'astrocare' ),
			'section'     => 'slider_setting',
			'type'        => 'checkbox'
		) 
	);

	 // hide/show icon
	$wp_customize->add_setting( 
		'hs_slider_ticon', 
		array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_checkbox',
			'priority' => 2
		) 
	);
	$wp_customize->add_control(
		'hs_slider_ticon', 
		array(
			'label'	      => esc_html__( 'Title Img Hide/Show', 'astrocare' ),
			'section'     => 'slider_setting',
			'type'        => 'checkbox'
		) 
	);

	 // Zodiac Wheel Animation Stop/Run
	$wp_customize->add_setting( 
		'sr_zodiac_animation', 
		array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_checkbox',
			'priority' => 3
		) 
	);
	$wp_customize->add_control(
		'sr_zodiac_animation', 
		array(
			'label'	      => esc_html__( 'Zodiac Wheel Animation Stop/Run', 'astrocare' ),
			'section'     => 'slider_setting',
			'type'        => 'checkbox'
		) 
	);

	 // Zodiac Wheel hide/show
	$wp_customize->add_setting( 
		'hs_slider_wheel', 
		array(
			'default' => '1',
			'capability'   => 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_checkbox',
			'priority' => 4
		) 
	);
	$wp_customize->add_control(
		'hs_slider_wheel', 
		array(
			'label'	      => esc_html__( 'Zodiac Wheel Hide/Show', 'astrocare' ),
			'section'     => 'slider_setting',
			'type'        => 'checkbox'
		) 
	);

	// slider Title Image // 
	$wp_customize->add_setting( 
		'slider_title_img', 
		array(
			'default' 			=> get_template_directory_uri() .'/assets/images/general/earth.png',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_url',	
			'priority' => 5,
		) 
	);

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'slider_title_img' ,
		array(
			'label'          => esc_html__( 'slider Title Image', 'astrocare'),
			'section'        => 'slider_setting',
		) 
	));
	
	
	// slider Contents
	$wp_customize->add_setting(
		'slider_content_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_text',
			'priority' => 2,
		)
	);

	$wp_customize->add_control(
		'slider_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Contents','astrocare'),
			'section' => 'slider_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add slides
	 */
	
	$wp_customize->add_setting( 'slider', 
		array(
			'sanitize_callback' => 'burger_companion_repeater_sanitize',
			'priority' => 1,
			'default' => astrocare_get_slider_default()
		)
	);

	$wp_customize->add_control( 
		new Burger_Companion_Repeater( $wp_customize, 
			'slider', 
			array(
				'label'   => esc_html__('Slide','astrocare'),
				'section' => 'slider_setting',
				'add_field_label'                   => esc_html__( 'Add New Slider', 'astrocare' ),
				'item_name'                         => esc_html__( 'Slider', 'astrocare' ),

				'customizer_repeater_icon_control'     => false,
				'customizer_repeater_title_control'    => true,
				'customizer_repeater_subtitle_control' => true,
				'customizer_repeater_text_control'     => true,
				'customizer_repeater_text2_control'    => true,
				'customizer_repeater_link_control'     => true,
				'customizer_repeater_image_control'    => true,
				'customizer_repeater_image2_control'   => true,	
			) 
		) 
	);

	//Pro feature
	class Astrocare_slider_section_upgrade extends WP_Customize_Control {
		public function render_content() { 
				$theme = wp_get_theme(); // gets the current theme
				if ( 'Astrocare' == $theme->name){	
					?>
					<a class="customizer_Astrocare_slider_upgrade_section up-to-pro" href="<?php echo esc_url("https://burgerthemes.com/astrocare-pro/"); ?>" target="_blank" style="display: none;"><?php _e('More Slides Available in Astrocare Pro','astrocare'); ?></a>
					<?php
				} }
			}

			$wp_customize->add_setting( 'astrocare_slider_upgrade_to_pro', array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'wp_filter_nohtml_kses',
				'priority' => 5,
			));
			$wp_customize->add_control(
				new Astrocare_slider_section_upgrade(
					$wp_customize,
					'astrocare_slider_upgrade_to_pro',
					array(
						'section'	=> 'slider_setting',
					)
				)
			);
		}
		add_action( 'customize_register', 'astrocare_slider_setting' );