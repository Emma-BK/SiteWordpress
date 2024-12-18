<?php 
if ( ! function_exists( 'burger_kundoo_service' ) ) :
	function burger_kundoo_service() {
		$hs_service					= get_theme_mod('hs_service','1');	
		$service_title				= get_theme_mod('service_title','Services');
		$service_subtitle			= get_theme_mod('service_subtitle','Explore <span class="text-primary">Our Services</span>');
		$service_description		= get_theme_mod('service_description','We are your partners in progress. Our comprehensive range of service is designed to drive your business');
		$service_contents			= get_theme_mod('service_contents',kundoo_get_service_default());
		$service_img			    = get_theme_mod('service_img',BURGER_COMPANION_PLUGIN_URL .'inc/kundoo/images/services/girl-02.png');
		if($hs_service == '1'){	
			?>
			<section id="service-section" class="service-section service-home st-py-default shapes-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12 mx-lg-auto mb-5 text-center">
							<div class="heading-default wow fadeInUp">
								<?php if ( ! empty( $service_title ) ) : ?>
									<span class="badge"><?php echo wp_kses_post($service_title); ?></span>
								<?php endif; 
								if ( ! empty( $service_subtitle ) ) : ?>
									<h2 class="service-sec"><?php echo wp_kses_post($service_subtitle); ?></h2>
								<?php endif; 
								if ( ! empty( $service_description ) ) : ?>
									<p><?php echo wp_kses_post($service_description); ?></p>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="row row-cols-1 row-cols-lg-2 row-cols-md-1 g-4 service-wrapper">
						<div class="col-lg-2 col-md-12 col-12 wow fadeInUp d-none d-lg-block">
							<?php if ( ! empty( $service_img ) ) : ?>
								<div class="img-fluid services-img">
									<img src="<?php echo esc_url($service_img); ?>" alt="Kundoo">
								</div>
							<?php endif; ?>	
						</div>
						<?php
						if ( ! empty( $service_contents ) ) {
							$allowed_html = array(
								'br'     => array(),
								'em'     => array(),
								'strong' => array(),
								'span'   => array(),
								'b'      => array(),
								'i'      => array(),
							);
							$service_contents = json_decode( $service_contents );
							foreach ( $service_contents as $service_item ) {
								$kundoo_service_title = ! empty( $service_item->title ) ? apply_filters( 'kundoo_translate_single_string', $service_item->title, 'service section' ) : '';
								$service_link = ! empty( $service_item->link ) ? apply_filters( 'kundoo_translate_single_string', $service_item->link, 'service section' ) : '';
								$service_text = ! empty( $service_item->text ) ? apply_filters( 'kundoo_translate_single_string', $service_item->text, 'service section' ) : '';
								$service_icon = ! empty( $service_item->icon_value ) ? apply_filters( 'kundoo_translate_single_string', $service_item->icon_value, 'service section' ) : '';
								?>
								<div class="col wow fadeInUp">
									<div class="theme-item">
										<?php if ( ! empty( $service_icon ) ) : ?>
											<div class="theme-icon">
												<i class="fa <?php echo esc_attr( $service_icon ); ?>"></i>
											</div>
										<?php endif; ?>	
										<div class="theme-content">
											<?php if ( ! empty( $kundoo_service_title ) ) : ?>
												<h4 class="theme-title">
													<a href="<?php echo esc_url( $service_link ); ?>"><?php echo wp_kses( html_entity_decode( $kundoo_service_title ), $allowed_html ); ?></a>
												</h4>
											<?php endif; ?>	

											<?php if ( ! empty( $service_text ) ) : ?>
												<p><?php echo wp_kses( html_entity_decode( $service_text ), $allowed_html ); ?></p>
											<?php endif; ?>
										</div>
									</div>
								</div>
							<?php } } ?>
						</div>
					</div>
				</section>	
			<?php }}
		endif;
		if ( function_exists( 'burger_kundoo_service' ) ) {
			$section_priority = apply_filters( 'kundoo_section_priority', 12, 'burger_kundoo_service' );
			add_action( 'kundoo_sections', 'burger_kundoo_service', absint( $section_priority ) );
		}	