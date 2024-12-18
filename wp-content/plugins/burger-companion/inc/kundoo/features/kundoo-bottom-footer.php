<?php
function kundoo_bottom_footer( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Footer Section
	=========================================*/

	// Footer country Head
	$wp_customize->add_setting(
		'footer_btm_country_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'kundoo_sanitize_text',
			'priority'          => 4,
		)
	);
	$wp_customize->add_control(
		'footer_btm_country_head',
		array(
			'type'   => 'hidden',
			'label'  => __('Footer Country','kundoo'),
			'section'=> 'footer_bottom',
		)
	);

   // hide/show
	$wp_customize->add_setting( 
		'hs_footer_country' , 
		array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'kundoo_sanitize_checkbox',
			'priority' => 1,
		) 
	);
	
	$wp_customize->add_control(
		'hs_footer_country', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'kundoo' ),
			'section'     => 'footer_bottom',
			'type'        => 'checkbox',
		) 
	);	

	/**
	 * Customizer Repeater for add Footer Country
	 */
	$wp_customize->add_setting( 'footer_country', 
		array(
			'sanitize_callback' => 'burger_companion_repeater_sanitize',
			'transport'         => $selective_refresh,
			'priority'          => 1,
			'default'           => kundoo_get_footer_country_default()
		)
	);
	$wp_customize->add_control( 
		new Burger_Companion_Repeater( $wp_customize, 
			'footer_country', 
			array(
				'label'   => esc_html__('Country','kundoo'),
				'section' => 'footer_bottom',
				'add_field_label'                   => esc_html__( 'Add New Country', 'kundoo' ),
				'item_name'                         => esc_html__( 'Country', 'kundoo' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_link_control'  => true,
			) 
		) 
	);
     // Pro feature
	class Kundoo_footer_country_upgrade extends WP_Customize_Control {
		public function render_content() { 
			?>	

			<a class="customizer_Kundoo_footer_country_upgrade up-to-pro" href="https://burgerthemes.com/kundoo-pro/" target="_blank" style="display: none;"><?php _e('More Footer Countries Available in Kundoo Pro','kundoo'); ?></a>

			<?php
		}
	}
	$wp_customize->add_setting( 'Kundoo_footer_country_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	    => 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new Kundoo_footer_country_upgrade(
			$wp_customize,
			'Kundoo_footer_country_upgrade_to_pro',
			array(
				'section'				=> 'footer_bottom'
			)
		)
	);
	// Footer social icon Head
	$wp_customize->add_setting(
		'footer_btm_social_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'kundoo_sanitize_text',
			'priority'          => 5,
		)
	);
	$wp_customize->add_control(
		'footer_btm_social_head',
		array(
			'type'   => 'hidden',
			'label'  => __('Social icon','kundoo'),
			'section'=> 'footer_bottom',
		)
	);
   // hide/show
	$wp_customize->add_setting( 
		'hs_footer_social' , 
		array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'kundoo_sanitize_checkbox',
			'priority' => 1,
		) 
	);
	$wp_customize->add_control(
		'hs_footer_social', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'kundoo' ),
			'section'     => 'footer_bottom',
			'type'        => 'checkbox',
		) 
	);	
	/**
	 * Customizer Repeater for add Footer Social
	 */
	$wp_customize->add_setting( 'footer_social', 
		array(
			'sanitize_callback' => 'burger_companion_repeater_sanitize',
			'transport'         => $selective_refresh,
			'priority'          => 1,
			'default'           => kundoo_get_footer_Social_default()
		)
	);
	$wp_customize->add_control( 
		new Burger_Companion_Repeater( $wp_customize, 
			'footer_social', 
			array(
				'label'   => esc_html__('Social','kundoo'),
				'section' => 'footer_bottom',
				'add_field_label'                   => esc_html__( 'Add New Social', 'kundoo' ),
				'item_name'                         => esc_html__( 'Social', 'kundoo' ),
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_link_control'  => true,
			) 
		) 
	);

   // Pro feature
	class Kundoo_footer_social_upgrade extends WP_Customize_Control {
		public function render_content() { 
			?>	

			<a class="customizer_Kundoo_footer_social_upgrade up-to-pro" href="https://burgerthemes.com/kundoo-pro/" target="_blank" style="display: none;"><?php _e('More Footer Social Available in Kundoo Pro','kundoo'); ?></a>

			<?php
		}
	}
	$wp_customize->add_setting( 'Kundoo_footer_social_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	    => 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new Kundoo_footer_social_upgrade(
			$wp_customize,
			'Kundoo_footer_social_upgrade_to_pro',
			array(
				'section'				=> 'footer_bottom'
			)
		)
	);

	// Footer payment method Head
	$wp_customize->add_setting(
		'footer_btm_paymentmethod_head'
		,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'kundoo_sanitize_text',
			'priority'          => 6,
		)
	);
	$wp_customize->add_control(
		'footer_btm_paymentmethod_head',
		array(
			'type'   => 'hidden',
			'label'  => __('Payment Payment','kundoo'),
			'section'=> 'footer_bottom',
		)
	);
	// hide/show
	$wp_customize->add_setting( 
		'hs_payment_methods' , 
		array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'kundoo_sanitize_checkbox',
			'priority' => 1,
		) 
	);
	$wp_customize->add_control(
		'hs_payment_methods', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'kundoo' ),
			'section'     => 'footer_bottom',
			'type'        => 'checkbox',
		) 
	);	
	/**
	 * Customizer Repeater for add Payment Method
	 */
	$wp_customize->add_setting( 'payment_methods', 
		array(
			'sanitize_callback' => 'burger_companion_repeater_sanitize',
			'transport'         => $selective_refresh,
			'priority'          => 1,
			'default'           => kundoo_get_footer_paymentMethods_default()
		)
	);
	$wp_customize->add_control( 
		new Burger_Companion_Repeater( $wp_customize, 
			'payment_methods', 
			array(
				'label'   => esc_html__('PaymentMethods','kundoo'),
				'section' => 'footer_bottom',
				'add_field_label'                   => esc_html__( 'Add New PayMethods', 'kundoo' ),
				'item_name'                         => esc_html__( 'PaymentMethods', 'kundoo' ),
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_link_control'  => true,
			) 
		) 
	);

// Pro feature
	class Kundoo_footer_payment_methods_upgrade extends WP_Customize_Control {
		public function render_content() { 
			?>	

			<a class="customizer_Kundoo_footer_payment_methods_upgrade up-to-pro" href="https://burgerthemes.com/kundoo-pro/" target="_blank" style="display: none;"><?php _e('More Footer Payment Methods Available in Kundoo Pro','kundoo'); ?></a>

			<?php
		}
	}
	$wp_customize->add_setting( 'Kundoo_footer_payment_methods_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	    => 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new Kundoo_footer_payment_methods_upgrade(
			$wp_customize,
			'Kundoo_footer_payment_methods_upgrade_to_pro',
			array(
				'section'				=> 'footer_bottom'
			)
		)
	);
}
add_action( 'customize_register', 'kundoo_bottom_footer' );
