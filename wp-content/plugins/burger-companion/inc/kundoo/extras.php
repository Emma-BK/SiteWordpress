<?php
/*
 *
 * Slider Default
 */
function kundoo_get_slider_default() {
	return apply_filters(
		'kundoo_get_slider_default', json_encode(
			array(
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/slider/img01.jpg',
					'icon_value'	  => esc_html__( 'fa-heart', 'kundoo' ),
					'title'           => esc_html__( 'Helping over +10000 Business worldwide', 'kundoo' ),
					'subtitle'        => esc_html__( 'Unclock Your <span>Business Potential.</span>', 'kundoo' ),
					'text'            => esc_html__( "Our Mision to prove your success into new dimensions. Let's write a the next chapter of your success story together.", 'kundoo' ),
					'text2'	          => esc_html__( 'Get Started', 'kundoo' ),
					'link'	          => esc_html__( '#', 'kundoo' ),
					'shortcode'       => esc_html__('Steven Hawkins', 'kundoo'),
					'link2'	           => esc_html__( 'https://www.youtube.com/watch?v=E1xkXZs0cAQ', 'kundoo' ),
					'id'              => 'customizer_repeater_slider_001',
				),
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/slider/img02.jpg',
					'icon_value'	  => esc_html__( 'fa-heart', 'kundoo' ),
					'title'           => esc_html__( 'Helping over +10000 Business worldwide', 'kundoo' ),
					'subtitle'        => esc_html__( 'Unclock Your <span>Business Potential.</span>', 'kundoo-' ),
					'text'            => esc_html__( "Our Mision to prove your success into new dimensions. Let's write a the next chapter of your success story together.", 'kundoo' ),
					'text2'	          => esc_html__( 'Get Started', 'kundoo' ),
					'link'	          => esc_html__( '#', 'kundoo' ),
					'shortcode'       => esc_html__('Steven Hawkins', 'kundoo'),
					'link2'	      => esc_html__( 'https://www.youtube.com/watch?v=E1xkXZs0cAQ', 'kundoo' ),
					'id'              => 'customizer_repeater_slider_002',
				),
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/slider/img03.jpg',
					'icon_value'	  => esc_html__( 'fa-heart', 'kundoo' ),
					'title'           => esc_html__( 'Helping over +10000 Business worldwide', 'kundoo' ),
					'subtitle'        => esc_html__( 'Unclock Your <span>Business Potential.</span>', 'kundoo' ),
					'text'            => esc_html__( "Our Mision to prove your success into new dimensions. Let's write a the next chapter of your success story together.", 'kundoo' ),
					'text2'	          =>  esc_html__( 'Get Started', 'kundoo' ),
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'shortcode'       =>  esc_html__('Steven Hawkins', 'kundoo'),
					'link2'	      =>  esc_html__( 'https://www.youtube.com/watch?v=E1xkXZs0cAQ', 'kundoo' ),
					'id'              => 'customizer_repeater_slider_003',
				),
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/slider/img04.jpg',
					'icon_value'	  => esc_html__( 'fa-heart', 'kundoo' ),
					'title'           => esc_html__( 'Helping over +10000 Business worldwide', 'kundoo' ),
					'subtitle'        => esc_html__( 'Unclock Your <span>Business Potential.</span>', 'kundoo' ),
					'text'            => esc_html__( "Our Mision to prove your success into new dimensions. Let's write a the next chapter of your success story together.", 'kundoo' ),
					'text2'	          =>  esc_html__( 'Get Started', 'kundoo' ),
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'shortcode'       =>  esc_html__('Steven Hawkins', 'kundoo'),
					'link2'	      =>  esc_html__( 'https://www.youtube.com/watch?v=E1xkXZs0cAQ', 'kundoo' ),
					'id'              => 'customizer_repeater_slider_004',
				),
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/slider/img05.jpg',
					'icon_value'	  => esc_html__( 'fa-heart', 'kundoo' ),
					'title'           => esc_html__( 'Helping over +10000 Business worldwide', 'kundoo' ),
					'subtitle'        => esc_html__( 'Unclock Your <span>Business Potential.</span>', 'kundoo' ),
					'text'            => esc_html__( "Our Mision to prove your success into new dimensions. Let's write a the next chapter of your success story together.", 'kundoo' ),
					'text2'	          =>  esc_html__( 'Get Started', 'kundoo' ),
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'shortcode'       =>  esc_html__('Steven Hawkins', 'kundoo'),
					'link2'	      =>  esc_html__( 'https://www.youtube.com/watch?v=E1xkXZs0cAQ', 'kundoo' ),
					'id'              => 'customizer_repeater_slider_005',
				)
			)
)
);
}
/*
 *
 * Service Default
 */
