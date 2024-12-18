<?php
/**
 * @package  Astrocare
 */

require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/extras.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/dynamic-style.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/features/astrocare-general.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/features/astrocare-footer.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/features/astrocare-slider.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/features/astrocare-astroform.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/features/astrocare-horoscope.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/features/astrocare-service.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/features/astrocare-funfact.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/features/astrocare-kundli.php';
require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/features/astrocare-typography.php';

if ( ! function_exists( 'burger_companion_astrocare_frontpage_sections' ) ) :
	function burger_companion_astrocare_frontpage_sections() {	
		require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/sections/section-slider.php';
		require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/sections/section-astroform.php';
		require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/sections/section-horoscope.php';
		require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/sections/section-service.php';
		require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/sections/section-funfact.php';
		require BURGER_COMPANION_PLUGIN_DIR . 'inc/astrocare/sections/section-kundli.php';
	}
	add_action( 'astrocare_sections', 'burger_companion_astrocare_frontpage_sections' );
endif;
