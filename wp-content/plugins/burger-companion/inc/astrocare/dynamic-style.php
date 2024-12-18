<?php
if( ! function_exists( 'burger_com_astrocare_dynamic_style' ) ):
	function burger_com_astrocare_dynamic_style() {

		$output_css = '';
		
		/**
		 * Logo Width 
		 */
		$logo_width			= get_theme_mod('logo_width','140');		 
		if($logo_width !== '') { 
			$output_css .=".ast_logo img {
				max-width: " .esc_attr($logo_width). "px;
			}\n";
		}

        /**
		 * Funfact Bg Image
		 */
        $funfact_bg_setting	= get_theme_mod('funfact_bg_setting', BURGER_COMPANION_PLUGIN_URL .'inc/astrocare/images/bg/bg-funfact.png');
        if ( ! empty( $funfact_bg_setting ) ) {
        	$output_css .=".funfact-overlay:after{
        		background-image: url(" .esc_attr($funfact_bg_setting). ");
        	}\n";
        }

       /**
		 * Zodiac Wheel Animation
		 */
       $sr_zodiac_animation    =	get_theme_mod('sr_zodiac_animation','1');
       if($sr_zodiac_animation == '') : 
       	$output_css .=".astro-main-slider01:after {
       		animation: none;
       	}\n";
       endif; 

        /**
		 * Zodiac Wheel hide/show
		 */
        $hs_slider_wheel    =	get_theme_mod('hs_slider_wheel','1');
        if($hs_slider_wheel == '') : 
        	$output_css .=".astro-main-slider01:after {
        		display: none;
        	}\n";
        endif; 

		/**
		 *  Typography Body
		 */
		$astrocare_body_text_transform	 	 = get_theme_mod('astrocare_body_text_transform','inherit');
		$astrocare_body_font_style	 		 = get_theme_mod('astrocare_body_font_style','inherit');
		$astrocare_body_font_size	 		 = get_theme_mod('astrocare_body_font_size','16');
		$astrocare_body_line_height		     = get_theme_mod('astrocare_body_line_height','1.5');
		
		$output_css .=" body{ 
			font-size: " .esc_attr($astrocare_body_font_size). "px;
			line-height: " .esc_attr($astrocare_body_line_height). ";
			text-transform: " .esc_attr($astrocare_body_text_transform). ";
			font-style: " .esc_attr($astrocare_body_font_style). ";
		}\n";		 
		
		/**
		 *  Typography Heading
		 */
		for ( $i = 1; $i <= 6; $i++ ) {	
			$astrocare_heading_text_transform 	= get_theme_mod('astrocare_h' . $i . '_text_transform','inherit');
			$astrocare_heading_font_style	 	= get_theme_mod('astrocare_h' . $i . '_font_style','inherit');
			$astrocare_heading_font_size	    = get_theme_mod('astrocare_h' . $i . '_font_size');
			$astrocare_heading_line_height		= get_theme_mod('astrocare_h' . $i . '_line_height');

			$output_css .=" h" . $i . "{ 
				font-size: " .esc_attr($astrocare_heading_font_size). "px;
				line-height: " .esc_attr($astrocare_heading_line_height). ";
				text-transform: " .esc_attr($astrocare_heading_text_transform). ";
				font-style: " .esc_attr($astrocare_heading_font_style). ";
			}\n";
		}

		wp_add_inline_style( 'astrocare-style', $output_css );
	}
endif;
add_action( 'wp_enqueue_scripts', 'burger_com_astrocare_dynamic_style' );