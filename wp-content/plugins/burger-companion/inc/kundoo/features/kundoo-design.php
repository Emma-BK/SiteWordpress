<?php
function kundoo_design_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	 Design Section
	 =========================================*/
	 $wp_customize->add_section(
	 	'design_setting', array(
	 		'title' => esc_html__( 'Design Section', 'kundoo' ),
	 		'priority' => 5,
	 		'panel' => 'kundoo_frontpage_sections',
	 	)
	 );
	// Design Settings Section // 
	 $wp_customize->add_setting(
	 	'design_setting_head'
	 	,array(
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_text',
	 		'priority'          => 1,
	 	)
	 );
	 $wp_customize->add_control(
	 	'design_setting_head',
	 	array(
	 		'type'    => 'hidden',
	 		'label'   => __('Settings','kundoo'),
	 		'section' => 'design_setting',
	 	)
	 );
	// hide/show
	 $wp_customize->add_setting( 
	 	'hs_design' , 
	 	array(
	 		'default'           => '1',
	 		'capability'        => 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_checkbox',
	 		'priority' => 2,
	 	) 
	 );
	 $wp_customize->add_control(
	 	'hs_design', 
	 	array(
	 		'label'	      => esc_html__( 'Hide/Show', 'kundoo' ),
	 		'section'     => 'design_setting',
	 		'type'        => 'checkbox',
	 	) 
	 );
	// Design Header Section // 
	 $wp_customize->add_setting(
	 	'design_headings',
	 	array(
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_text',
	 		'priority'          => 3,
	 	)
	 );

	 $wp_customize->add_control(
	 	'design_headings',
	 	array(
	 		'type'    => 'hidden',
	 		'label'   => __('Header','kundoo'),
	 		'section' => 'design_setting',
	 	)
	 );
	// Design Title // 
	 $wp_customize->add_setting(
	 	'design_title',
	 	array(
	 		'default'			=> __('About our company','kundoo'),
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_html',
	 		'priority'          => 1,
	 	)
	 );	
	 $wp_customize->add_control( 
	 	'design_title',
	 	array(
	 		'label'   => __('Title','kundoo'),
	 		'section' => 'design_setting',
	 		'type'    => 'text',
	 	)  
	 );
	// Design Subtitle // 
	 $wp_customize->add_setting(
	 	'design_subtitle',
	 	array(
	 		'default'			=>__('We Are Top Business Consultation Agency','kundoo'),
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_html',
	 		'priority'          => 2,
	 	)
	 );
	 $wp_customize->add_control( 
	 	'design_subtitle',
	 	array(
	 		'label'   => __('Subtitle','kundoo'),
	 		'section' => 'design_setting',
	 		'type'    => 'textarea',
	 	)  
	 );
	// Design Description // 
	 $wp_customize->add_setting(
	 	'design_description',
	 	array(
	 		'default'			=> __("This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.",'kundoo'),
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_html',
	 		'priority' => 3,
	 	)
	 );	
	 $wp_customize->add_control( 
	 	'design_description',
	 	array(
	 		'label'   => __('Description','kundoo'),
	 		'section' => 'design_setting',
	 		'type'    => 'textarea',
	 	)  
	 );
     // Design Left Content // 
	 $wp_customize->add_setting(
	 	'design_leftContent',
	 	array(
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_text',
	 		'priority'          => 4,
	 	)
	 );
	 $wp_customize->add_control(
	 	'design_leftContent',
	 	array(
	 		'type'    => 'hidden',
	 		'label'   => __('Left Content','kundoo'),
	 		'section' => 'design_setting',
	 	)
	 );
	 // Design Left Title // 
	 $wp_customize->add_setting(
	 	'design_left_title',
	 	array(
	 		'default'			=>__('Since <span class="counter">2000</span>','kundoo'),
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_html',
	 		'priority'          => 1,
	 	)
	 );
	 $wp_customize->add_control( 
	 	'design_left_title',
	 	array(
	 		'label'   => __('Design Title','kundoo'),
	 		'section' => 'design_setting',
	 		'type'    => 'textarea',
	 	)  
	 );
	 // Design Left icon // 
	 $wp_customize->add_setting(
	 	'design_left_icon',
	 	array(
	 		'default'           => 'fa-flag',
	 		'sanitize_callback' => 'sanitize_text_field',
	 		'capability'        => 'edit_theme_options',
	 		'priority'      => 2
	 	)
	 );	
	 $wp_customize->add_control(new Kundoo_Icon_Picker_Control($wp_customize, 
	 	'design_left_icon',
	 	array(
	 		'label'   		=> __('Design Left Icon','kundoo'),
	 		'section' 		=> 'design_setting',
	 		'iconset'       => 'fa',
	 	))  
	);
	// Image 1 // 
	 $wp_customize->add_setting( 
	 	'design_left_img1' , 
	 	array(
	 		'default' 			=> BURGER_COMPANION_PLUGIN_URL .'inc/kundoo/images/design/design-img-01.jpg',
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_url',	
	 		'priority'          => 3,
	 	) 
	 );
	 $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'design_left_img1' ,
	 	array(
	 		'label'          => esc_html__( 'Image 1', 'kundoo'),
	 		'section'        => 'design_setting',
	 	) 
	 ));
	 // Image 2 // 
	 $wp_customize->add_setting( 
	 	'design_left_img2' , 
	 	array(
	 		'default' 			=> BURGER_COMPANION_PLUGIN_URL .'inc/kundoo/images/design/design-img-02.jpg',
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_url',	
	 		'priority'          => 4,
	 	) 
	 );
	 $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'design_left_img2' ,
	 	array(
	 		'label'          => esc_html__( 'Image 2', 'kundoo'),
	 		'section'        => 'design_setting',
	 	) 
	 ));
	// Design Right Content // 
	 $wp_customize->add_setting(
	 	'design_rightContent',
	 	array(
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_text',
	 		'priority'          => 5,
	 	)
	 );
	 $wp_customize->add_control(
	 	'design_rightContent',
	 	array(
	 		'type'    => 'hidden',
	 		'label'   => __('Right Content','kundoo'),
	 		'section' => 'design_setting',
	 	)
	 );
	 /**
	 * Customizer Repeater for add Design
	 */
	 $wp_customize->add_setting( 'design_contents', 
	 	array(
	 		'sanitize_callback' => 'burger_companion_repeater_sanitize',
	 		'priority'          => 1,
	 		'default'           => kundoo_get_design_default()
	 	)
	 );
	 $wp_customize->add_control( 
	 	new Burger_Companion_Repeater( $wp_customize, 
	 		'design_contents', 
	 		array(
	 			'label'   => esc_html__('Design','kundoo'),
	 			'section' => 'design_setting',
	 			'add_field_label'                   => esc_html__( 'Add New Design', 'kundoo' ),
	 			'item_name'                         => esc_html__( 'Design', 'kundoo' ),
	 			'customizer_repeater_icon_control'  => true,
	 			'customizer_repeater_text_control'  => true
	 		) 
	 	) 
	 );

     // Pro feature
	 class Kundoo_design_upgrade_section extends WP_Customize_Control {
	 	public function render_content() { 
	 		?>	

	 		<a class="customizer_Kundoo_design_upgrade_section up-to-pro" href="https://burgerthemes.com/kundoo-pro/" target="_blank" style="display: none;"><?php _e('More Designs Available in Kundoo Pro','kundoo'); ?></a>

	 		<?php
	 	}
	 }
	 $wp_customize->add_setting( 'Kundoo_design_upgrade_to_pro', array(
	 	'capability'			=> 'edit_theme_options',
	 	'sanitize_callback'	    => 'wp_filter_nohtml_kses',
	 ));
	 $wp_customize->add_control(
	 	new Kundoo_design_upgrade_section(
	 		$wp_customize,
	 		'Kundoo_design_upgrade_to_pro',
	 		array(
	 			'section'				=> 'design_setting'
	 		)
	 	)
	 );
	// Right Design Contact Info Title // 
	 $wp_customize->add_setting(
	 	'rig_de_cont_info_title',
	 	array(
	 		'default'			=>__('Get a free Quote','kundoo'),
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_html',
	 		'priority'          => 2,
	 	)
	 );
	 $wp_customize->add_control( 
	 	'rig_de_cont_info_title',
	 	array(
	 		'label'   => __('Right Design contact Info Title','kundoo'),
	 		'section' => 'design_setting',
	 		'type'    => 'textarea',
	 	)  
	 );
