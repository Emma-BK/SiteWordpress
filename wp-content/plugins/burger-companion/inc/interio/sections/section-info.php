<?php  
if ( ! function_exists( 'burger_decorme_info' ) ) :
	function burger_decorme_info() {
		$info_hs 					= get_theme_mod('info_hs','1');
		$info_contents 				= get_theme_mod('info_contents',decorme_get_info_default());
		if($info_hs=='1'):
			?>	
			<section id="info-section" class="info-section info-two">
				<div class="container">
					<div class="row">
						<div class="col-12 wow fadeInUp">
							<div class="row info-wrapper">
								<?php
								if ( ! empty( $info_contents ) ) {
									$info_contents = json_decode( $info_contents );
									foreach ( $info_contents as $info_item ) {
										$title = ! empty( $info_item->title ) ? apply_filters( 'decorme_translate_single_string', $info_item->title, 'Info section' ) : '';
										$text = ! empty( $info_item->text ) ? apply_filters( 'decorme_translate_single_string', $info_item->text, 'Info section' ) : '';
										$icon = ! empty( $info_item->icon_value) ? apply_filters( 'decorme_translate_single_string', $info_item->icon_value,'Info section' ) : '';
										$link = ! empty( $info_item->link ) ? apply_filters( 'decorme_translate_single_string', $info_item->link, 'Info section' ) : '';
										$image = ! empty( $info_item->image_url ) ? apply_filters( 'decorme_translate_single_string', $info_item->image_url, 'Info section' ) : '';
										?>
										<div class="col-lg-4 col-md-6 col-12 mb-5">
											<aside class="widget widget-contact">
												<div class="contact-area">
													<div class="contact-icon">
														<div class="contact-corn">
															<?php if ( ! empty( $image ) ) : ?>
																<img src="<?php echo esc_url($image); ?>">
															<?php else: ?>
																<i class="fa <?php echo esc_attr($icon); ?>"></i>
															<?php endif; ?>
														</div>
													</div>
													<div class="contact-info">
														<?php if ( ! empty( $title ) ) : ?>
															<h6 class="title"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></h6>
														<?php endif; ?>
														
														<?php if ( ! empty( $text ) ) : ?>
															<p class="text"><?php echo esc_html($text); ?></p>
														<?php endif; ?>	
														<a href="<?php echo esc_url($link); ?>" class="readmore"><i class="fa fa-arrow-right"></i></a>
													</div>
												</div>
											</aside>
										</div>
									<?php } } ?>
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php	
			endif;	}
		endif;
		if ( function_exists( 'burger_decorme_info' ) ) {
			$section_priority = apply_filters( 'decorme_section_priority', 12, 'burger_decorme_info' );
			add_action( 'decorme_sections', 'burger_decorme_info', absint( $section_priority ) );
		}