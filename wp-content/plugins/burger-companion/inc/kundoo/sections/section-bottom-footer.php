<?php 
// footer country
if ( ! function_exists( 'kundoo_country_footer' ) ) :
	function kundoo_country_footer() {
		$footer_country  = get_theme_mod('footer_country',kundoo_get_footer_country_default());
		$hs_footer_country	 = get_theme_mod('hs_footer_country','1');
		if($hs_footer_country == '1'){
			if ( ! empty( $footer_country ) ) {
				$allowed_html = array(
					'br'     => array(),
					'em'     => array(),
					'strong' => array(),
					'span'   => array(),
					'b'      => array(),
					'i'      => array(),
				);
				$footer_country = json_decode( $footer_country );
				foreach ( $footer_country as $footer_country_item ) {
					$kundoo_country_title = ! empty( $footer_country_item->title ) ? apply_filters( 'kundoo_translate_single_string', $footer_country_item->title, 'FooterCountry section' ) : '';
					$image = ! empty( $footer_country_item->image_url ) ? apply_filters( 'kundoo_translate_single_string', $footer_country_item->image_url, 'FooterCountry section' ) : '';
					$country_link = ! empty( $footer_country_item->link ) ? apply_filters( 'kundoo_translate_single_string', $footer_country_item->link, 'FooterCountry section' ) : '';
					?>
					<li>
						<?php if ( ! empty( $image ) ): ?>
							<a href="<?php echo esc_url( $country_link ); ?>">
								<img src="<?php echo esc_url( $image ); ?>" alt="FooterCountry">
								<span><?php echo wp_kses( html_entity_decode( $kundoo_country_title ), $allowed_html ); ?></span>
							</a>
						<?php endif; ?>	
					</li>
				<?php } } }
			} endif;
			add_action('kundoo_country_footer', 'kundoo_country_footer');

         // footer social icons
			if ( ! function_exists( 'kundoo_social_icons_footer' ) ) :
				function kundoo_social_icons_footer() {
					$footer_social  = get_theme_mod('footer_social',kundoo_get_footer_Social_default());
					$hs_footer_social	 = get_theme_mod('hs_footer_social','1');
					if($hs_footer_social == '1'){
					if ( ! empty( $footer_social ) ) {
						$allowed_html = array(
							'br'     => array(),
							'em'     => array(),
							'strong' => array(),
							'span'   => array(),
							'b'      => array(),
							'i'      => array(),
						);
						$footer_social = json_decode( $footer_social );
						foreach ( $footer_social as $footer_social_item ) {
							$social_icon = ! empty( $footer_social_item->icon_value ) ? apply_filters( 'kundoo_translate_single_string', $footer_social_item->icon_value, 'FooterSocial section' ) : '';
							$social_link = ! empty( $footer_social_item->link ) ? apply_filters( 'kundoo_translate_single_string', $footer_social_item->link, 'FooterSocial section' ) : '';
							?>
							<li>
								<?php if ( ! empty( $social_icon ) ) : ?>
									<a href="<?php echo esc_url( $social_link ); ?>">
										<i class="fa <?php echo esc_attr( $social_icon ); ?>"></i>
									</a>
								<?php endif; ?>	
							</li>
						<?php } } }
					} endif;
					add_action('kundoo_social_icons_footer', 'kundoo_social_icons_footer');

                // Footer Payment Methods
					if ( ! function_exists( 'kundoo_paymentMethods_footer' ) ) :
						function kundoo_paymentMethods_footer() {
							$payment_methods  = get_theme_mod('payment_methods',kundoo_get_footer_paymentMethods_default());
							$hs_payment_methods	 = get_theme_mod('hs_payment_methods','1');
							if($hs_payment_methods == '1'){
							if ( ! empty( $payment_methods ) ) {
								$allowed_html = array(
									'br'     => array(),
									'em'     => array(),
									'strong' => array(),
									'span'   => array(),
									'b'      => array(),
									'i'      => array(),
								);
								$payment_methods = json_decode( $payment_methods );
								foreach ( $payment_methods as $payment_methods_item ) {
									$payment_icon = ! empty( $payment_methods_item->icon_value ) ? apply_filters( 'kundoo_translate_single_string', $payment_methods_item->icon_value, 'PaymentMethods section' ) : '';
									$payment_link = ! empty( $payment_methods_item->link ) ? apply_filters( 'kundoo_translate_single_string', $payment_methods_item->link, 'PaymentMethods section' ) : '';
									?>
									<li>
										<?php if ( ! empty( $payment_icon ) ) : ?>
											<a href="<?php echo esc_url( $payment_link ); ?>">
												<i class="fa <?php echo esc_attr( $payment_icon ); ?>"></i>
											</a>
										<?php endif; ?>
									</li>
								<?php } } } 
							} endif;
							add_action('kundoo_paymentMethods_footer', 'kundoo_paymentMethods_footer');
