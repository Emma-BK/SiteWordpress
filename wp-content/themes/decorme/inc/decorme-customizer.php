<?php
/**
 * DecorMe Theme Customizer.
 *
 * @package DecorMe
 */

 if ( ! class_exists( 'DecorMe_Customizer' ) ) {

	/**
	 * Customizer Loader
	 *
	 * @since 1.0.0
	 */
	class DecorMe_Customizer {

		/**
		 * Instance
		 *
		 * @access private
		 * @var object
		 */
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self;
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 */
		public function __construct() {
			/**
			 * Customizer
			 */
			add_action( 'customize_preview_init',                  array( $this, 'decorme_customize_preview_js' ) );
			add_action( 'customize_controls_enqueue_scripts', 	   array( $this, 'decorme_customizer_script' ) );
			add_action( 'customize_register',                      array( $this, 'decorme_customizer_register' ) );
			add_action( 'after_setup_theme',                       array( $this, 'decorme_customizer_settings' ) );
		}
		
		/**
		 * Add postMessage support for site title and description for the Theme Customizer.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		function decorme_customizer_register( $wp_customize ) {
			
			$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
			$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
			$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
			$wp_customize->get_setting('custom_logo')->transport = 'refresh';			
			
			/**
			 * Helper files
			 */
			require DECORME_PARENT_INC_DIR . '/customizer/controls/font-control.php';
			require DECORME_PARENT_INC_DIR . '/customizer/sanitization.php';
		}
		
		/**
		 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
		 */
		function decorme_customize_preview_js() {
			wp_enqueue_script( 'decorme-customizer', DECORME_PARENT_INC_URI . '/customizer/assets/js/customizer-preview.js', array( 'customize-preview' ), '20151215', true );
		}
		
		
		function decorme_customizer_script() {
			 wp_enqueue_script( 'decorme-customizer-section', DECORME_PARENT_INC_URI .'/customizer/assets/js/customizer-section.js', array("jquery"),'', true  );	
		}

		// Include customizer customizer settings.
			
		function decorme_customizer_settings() {			
			    require DECORME_PARENT_INC_DIR . '/customizer/customizer-options/decorme-header.php';
			    require DECORME_PARENT_INC_DIR . '/customizer/customizer-options/decorme-blog.php';
			    require DECORME_PARENT_INC_DIR . '/customizer/customizer-options/decorme-footer.php';
			    require DECORME_PARENT_INC_DIR . '/customizer/customizer-options/decorme-general.php';
		        require DECORME_PARENT_INC_DIR . '/customizer/customizer-options/decorme_recommended_plugin.php';
			    require DECORME_PARENT_INC_DIR . '/customizer/customizer-options/decorme_customizer_import_data.php';
				require DECORME_PARENT_INC_DIR . '/customizer/customizer-pro/class-customize.php';
		}

	}
}// End if().

/**
 *  Kicking this off by calling 'get_instance()' method
 */
DecorMe_Customizer::get_instance();