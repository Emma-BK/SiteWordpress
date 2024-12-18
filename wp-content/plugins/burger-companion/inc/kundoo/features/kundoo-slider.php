<?php
function kundoo_slider_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
	$wp_customize->add_section(
		'slider_setting', array(
			'title'    => esc_html__( 'Slider Section', 'kundoo' ),
			'panel'    => 'kundoo_frontpage_sections',
			'priority' => 1,
		)
	);
	// slider Contents
	$wp_customize->add_setting(
		'slider_content_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'kundoo_sanitize_text',
			'priority'          => 3,
		)
	);

	$wp_customize->add_control(
		'slider_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Contents','kundoo'),
			'section' => 'slider_setting',
		)
	);
	/**
	 * Customizer Repeater for add slides
	 */
	$wp_customize->add_setting( 'slider_contents', 
		array(
			'sanitize_callback' => 'burger_companion_repeater_sanitize',
			'priority'          => 5,
			'default'           => kundoo_get_slider_default()
		)
	);
	$wp_customize->add_control( 
		new Burger_Companion_Repeater( $wp_customize, 
			'slider_contents', 
			array(
				'label'   => esc_html__('Slide','kundoo'),
				'section' => 'slider_setting',
				'add_field_label'                   => esc_html__( 'Add New Slide', 'kundoo' ),
				'item_name'                         => esc_html__( 'Slide', 'kundoo' ),

				'customizer_repeater_icon_control'            => false,
				'customizer_repeater_title_control'           => true,
				'customizer_repeater_subtitle_control'        => true,
				'customizer_repeater_text_control'            => true,
				'customizer_repeater_shortcode_control'       => true,
				'customizer_repeater_text2_control'           => true,
				'customizer_repeater_link_control'            => true,
				'customizer_repeater_icon_control'            => true,
				'customizer_repeater_image_control'           => true,
				'customizer_repeater_link2_control'           => true,
			) 
		) 
	);

	 // Pro feature
	class Kundoo_slider_upgrade_section extends WP_Customize_Control {
		public function render_content() { 
			?>	

			<a class="customizer_Kundoo_slider_upgrade_section up-to-pro" href="https://burgerthemes.com/kundoo-pro/" target="_blank" style="display: none;"><?php _e('More Slides Available in Kundoo Pro','kundoo'); ?></a>

			<?php
		}
	}
	$wp_customize->add_setting( 'Kundoo_slider_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	    => 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new Kundoo_slider_upgrade_section(
			$wp_customize,
			'Kundoo_slider_upgrade_to_pro',
			array(
				'section'				=> 'slider_setting'
			)
		)
	);
}

add_action( 'customize_register', 'kundoo_slider_setting' );

// slider selective refresh
function kundoo_home_slider_section_partials( $wp_customize ){	
	// slider
	$wp_customize->selective_refresh->add_partial( 'slider_contents', array(
		'selector'            => '.main-slider .main-content h2',
		'settings'            => 'slider_contents',
		'render_callback'  => 'kundoo_slider_render_callback',

	) );
}
add_action( 'customize_register', 'kundoo_home_slider_section_partials' );

// slider
function kundoo_slider_render_callback() {
	return get_theme_mod( 'slider_contents' );
}
