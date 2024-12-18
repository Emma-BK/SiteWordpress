<?php 
if ( ! function_exists( 'burger_astrocare_service' ) ) :
	function burger_astrocare_service() {
		$hs_service			= get_theme_mod('hs_service','1');	
		$service_title      = get_theme_mod('service_title','Service');
		$service_subtitle	= get_theme_mod('service_subtitle','We Provide Best Astro Services For You');
		$service_contents	= get_theme_mod('service_contents',astrocare_get_service_default());
		if($hs_service == '1'){	
			?>
			<section class="ast_section ast_service_section ast_bg_primary_lite">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 m-auto">
							<div class="astro_theme_titles">

								<?php if ( ! empty( $service_title ) ) : ?>
									<h5 class="theme_title wow fadeInLeft"><?php do_action('astrocare_title_img_seprator'); ?><?php echo wp_kses_post($service_title); ?></h5>
								<?php endif; ?>

								<?php if ( ! empty( $service_subtitle ) ) : ?>
									<h2 class="theme_subtitle wow fadeInRight"><?php echo wp_kses_post($service_subtitle); ?></h2>
								<?php endif; ?>

							</div>
						</div>
					</div>
					<div class="row row-cols-2 row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 g-4">
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

								$astrocare_ser_title = ! empty( $service_item->title ) ? apply_filters( 'astrocare_translate_single_string', $service_item->title, 'Service section' ) : '';
								$astrocare_ser_link = ! empty( $service_item->link ) ? apply_filters( 'astrocare_translate_single_string', $service_item->link, 'Service section' ) : '';
								$astrocare_ser_img = ! empty( $service_item->image_url ) ? apply_filters( 'astrocare_translate_single_string', $service_item->image_url, 'Service section' ) : '';
								?>
								<div class="col wow zoomIn">
									<div class="service-inner-box asto-special">
										<?php if ( ! empty( $astrocare_ser_img ) ) : ?>
											<a href="<?php echo esc_url($astrocare_ser_link); ?>">
												<img src="<?php echo esc_url( $astrocare_ser_img ); ?>" alt="<?php echo esc_attr( $astrocare_ser_title ); ?>">
											</a>
										<?php endif; ?>

										<?php if ( ! empty( $astrocare_ser_title ) ) : ?>
											<p><?php echo wp_kses(html_entity_decode($astrocare_ser_title), $allowed_html )?></p>
										<?php endif; ?>	

									</div>
								</div>
							<?php } } ?>
						</div>
					</div>
				</section>
				<?php	
			}}
		endif;
		if ( function_exists( 'burger_astrocare_service' ) ) {
			$section_priority = apply_filters( 'astrocare_section_priority', 14, 'burger_astrocare_service' );
			add_action( 'astrocare_sections', 'burger_astrocare_service', absint( $section_priority ) );
		}	