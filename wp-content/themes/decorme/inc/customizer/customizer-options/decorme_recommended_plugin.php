<?php
/* Notifications in customizer */


require DECORME_PARENT_INC_DIR . '/customizer/customizer-notify/decorme-notify.php';
$decorme_config_customizer = array(
	'recommended_plugins'       => array(
		'burger-companion' => array(
			'recommended' => true,
			'description' => sprintf(__('Install and activate <strong>Burger Companion</strong> plugin for taking full advantage of all the features this theme has to offer DecorMe.', 'decorme')),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'decorme' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'decorme' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'decorme' ),
	'activate_button_label'     => esc_html__( 'Activate', 'decorme' ),
	'decorme_deactivate_button_label'   => esc_html__( 'Deactivate', 'decorme' ),
);
DecorMe_Customizer_Notify::init( apply_filters( 'decorme_customizer_notify_array', $decorme_config_customizer ) );
