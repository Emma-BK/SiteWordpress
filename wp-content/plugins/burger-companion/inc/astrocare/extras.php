<?php
// Footer payment method
if ( ! function_exists( 'astrocare_footer_payment_method' ) ) {
	function astrocare_footer_payment_method() {
		$hide_show_footer_payment_method  =	get_theme_mod('hide_show_footer_payment_method','1');
		$footer_payment_method 			  = get_theme_mod('footer_payment_method',astrocare_get_footer_payment_method_default());
		if($hide_show_footer_payment_method == '1') : ?>
			<div class="payment-method">
				<?php
				$footer_payment_method = json_decode($footer_payment_method);
				if( $footer_payment_method!='' )
				{
					foreach($footer_payment_method as $payment_footer_item){	
						$payment_method_footer_icon = ! empty( $payment_footer_item->icon_value ) ? apply_filters( 'astrocare_translate_single_string', $payment_footer_item->icon_value, 'Footer section' ) : '';
						$payment_method_footer_link = ! empty( $payment_footer_item->link ) ? apply_filters( 'astrocare_translate_single_string', $payment_footer_item->link, 'Footer section' ) : '';
						?>
						<a href="<?php echo esc_url( $payment_method_footer_link ); ?>">
							<i class="fa <?php echo esc_attr( $payment_method_footer_icon ); ?>"></i>
						</a>
					<?php }} ?>
				</div>
			<?php endif; 
		}
	}
	add_action('astrocare_footer_payment_method', 'astrocare_footer_payment_method');

    // Footer social icon
	if ( ! function_exists( 'astrocare_footer_social_icon' ) ) {
		function astrocare_footer_social_icon() {
			$hide_show_soci_footer_icon  =	get_theme_mod('hide_show_soci_footer_icon','1');
			$social_footer_icons 	     =  get_theme_mod('social_footer_icons',astrocare_get_footer_soci_icon_default());
			if($hide_show_soci_footer_icon == '1') : ?>
				<ul class="ft_social_icon ast_social">
					<?php
					$social_footer_icons = json_decode($social_footer_icons);
					if( $social_footer_icons!='' )
					{
						foreach($social_footer_icons as $social_footer_item){	
							$social_footer_icon = ! empty( $social_footer_item->icon_value ) ? apply_filters( 'astrocare_translate_single_string', $social_footer_item->icon_value, 'Footer section' ) : '';	
							$social_footer_link = ! empty( $social_footer_item->link ) ? apply_filters( 'astrocare_translate_single_string', $social_footer_item->link, 'Footer section' ) : '';
							?>
							<li><a href="<?php echo esc_url( $social_footer_link ); ?>" class="ft_icon ast_social_icon"><i class="fa <?php echo esc_attr( $social_footer_icon ); ?>"></i></a></li>
						<?php }} ?>
					</ul>
				<?php endif; 
			}
		}
		add_action('astrocare_footer_social_icon', 'astrocare_footer_social_icon');
   /*
	*
	* Slider Default
	*/
	function astrocare_get_slider_default() {
		return apply_filters(
			'astrocare_get_slider_default', json_encode(
				array(
					array(
						'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/astrocare/images/slider/slider-01.jpg',
						'image_url2'      => BURGER_COMPANION_PLUGIN_URL . 'inc/astrocare/images/slider/slider-02.png',
						'title'           => esc_html__( 'Ask One Question For Free', 'astrocare' ),
						'subtitle'        => esc_html__( '<span>Welcome to our</span> Astro store', 'astrocare' ),
						'text'            => esc_html__( 'Personalised Kundli Based Report Prepared Under The Guidance Of Our Expert Astrologers', 'astrocare' ),
						'text2'	          =>  esc_html__( 'Consult Now', 'astrocare' ),
						'link'	          =>  esc_html__( '#', 'astrocare' ),
						'id'              => 'customizer_repeater_slider_001',
					),
					array(
						'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/astrocare/images/slider/slider-01.jpg',
						'image_url2'      => BURGER_COMPANION_PLUGIN_URL . 'inc/astrocare/images/slider/slider-02.png',
						'title'           => esc_html__( 'Ask One Question For Free', 'astrocare' ),
						'subtitle'        => esc_html__( '<span>Welcome to our</span> Astro store', 'astrocare' ),
						'text'            => esc_html__( 'Personalised Kundli Based Report Prepared Under The Guidance Of Our Expert Astrologers', 'astrocare' ),
						'text2'	          =>  esc_html__( 'Consult Now', 'astrocare' ),
						'link'	          =>  esc_html__( '#', 'astrocare' ),
						'id'              => 'customizer_repeater_slider_002',
					),
					array(
						'image_url'       => BURGER_COMPANION_PLUGIN_URL . 'inc/astrocare/images/slider/slider-01.jpg',
						'image_url2'      => BURGER_COMPANION_PLUGIN_URL . 'inc/astrocare/images/slider/slider-02.png',
						'title'           => esc_html__( 'Ask One Question For Free', 'astrocare' ),
						'subtitle'        => esc_html__( '<span>Welcome to our</span> Astro store', 'astrocare' ),
						'text'            => esc_html__( 'Personalised Kundli Based Report Prepared Under The Guidance Of Our Expert Astrologers', 'astrocare' ),
						'text2'	          =>  esc_html__( 'Consult Now', 'astrocare' ),
						'link'	          =>  esc_html__( '#', 'astrocare' ),
						'id'              => 'customizer_repeater_slider_003',
					)
				)
			)
		);
	}

   /*
	*
	* Service Default
	*/
	function astrocare_get_service_default() {
		return apply_filters(
			'astrocare_get_service_default', json_encode(
				array(
					array(
						'image_url'      => BURGER_COMPANION_PLUGIN_URL . 'inc/astrocare/images/service/service2-01.jpg',
						'title'          => esc_html__( 'Free Astrology', 'astrocare' ),
						'link'	         => esc_html__( '#', 'astrocare' ),
						'id'             => 'customizer_repeater_service_001'
					),
					array(
						'image_url'      => BURGER_COMPANION_PLUGIN_URL . 'inc/astrocare/images/service/service2-02.jpg',
						'title'          => esc_html__( 'Sun Signs', 'astrocare' ),
						'link'	         => esc_html__( '#', 'astrocare' ),
						'id'             => 'customizer_repeater_service_002'
					),
					array(
						'image_url'      => BURGER_COMPANION_PLUGIN_URL . 'inc/astrocare/images/service/service2-03.jpg',
						'title'          => esc_html__( 'Love', 'astrocare' ),
						'link'	         => esc_html__( '#', 'astrocare' ),
						'id'             => 'customizer_repeater_service_003'
					),
					array(
						'image_url'      => BURGER_COMPANION_PLUGIN_URL . 'inc/astrocare/images/service/service2-04.jpg',
						'title'          => esc_html__( 'Marriage', 'astrocare' ),
						'link'	         => esc_html__( '#', 'astrocare' ),
						'id'             => 'customizer_repeater_service_004'
					),
					array(
						'image_url'      => BURGER_COMPANION_PLUGIN_URL . 'inc/astrocare/images/service/service2-05.jpg',
						'title'          => esc_html__( 'Career', 'astrocare' ),
						'link'	         => esc_html__( '#', 'astrocare' ),
						'id'             => 'customizer_repeater_service_005'
					),
					array(
						'image_url'      => BURGER_COMPANION_PLUGIN_URL . 'inc/astrocare/images/service/service2-06.jpg',
						'title'          => esc_html__( 'Finance', 'astrocare' ),
						'link'	         => esc_html__( '#', 'astrocare' ),
						'id'             => 'customizer_repeater_service_006'
					),
					array(
						'image_url'      => BURGER_COMPANION_PLUGIN_URL . 'inc/astrocare/images/service/service2-07.jpg',
						'title'          => esc_html__( 'Child Astro', 'astrocare' ),
						'link'	         => esc_html__( '#', 'astrocare' ),
						'id'             => 'customizer_repeater_service_007'
					),
					array(
						'image_url'      => BURGER_COMPANION_PLUGIN_URL . 'inc/astrocare/images/service/service2-08.jpg',
						'title'          => esc_html__( 'Education', 'astrocare' ),
						'link'	         => esc_html__( '#', 'astrocare' ),
						'id'             => 'customizer_repeater_service_008'
					)
				)
			)
		);
	}

	/*
	*
	* Funfact Default
	*/
	function astrocare_get_funfact_default() {
		return apply_filters(
			'astrocare_get_funfact_default', json_encode(
				array(
					array(
						'title'           => esc_html__( '85', 'astrocare' ),
						'subtitle'        => esc_html__( 'Kundli Served', 'astrocare' ),
						'id'              => 'customizer_repeater_funfact_001',
					),
					array(
						'title'           => esc_html__( '59', 'astrocare' ),
						'subtitle'        => esc_html__( 'Astrologers', 'astrocare' ),
						'id'              => 'customizer_repeater_funfact_002',
					),
					array(
						'title'           => esc_html__( '60', 'astrocare' ),
						'subtitle'        => esc_html__( 'Partners', 'astrocare' ),
						'id'              => 'customizer_repeater_funfact_003',
					),
					array(
						'title'            => esc_html__( '20', 'astrocare' ),
						'subtitle'         => esc_html__( 'Years', 'astrocare' ),
						'id'               => 'customizer_repeater_funfact_004',
					),
					array(
						'title'           => esc_html__( '97', 'astrocare' ),
						'subtitle'        => esc_html__( 'Countries', 'astrocare' ),
						'id'              => 'customizer_repeater_funfact_005',
					)
				)
			)
		);
	}

	/*
	*
	* Footer Social Icon
	*/
	function astrocare_get_footer_soci_icon_default() {
		return apply_filters(
			'astrocare_get_footer_soci_icon_default', json_encode(
				array(
					array(
						'icon_value' =>  esc_html__( 'fa-facebook', 'astrocare' ),
						'link'	     =>  esc_html__( '#', 'astrocare' ),
						'id'         => 'customizer_repeater_footer_social_001',
					),
					array(
						'icon_value'=>  esc_html__( 'fa-instagram', 'astrocare' ),
						'link'	    =>  esc_html__( '#', 'astrocare' ),
						'id'        => 'customizer_repeater_footer_social_002',
					),
					array(
						'icon_value'=>  esc_html__( 'fa-whatsapp', 'astrocare' ),
						'link'	    =>  esc_html__( '#', 'astrocare' ),
						'id'        => 'customizer_repeater_footer_social_003',
					),
					array(
						'icon_value' =>  esc_html__( 'fa-youtube-play', 'astrocare' ),
						'link'	     =>  esc_html__( '#', 'astrocare' ),
						'id'         => 'customizer_repeater_footer_social_004',
					)
				)
			)
		);
	}
	
	/*
	*
	* Footer Payment Method
	*/
	function astrocare_get_footer_payment_method_default() {
		return apply_filters(
			'astrocare_get_footer_payment_method_default', json_encode(
				array(
					array(
						'icon_value' =>  esc_html__( 'fa-cc-visa', 'astrocare' ),
						'link'	     =>  esc_html__( '#', 'astrocare' ),
						'id'         => 'customizer_repeater_footer_payment_method_001',
					),
					array(
						'icon_value'=>  esc_html__( 'fa-cc-paypal', 'astrocare' ),
						'link'	    =>  esc_html__( '#', 'astrocare' ),
						'id'        => 'customizer_repeater_footer_payment_method_002',
					),
					array(
						'icon_value'=>  esc_html__( 'fa-cc-mastercard', 'astrocare' ),
						'link'	    =>  esc_html__( '#', 'astrocare' ),
						'id'        => 'customizer_repeater_footer_payment_method_003',
					),
					array(
						'icon_value' =>  esc_html__( 'fa-cc-discover', 'astrocare' ),
						'link'	     =>  esc_html__( '#', 'astrocare' ),
						'id'         => 'customizer_repeater_footer_payment_method_004',
					)
				)
			)
		);
	}