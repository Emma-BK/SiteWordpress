<?php
function astrocare_footer_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	
	$wp_customize->add_setting( 
		'hide_show_soci_footer_icon', 
		array(
			'default'           => '1',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'astrocare_sanitize_checkbox',
			'priority' => 1
		) 
	);
	
	$wp_customize->add_control(
		'hide_show_soci_footer_icon', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'astrocare' ),
			'section'     => 'footer_top',
			'type'        => 'checkbox'
		) 
	);

    /**
	 * Customizer Repeater
	 */
    if ( class_exists( 'Burger_Companion_Repeater' ) ) {
    	$wp_customize->add_setting( 'social_footer_icons', 
    		array(
    			'sanitize_callback' => 'burger_companion_repeater_sanitize',
    			'priority' => 2,
    			'default' => astrocare_get_footer_soci_icon_default()
    		)
    	);

    	$wp_customize->add_control( 
    		new Burger_Companion_Repeater( $wp_customize, 
    			'social_footer_icons', 
    			array(
    				'label'   => esc_html__('Social Icons','astrocare'),
    				'add_field_label'                   => esc_html__( 'Add New Social', 'astrocare' ),
    				'item_name'                         => esc_html__( 'Social', 'astrocare' ),
    				'section' => 'footer_top',
    				'customizer_repeater_icon_control' => true,
    				'customizer_repeater_link_control' => true,
    			) 
    		) 
    	);	
    }

	//Pro feature
    class Astrocare_social_section_upgrade extends WP_Customize_Control {
    	public function render_content() { 
    		?>
    		<a class="customizer_Astrocare_social_upgrade_section up-to-pro" href="<?php echo esc_url('https://burgerthemes.com/astrocare-pro/');?>" target="_blank" style="display: none;"><?php _e('More Icons Available in Astrocare Pro','astrocare'); ?></a>

    		<?php
    	} 
    }

    $wp_customize->add_setting( 'astrocare_social_upgrade_to_pro', array(
    	'capability'		=> 'edit_theme_options',
    	'sanitize_callback'	=> 'wp_filter_nohtml_kses',
    	'priority' => 2
    ));
    $wp_customize->add_control(
    	new Astrocare_social_section_upgrade(
    		$wp_customize,
    		'astrocare_social_upgrade_to_pro',
    		array(
    			'section'  => 'footer_top'
    		)
    	)
    );		

	// Footer Bottom section// 
    $wp_customize->add_section(
    	'footer_bottom',
    	array(
    		'title' 		=> __('Footer Bottom','astrocare'),
    		'panel'  		=> 'footer_section',
    		'priority'      => 4
    	)
    );

	// Footer Setting 
    $wp_customize->add_setting(
    	'footer_btm_setting_head'
    	,array(
    		'capability'     	=> 'edit_theme_options',
    		'sanitize_callback' => 'astrocare_sanitize_text',
    	)
    );

    $wp_customize->add_control(
    	'footer_btm_setting_head',
    	array(
    		'type' => 'hidden',
    		'label' => __('Setting','astrocare'),
    		'section' => 'footer_bottom',
    		'priority' => 1,
    	)
    );

    $wp_customize->add_setting( 
    	'hide_show_footer_payment_method', 
    	array(
    		'default'           => '1',
    		'capability'        => 'edit_theme_options',
    		'sanitize_callback' => 'astrocare_sanitize_checkbox',
    		'priority' => 1
    	) 
    );

    $wp_customize->add_control(
    	'hide_show_footer_payment_method', 
    	array(
    		'label'	      => esc_html__( 'Hide/Show', 'astrocare' ),
    		'section'     => 'footer_bottom',
    		'type'        => 'checkbox'
    	) 
    );

    /**
	 * Customizer Repeater
	 */
    if ( class_exists( 'Burger_Companion_Repeater' ) ) {
    	$wp_customize->add_setting( 'footer_payment_method', 
    		array(
    			'sanitize_callback' => 'burger_companion_repeater_sanitize',
    			'priority' => 2,
    			'default' => astrocare_get_footer_payment_method_default()
    		)
    	);

    	$wp_customize->add_control( 
    		new Burger_Companion_Repeater( $wp_customize, 
    			'footer_payment_method', 
    			array(
    				'label'   => esc_html__('Payment Icons','astrocare'),
    				'add_field_label'                   => esc_html__( 'Add New Payment', 'astrocare' ),
    				'item_name'                         => esc_html__( 'Payment', 'astrocare' ),
    				'section' => 'footer_bottom',
    				'customizer_repeater_icon_control' => true,
    				'customizer_repeater_link_control' => true,
    			) 
    		) 
    	);	
    }

	 //Pro feature
    class Astrocare_payment_icon_section_upgrade extends WP_Customize_Control {
    	public function render_content() { 
    		?>
    		<a class="customizer_Astrocare_payment_icon_upgrade_section up-to-pro" href="<?php echo esc_url('https://burgerthemes.com/astrocare-pro/');?>" target="_blank" style="display: none;"><?php _e('More Icons Available in Astrocare Pro','astrocare'); ?></a>
    		<?php
    	} 
    }	
    $wp_customize->add_setting( 'astrocare_payment_icon_upgrade_to_pro', array(
    	'capability' => 'edit_theme_options',
    	'priority'   => 2,
    	'sanitize_callback'	=> 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control(
    	new Astrocare_payment_icon_section_upgrade(
    		$wp_customize,
    		'astrocare_payment_icon_upgrade_to_pro',
    		array(
    			'section' => 'footer_bottom'
    		)
    	)
    );		
}
add_action( 'customize_register', 'astrocare_footer_setting' );
