<?php
class decorme_import_dummy_data {

	private static $instance;

	public static function init( ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof decorme_import_dummy_data ) ) {
			self::$instance = new decorme_import_dummy_data;
			self::$instance->decorme_setup_actions();
		}

	}

	/**
	 * Setup the class props based on the config array.
	 */
	

	/**
	 * Setup the actions used for this class.
	 */
	public function decorme_setup_actions() {

		// Enqueue scripts
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'decorme_import_customize_scripts' ), 0 );

	}
	
	

	public function decorme_import_customize_scripts() {

	wp_enqueue_script( 'decorme-import-customizer-js', DECORME_PARENT_INC_URI . '/customizer/customizer-notify/js/decorme-import-customizer-options.js', array( 'customize-controls' ) );
	}
}

$decorme_import_customizers = array(

		'import_data' => array(
			'recommended' => true,
			
		),
);
decorme_import_dummy_data::init( apply_filters( 'decorme_import_customizer', $decorme_import_customizers ) );