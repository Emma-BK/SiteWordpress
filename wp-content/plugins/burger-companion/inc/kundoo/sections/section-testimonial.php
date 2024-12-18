<?php 
if ( ! function_exists( 'burger_kundoo_testimonial' ) ) :
	function burger_kundoo_testimonial() {
		$hs_testimonial			        = get_theme_mod('hs_testimonial','1');
		$testimonial_title				= get_theme_mod('testimonial_title','Testimonials');
		$testimonial_subtitle			= get_theme_mod('testimonial_subtitle','What Customers <span class="text-primary">Says About Us</span>');
		$testimonial_description		= get_theme_mod('testimonial_description',"This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.");
		$testimonial_contents			= get_theme_mod('testimonial_contents',kundoo_get_testimonial_default());
		if($hs_testimonial == '1'){	
			?>
			<section id="testimonials-section" class="testimonials-section st-py-default">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12 mx-lg-auto mb-5 text-center">
							<div class="heading-default wow fadeInUp">
								<?php if ( ! empty( $testimonial_title ) ) : ?>
									<span class="badge"><?php echo wp_kses_post($testimonial_title); ?></span>
								<?php endif; 
								if ( ! empty( $testimonial_subtitle ) ) : ?>
									<h2><?php echo wp_kses_post($testimonial_subtitle); ?></h2>
								<?php endif; 
								if ( ! empty( $testimonial_description ) ) : ?>
									<p><?php echo wp_kses_post($testimonial_description); ?></p>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8 col-md-9 m-auto">
							<div class="client-thumb-outer">
								<div class="client-thumbs-carousel owl-carousel owl-theme">
									<?php
									if ( ! empty( $testimonial_contents ) ) {
										$allowed_html = array(
											'br'     => array(),
											'em'     => array(),
											'strong' => array(),
											'span'   => array(),
											'b'      => array(),
											'i'      => array(),
										);
										$testimonial_contents = json_decode( $testimonial_contents );
										foreach ( $testimonial_contents as $testimonial_item ) {
											$kundoo_testimonial_title = ! empty( $testimonial_item->title ) ? apply_filters( 'kundoo_translate_single_string', $testimonial_item->title, 'Testimonial section' ) : '';
											$image = ! empty( $testimonial_item->image_url ) ? apply_filters( 'kundoo_translate_single_string', $testimonial_item->image_url, 'Testimonial section' ) : '';
											?>
											<div class="testimonials-item">
												<div class="testimonials-client">
													<?php if ( ! empty( $image ) ) : ?>
														<div class="img-fluid">
															<a href="javascript:void(0);">
																<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $kundoo_testimonial_title ); ?>">
															</a>
														</div>
													<?php endif; ?>
												</div>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="col-lg-10 m-auto">
								<div class="testimonials-item-content">
									<div class=" client-testimonial-carousel owl-carousel owl-theme">
										<?php foreach ( $testimonial_contents as $testimonial_item ) { 
											$kundoo_testimonial_title = ! empty( $testimonial_item->title ) ? apply_filters( 'kundoo_translate_single_string', $testimonial_item->title, 'Testimonial section' ) : '';
											$image = ! empty( $testimonial_item->image_url ) ? apply_filters( 'kundoo_translate_single_string', $testimonial_item->image_url, 'Testimonial section' ) : '';
											$text = ! empty( $testimonial_item->text ) ? apply_filters( 'kundoo_translate_single_string', $testimonial_item->text, 'Testimonial section' ) : '';
											$subtitle = ! empty( $testimonial_item->subtitle ) ? apply_filters( 'kundoo_translate_single_string', $testimonial_item->subtitle, 'Testimonial section' ) : ''; ?>
											<div class="item">
												<div class="testimonials-client">
													<?php if ( ! empty( $image ) ) : ?>
														<div class="img-fluid">
															<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $kundoo_testimonial_title ); ?>">
														</div>
													<?php endif; ?>
													<div class="testimonials-title">
														<?php if ( ! empty( $kundoo_testimonial_title ) ) : ?>
															<h5><?php echo wp_kses(html_entity_decode($kundoo_testimonial_title), $allowed_html )?></h5>
														<?php endif; 
														if ( ! empty( $text ) ) : ?>
															<p><?php echo wp_kses(html_entity_decode($text), $allowed_html )?></p>
														<?php endif;
														if ( ! empty( $subtitle ) ) : ?>
															<span><?php echo wp_kses(html_entity_decode($subtitle), $allowed_html )?></span>
														<?php endif; ?>
													</div>
												</div>
											</div>
										<?php } } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php }}
		endif;
		if ( function_exists( 'burger_kundoo_testimonial' ) ) {
			$section_priority = apply_filters( 'kundoo_section_priority', 16, 'burger_kundoo_testimonial' );
			add_action( 'kundoo_sections', 'burger_kundoo_testimonial', absint( $section_priority ) );
		}	