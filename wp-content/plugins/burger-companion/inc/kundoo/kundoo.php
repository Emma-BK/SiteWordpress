<?php
/**
 * @package   Kundoo
 */
require BURGER_COMPANION_PLUGIN_DIR . 'inc/kundoo/extras.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/kundoo/dynamic-style.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/kundoo/features/kundoo-general.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/kundoo/features/kundoo-bottom-footer.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/kundoo/sections/section-bottom-footer.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/kundoo/features/kundoo-slider.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/kundoo/features/kundoo-service.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/kundoo/features/kundoo-cta.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/kundoo/features/kundoo-design.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/kundoo/features/kundoo-testimonial.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/kundoo/features/kundoo-typography.php';

if ( ! function_exists( 'burger_companion_kundoo_frontpage_sections' ) ) :
	function burger_companion_kundoo_frontpage_sections() {	
	   require BURGER_COMPANION_PLUGIN_DIR . 'inc/kundoo/sections/section-slider.php';
	   require BURGER_COMPANION_PLUGIN_DIR . 'inc/kundoo/sections/section-service.php';
	   require BURGER_COMPANION_PLUGIN_DIR . 'inc/kundoo/sections/section-cta.php';
	   require BURGER_COMPANION_PLUGIN_DIR . 'inc/kundoo/sections/section-design.php';
	   require BURGER_COMPANION_PLUGIN_DIR . 'inc/kundoo/sections/section-testimonial.php';
    }
	add_action( 'kundoo_sections', 'burger_companion_kundoo_frontpage_sections' );
endif;