function kundoo_get_service_default() {
	return apply_filters(
		'kundoo_get_service_default', json_encode(
			array(
				array(
					'icon_value'      => 'fa-lightbulb-o',
					'title'           => esc_html__( 'Digital Branding', 'kundoo' ),
					'link'	          => esc_html__( '#', 'kundoo' ),
					'text'            => esc_html__( "This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit.", 'kundoo' ),
					'id'              => 'customizer_repeater_service_001',
				),
				array(
					'icon_value'      => 'fa-search-plus',
					'title'           => esc_html__( 'SEO Optimization', 'kundoo' ),
					'link'	          => esc_html__( '#', 'kundoo' ),
					'text'            => esc_html__( "This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit.", 'kundoo' ),
					'id'              => 'customizer_repeater_service_002',
				),
				array(
					'icon_value'      => 'fa-desktop',
					'title'           => esc_html__( 'Wireframe Design', 'kundoo' ),
					'link'	          => esc_html__( '#', 'kundoo' ),
					'text'            => esc_html__( "This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit.", 'kundoo' ),
					'id'              => 'customizer_repeater_service_003',
				),
				array(
					'icon_value'      => 'fa-edit',
					'title'           => esc_html__( 'UI/UX Design', 'kundoo' ),
					'link'	          => esc_html__( '#', 'kundoo' ),
					'text'            => esc_html__( "This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit.", 'kundoo' ),
					'id'              => 'customizer_repeater_service_004',
				),
				array(
					'icon_value'      => 'fa-line-chart',
					'title'           => esc_html__( 'Analytics Review', 'kundoo' ),
					'link'	          => esc_html__( '#', 'kundoo' ),
					'text'            => esc_html__( "This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit.", 'kundoo' ),
					'id'              => 'customizer_repeater_service_005',
				),
				array(
					'icon_value'      => 'fa-file-video-o',
					'title'           => esc_html__( 'Video Marketing', 'kundoo' ),
					'link'	          => esc_html__( '#', 'kundoo' ),
					'text'            => esc_html__( "This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit.", 'kundoo' ),
					'id'              => 'customizer_repeater_service_006',
				),
			)
		)
	);
}
/*
 *
 * Design Default
 */
function kundoo_get_design_default() {
	return apply_filters(
		'kundoo_get_design_default', json_encode(
			array(
				array(
					'icon_value'      => 'fa-check',
					'text'            => esc_html__( 'Media arrangement', 'kundoo' ),
					'id'              => 'customizer_repeater_design_001',
				),
				array(
					'icon_value'      => 'fa-check',
					'text'            => esc_html__( 'We give the executives', 'kundoo' ),
					'id'              => 'customizer_repeater_design_002',
				),
				array(
					'icon_value'      => 'fa-check',
					'text'            => esc_html__( 'Business solution', 'kundoo' ),
					'id'              => 'customizer_repeater_design_003',
				),
				array(
					'icon_value'      => 'fa-check',
					'text'            => esc_html__( 'Quicker development', 'kundoo' ),
					'id'              => 'customizer_repeater_design_004',
				),
				array(
					'icon_value'      => 'fa-check',
					'text'            => esc_html__( 'Securing futures', 'kundoo' ),
					'id'              => 'customizer_repeater_design_005',
				),
				array(
					'icon_value'      => 'fa-check',
					'text'            => esc_html__( 'Solid secure system', 'kundoo' ),
					'id'              => 'customizer_repeater_design_006',
				)
			)
		)
	);
}
/*
 *
 * Testimonial Default
 */
