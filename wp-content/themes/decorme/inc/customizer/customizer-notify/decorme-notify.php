<?php

class DecorMe_Customizer_Notify {

	private $recommended_actions;

	
	private $recommended_plugins;

	
	private static $instance;

	
	private $recommended_actions_title;

	
	private $recommended_plugins_title;

	
	private $dismiss_button;

	
	private $install_button_label;

	
	private $activate_button_label;

	
	private $decorme_deactivate_button_label;

	private $config;

	public static function init( $config ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof DecorMe_Customizer_Notify ) ) {
			self::$instance = new DecorMe_Customizer_Notify;
			if ( ! empty( $config ) && is_array( $config ) ) {
				self::$instance->config = $config;
				self::$instance->setup_config();
				self::$instance->setup_actions();
			}
		}

	}

	
	public function setup_config() {

		global $decorme_customizer_notify_recommended_plugins;
		global $decorme_customizer_notify_recommended_actions;

		global $install_button_label;
		global $activate_button_label;
		global $decorme_deactivate_button_label;

		$this->recommended_actions = isset( $this->config['recommended_actions'] ) ? $this->config['recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->recommended_actions_title = isset( $this->config['recommended_actions_title'] ) ? $this->config['recommended_actions_title'] : '';
		$this->recommended_plugins_title = isset( $this->config['recommended_plugins_title'] ) ? $this->config['recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$decorme_customizer_notify_recommended_plugins = array();
		$decorme_customizer_notify_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$decorme_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->recommended_actions ) ) {
			$decorme_customizer_notify_recommended_actions = $this->recommended_actions;
		}

		$install_button_label    = isset( $this->config['install_button_label'] ) ? $this->config['install_button_label'] : '';
		$activate_button_label   = isset( $this->config['activate_button_label'] ) ? $this->config['activate_button_label'] : '';
		$decorme_deactivate_button_label = isset( $this->config['decorme_deactivate_button_label'] ) ? $this->config['decorme_deactivate_button_label'] : '';

	}

	
	public function setup_actions() {

		// Register the section
		add_action( 'customize_register', array( $this, 'decorme_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'decorme_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'decorme_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'decorme_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}

	
	public function decorme_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'decorme-customizer-notify-css', DECORME_PARENT_INC_URI . '/customizer/customizer-notify/css/decorme-customizer-notify.css', array());

		wp_enqueue_style( 'decorme-plugin-install' );
		wp_enqueue_script( 'decorme-plugin-install' );
		wp_add_inline_script( 'decorme-plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'decorme-updates' );

		wp_enqueue_script( 'decorme-customizer-notify-js', DECORME_PARENT_INC_URI . '/customizer/customizer-notify/js/decorme-notify.js', array( 'customize-controls' ));
		wp_localize_script(
			'decorme-customizer-notify-js', 'DecorMeCustomizercompanionObject', array(
				'decorme_ajaxurl'            => esc_url(admin_url( 'admin-ajax.php' )),
				'decorme_template_directory' => esc_url(get_template_directory_uri()),
				'decorme_base_path'          => esc_url(admin_url()),
				'decorme_activating_string'  => __( 'Activating', 'decorme' ),
			)
		);

	}

	
	public function decorme_plugin_notification_customize_register( $wp_customize ) {

		
		require DECORME_PARENT_INC_DIR . '/customizer/customizer-notify/decorme-notify-section.php';

		$wp_customize->register_section_type( 'DecorMe_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new DecorMe_Customizer_Notify_Section(
				$wp_customize,
				'DecorMe-customizer-notify-section',
				array(
					'title'          => $this->recommended_actions_title,
					'plugin_text'    => $this->recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}

	
	public function decorme_customizer_notify_dismiss_recommended_action_callback() {

		global $decorme_customizer_notify_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html($action_id); 

		if ( ! empty( $action_id ) ) {

			
			if ( get_theme_mod( 'decorme_customizer_notify_show' ) ) {

				$decorme_customizer_notify_show_recommended_actions = get_theme_mod( 'decorme_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$decorme_customizer_notify_show_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$decorme_customizer_notify_show_recommended_actions[ $action_id ] = false;
						break;
				}
				echo esc_html($decorme_customizer_notify_show_recommended_actions);
				
			} else {
				$decorme_customizer_notify_show_recommended_actions = array();
				if ( ! empty( $decorme_customizer_notify_recommended_actions ) ) {
					foreach ( $decorme_customizer_notify_recommended_actions as $decorme_lite_customizer_notify_recommended_action ) {
						if ( $decorme_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$decorme_customizer_notify_show_recommended_actions[ $decorme_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$decorme_customizer_notify_show_recommended_actions[ $decorme_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					echo esc_html($decorme_customizer_notify_show_recommended_actions);
				}
			}
		}
		die(); 
	}

	
	public function decorme_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html($action_id); 

		if ( ! empty( $action_id ) ) {

			$decorme_lite_customizer_notify_show_recommended_plugins = get_theme_mod( 'decorme_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$decorme_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$decorme_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			echo esc_html($decorme_customizer_notify_show_recommended_actions);
		}
		die(); 
	}

}