// Right Design Contact Info Subtitle // 
	 $wp_customize->add_setting(
	 	'rig_de_cont_info_subtitle',
	 	array(
	 		'default'			=>__('+92(8830)36780','kundoo'),
	 		'capability'     	=> 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_html',
	 		'priority'          => 3,
	 	)
	 );
	 $wp_customize->add_control( 
	 	'rig_de_cont_info_subtitle',
	 	array(
	 		'label'   => __(' Right Design contact Info Subtitle','kundoo'),
	 		'section' => 'design_setting',
	 		'type'    => 'textarea',
	 	)  
	 );
   // Right Design Contact Info icon// 
	 $wp_customize->add_setting(
	 	'rig_de_cont_info_icon',
	 	array(
	 		'default'           => 'fa-phone',
	 		'sanitize_callback' => 'sanitize_text_field',
	 		'capability'        => 'edit_theme_options',
	 		'priority'      => 4
	 	)
	 );	
	 $wp_customize->add_control(new Kundoo_Icon_Picker_Control($wp_customize, 
	 	'rig_de_cont_info_icon',
	 	array(
	 		'label'   		=> __('Design Right Contact Info Icon','kundoo'),
	 		'section' 		=> 'design_setting',
	 		'iconset'       => 'fa'
	 	))  
	);
	// Right Design Contact Info icon// 
	 $wp_customize->add_setting(
	 	'rig_de_cont_info_iconLink',
	 	array(
	 		'default'			=> '',
	 		'sanitize_callback' => 'kundoo_sanitize_url',
	 		'capability'        => 'edit_theme_options',
	 		'priority'          => 5
	 	)
	 );	
	 $wp_customize->add_control( 
	 	'rig_de_cont_info_iconLink',
	 	array(
	 		'label'   		=> __('Design Right Contact Info Icon Link','kundoo'),
	 		'section' 		=> 'design_setting',
	 		'type'		    =>	'text'
	 	)  
	 );
	 // Right Design Button Label // 
	 $wp_customize->add_setting(
	 	'right_design_btn_label',
	 	array(
	 		'default'			=> __('Discover More','kundoo'),
	 		'sanitize_callback' => 'kundoo_sanitize_text',
	 		'capability'        => 'edit_theme_options',
	 		'priority'      => 6
	 	)
	 );	
	 $wp_customize->add_control( 
	 	'right_design_btn_label',
	 	array(
	 		'label'   		=> __('Button Label','kundoo'),
	 		'section' 		=> 'design_setting',
	 		'type'		    =>	'text'
	 	)  
	 );
	// Right Design Button URL // 
	 $wp_customize->add_setting(
	 	'right_design_btn_url',
	 	array(
	 		'default'			=> '',
	 		'sanitize_callback' => 'kundoo_sanitize_url',
	 		'capability'        => 'edit_theme_options',
	 		'priority'          => 7
	 	)
	 );	
	 $wp_customize->add_control( 
	 	'right_design_btn_url',
	 	array(
	 		'label'   		=> __('Button Link','kundoo'),
	 		'section' 		=> 'design_setting',
	 		'type'		    =>	'text'
	 	)  
	 );
	// Right Design New Tab // 
	 $wp_customize->add_setting( 
	 	'design_btn_new_tab' , 
	 	array(
	 		'capability'        => 'edit_theme_options',
	 		'sanitize_callback' => 'kundoo_sanitize_checkbox',
	 		'priority'          => 8
	 	) 
	 );
	 $wp_customize->add_control(
	 	'design_btn_new_tab', 
	 	array(
	 		'label'	      => esc_html__( 'Open in New Tab ?', 'kundoo' ),
	 		'section'     => 'design_setting',
	 		'type'        => 'checkbox'
	 	) 
	 );
	// Design button icon // 
	 $wp_customize->add_setting(
	 	'design_btn_icon',
	 	array(
	 		'default'           => 'fa-globe',
	 		'sanitize_callback' => 'sanitize_text_field',
	 		'capability'        => 'edit_theme_options',
	 		'priority'          => 9
	 	)
	 );	
	 $wp_customize->add_control(new Kundoo_Icon_Picker_Control($wp_customize, 
	 	'design_btn_icon',
	 	array(
	 		'label'   		=> __('Design Button Icon','kundoo'),
	 		'section' 		=> 'design_setting',
	 		'iconset'       => 'fa'
	 	))  
	);

	}
	add_action( 'customize_register', 'kundoo_design_setting' );

     // Design selective refresh
	function kundoo_design_section_partials( $wp_customize ){	
        // Design subtitle
		$wp_customize->selective_refresh->add_partial( 'design_subtitle', array(
			'selector'            => '.design-section .heading-default h2',
			'settings'            => 'design_subtitle',
			'render_callback'     => 'kundoo_design_subtitle_render_callback',

		) );
	    // Design button
		$wp_customize->selective_refresh->add_partial( 'right_design_btn_label', array(
			'selector'            => '.design-section .btn-wrap',
			'settings'            => 'right_design_btn_label',
			'render_callback'     => 'kundoo_design_btn_render_callback',

		) );
	}
	add_action( 'customize_register', 'kundoo_design_section_partials' );
// Design subtitle
	function kundoo_design_subtitle_render_callback() {
		return get_theme_mod( 'design_subtitle' );
	}
// Design button
	function kundoo_design_btn_render_callback() {
		return get_theme_mod( 'right_design_btn_label' );
	}