function kundoo_get_testimonial_default() {
	return apply_filters(
		'kundoo_get_testimonial_default', json_encode(
			array(
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/testimonials/testimonial-01.png',
					'title'           => esc_html__( 'John', 'kundoo' ),
					'subtitle'        => esc_html__( "- Web Designer", 'kundoo' ),
					'text'            => esc_html__( "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", 'kundoo' ),
					'id'              => 'customizer_repeater_testimonial_001',					
				),
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/testimonials/testimonial-02.png',
					'title'           => esc_html__( 'Caroline', 'kundoo' ),
					'subtitle'        => esc_html__( "- CEO Founder, Designation", 'kundoo' ),
					'text'            => esc_html__( "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", 'kundoo' ),
					'id'              => 'customizer_repeater_testimonial_002',					
				),
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/testimonials/testimonial-03.png',
					'title'           => esc_html__( 'Kimberly', 'kundoo' ),
					'subtitle'        => esc_html__( '- Web Developer', 'kundoo' ),
					'text'            => esc_html__( "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", 'kundoo' ),
					'id'              => 'customizer_repeater_testimonial_003',					
				),
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/testimonials/testimonial-04.png',
					'title'           => esc_html__( 'Miekel Stark', 'kundoo' ),
					'subtitle'        => esc_html__( '- Manager', 'kundoo' ),
					'text'            => esc_html__( "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", 'kundoo' ),
					'id'              => 'customizer_repeater_testimonial_004',					
				),
				array(
				    'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/testimonials/testimonial-05.png',
					'title'           => esc_html__( 'Ginger Plant', 'kundoo' ),
					'subtitle'        => esc_html__( "- Owner's Name, Designation", 'kundoo' ),
					'text'            => esc_html__( "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", 'kundoo' ),
					'id'              => 'customizer_repeater_testimonial_005',					
				),
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/testimonials/testimonial-06.png',
					'title'           => esc_html__( 'Fay Daway', 'kundoo' ),
					'subtitle'        => esc_html__( "- Designer, Designation", 'kundoo' ),
					'text'            => esc_html__( "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", 'kundoo' ),
					'id'              => 'customizer_repeater_testimonial_006',					
				),
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/testimonials/testimonial-07.png',
					'title'           => esc_html__( 'Gus Fring', 'kundoo' ),
					'subtitle'        => esc_html__( "- Designation", 'kundoo' ),
					'text'            => esc_html__( "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", 'kundoo' ),
					'id'              => 'customizer_repeater_testimonial_007',					
				)
			)
		)
	);
}
/*
 *
 * Footer Country
 */
function kundoo_get_footer_country_default() {
	return apply_filters(
		'kundoo_get_footer_country_default', json_encode(
			array(
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/footer/country/usa.jpg',
					'title'           => esc_html__( 'USA', 'kundoo' ),
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'id'              => 'customizer_repeater_footercountry_001',
				),
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/footer/country/RU.png',
					'title'           => esc_html__( 'Russia', 'kundoo' ),
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'id'              => 'customizer_repeater_footercountry_002',
				),
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/footer/country/ger.png',
					'title'           => esc_html__( 'Germany', 'kundoo' ),
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'id'              => 'customizer_repeater_footercountry_003',
				),
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/footer/country/canada.jpg',
					'title'           => esc_html__( 'Canada', 'kundoo' ),
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'id'              => 'customizer_repeater_footercountry_004',
				),
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/footer/country/india.png',
					'title'           => esc_html__( 'India', 'kundoo' ),
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'id'              => 'customizer_repeater_footercountry_005',
				),
				array(
					'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/kundoo/images/footer/country/italy.jpg',
					'title'           => esc_html__( 'Italy', 'kundoo' ),
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'id'              => 'customizer_repeater_footercountry_006',
				)
			)
		)
	);
}
/*
 *
 * Footer Social
 */
function kundoo_get_footer_Social_default() {
	return apply_filters(
		'kundoo_get_footer_Social_default', json_encode(
			array(
				array(
					'icon_value'      => 'fa-facebook-f',
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'id'              => 'customizer_repeater_footerSocial_001',
				),
				array(
					'icon_value'      => 'fa-instagram',
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'id'              => 'customizer_repeater_footerSocial_002',
				),
				array(
					'icon_value'      => 'fa-youtube-play',
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'id'              => 'customizer_repeater_footerSocial_003',
				),
				array(
					'icon_value'      => 'fa-twitter',
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'id'              => 'customizer_repeater_footerSocial_004',
				),
				array(
					'icon_value'      => 'fa-linkedin',
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'id'              => 'customizer_repeater_footerSocial_005',
				)
			)
		)
	);
}
/*
 *
 * Footer PaymentMethods
 */
function kundoo_get_footer_paymentMethods_default() {
	return apply_filters(
		'kundoo_get_footer_paymentMethods_default', json_encode(
			array(
				array(
					'icon_value'      => 'fa-cc-mastercard',
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'id'              => 'customizer_repeater_PaymentMethods_001',
				),
				array(
					'icon_value'      => 'fa-cc-visa',
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'id'              => 'customizer_repeater_PaymentMethods_002',
				),
				array(
					'icon_value'      => 'fa-cc-paypal',
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'id'              => 'customizer_repeater_PaymentMethods_003',
				),
				array(
					'icon_value'      => 'fa-cc-discover',
					'link'	          =>  esc_html__( '#', 'kundoo' ),
					'id'              => 'customizer_repeater_PaymentMethods_004',
				)
			)
		)
	);
}




