 <!--===// Start: Slider
 	=================================--> 
 	<?php  
 	if ( ! function_exists( 'burger_kundoo_slider' ) ) :
 		function burger_kundoo_slider() {
 			$slider                 = get_theme_mod('slider_contents',kundoo_get_slider_default());
 			?>
 			<section id="slider-section" class="slider-section">
 				<div class="home-slider owl-carousel owl-theme">
 					<?php
 					if ( ! empty( $slider ) ) {
 						$allowed_html = array(
 							'br'     => array(),
 							'em'     => array(),
 							'strong' => array(),
 							'span'   => array(),
 							'b'      => array(),
 							'i'      => array(),
 						);
 						$slider = json_decode( $slider );
 						foreach ( $slider as $slide_item ) {
 							$kundoo_slide_title = ! empty( $slide_item->title ) ? apply_filters( 'kundoo_translate_single_string', $slide_item->title, 'slider section' ) : '';
 							$subtitle = ! empty( $slide_item->subtitle ) ? apply_filters( 'kundoo_translate_single_string', $slide_item->subtitle, 'slider section' ) : '';
 							$text = ! empty( $slide_item->text ) ? apply_filters( 'kundoo_translate_single_string', $slide_item->text, 'slider section' ) : '';
 							$shortcode = ! empty( $slide_item->shortcode ) ? apply_filters( 'kundoo_translate_single_string', $slide_item->shortcode, 'slider section' ) : '';
 							$button = ! empty( $slide_item->text2) ? apply_filters( 'kundoo_translate_single_string', $slide_item->text2,'slider section' ) : '';
 							$kundoo_slide_link = ! empty( $slide_item->link ) ? apply_filters( 'kundoo_translate_single_string', $slide_item->link, 'slider section' ) : '';
 							$kundoo_video_url = ! empty( $slide_item->link2 ) ? apply_filters( 'kundoo_translate_single_string', $slide_item->link2, 'slider section' ) : '';
 							$icon = ! empty( $slide_item->icon_value ) ? apply_filters( 'kundoo_translate_single_string', $slide_item->icon_value, 'slider section' ) : '';
 							$image = ! empty( $slide_item->image_url ) ? apply_filters( 'kundoo_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
 							$open_new_tab = ! empty( $slide_item->open_new_tab ) ? apply_filters( 'kundoo_translate_single_string', $slide_item->open_new_tab, 'slider section' ) : '';
 							?>
 							<div class="item">
 								<?php if ( ! empty( $image ) ) : ?>
 									<img src="<?php echo esc_url( $image ); ?>" data-img-url="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $kundoo_slide_title ) ) : ?> alt="<?php echo esc_attr( $kundoo_slide_title ); ?>" title="<?php echo esc_attr( $kundoo_slide_title ); ?>" <?php endif; ?> />
 								<?php endif; ?>
 								<div class="main-slider">
 									<div class="main-table">
 										<div class="main-table-cell">
 											<div class="container">
 												<div class="main-content text-left">
 													<?php if ( ! empty( $kundoo_slide_title ) ) : ?>
 														<h4 data-animation="fadeInUp" data-delay="150ms">
 															<i class="fa <?php echo esc_attr($icon); ?>"></i> <?php echo wp_kses(html_entity_decode($kundoo_slide_title), $allowed_html )?>
 														</h4>
 													<?php endif; ?> 
 													<?php if ( ! empty( $subtitle ) ) : ?>
 														<h2 data-animation="fadeInUp" data-delay="200ms"><?php echo wp_kses(html_entity_decode($subtitle),$allowed_html )?>
 													</h2>
 												<?php endif; ?>
 												<?php if ( ! empty( $text ) ) : ?>
 													<p data-animation="fadeInUp" data-delay="500ms"><?php echo wp_kses(html_entity_decode($text), $allowed_html)?></p>
 												<?php endif; ?>
 												<?php if ( ! empty( $shortcode ) ) : ?>
 													<legend data-animation="fadeInUp" data-delay="700ms"><?php echo wp_kses(html_entity_decode($shortcode), $allowed_html)?></legend>
 												<?php endif; ?>
 												<?php if ( ! empty( $button ) ) : ?>
 													<a data-animation="fadeInUp" data-delay="800ms" href="<?php echo esc_url($kundoo_slide_link); ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== '1') { echo "target='_blank'"; } ?> class="btn btn-primary btn-like-icon theme-btn"><?php echo wp_kses_post($button); ?> <span class="bticn"><i class="fa fa-check"></i></span></a>
 												<?php endif; ?>
 												<a href="<?php echo esc_url($kundoo_video_url); ?>" data-animation="fadeInUp" data-delay="800ms" class="btn btn-link btn-play fadeInUp">
 													<span class="btn btn-primary">
 														<i class="fa fa-play"></i>
 													</span>
 													<span class="d-md-inline-block d-none">
 														<span></span>
 													</span>
 												</a>
 												<a data-animation="fadeInUp" data-delay="800ms" href=javascript:void(0) class="btn btn-border-white btn-like-icon theme-btn"><?php esc_html_e( 'Read More', 'kundoo' ); ?> <span class="bticn">
 													<i class="fa fa-angle-double-right"></i>
 												</span>
 											</a>
 										</div>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				<?php } } ?>
 			</div>
 			<!-- Product Thumbs Carousel -->
 			<div class="client-thumb-outer">
 				<div class="home-thumbs-carousel owl-carousel owl-theme">
 					<?php
 					foreach ( $slider as $slide_item ) {
 						$image = ! empty( $slide_item->image_url ) ? apply_filters( 'kundoo_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
 						?>
 						<div class="thumb-item">
 							<figure class="thumb-box">
 								<?php if ( ! empty( $image ) ) : ?>
 									<img src="<?php echo esc_url( $image ); ?>" data-img-url="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $kundoo_slide_title ) ) : ?> alt="<?php echo esc_attr( $kundoo_slide_title ); ?>" title="<?php echo esc_attr( $kundoo_slide_title ); ?>" <?php endif; ?> />
 								<?php endif; ?>
 							</figure>
 						</div>
 					<?php } ?>
 				</div>
 			</div>
 		</section>
 		<?php	
 	}
 endif;
 if ( function_exists( 'burger_kundoo_slider' ) ) {
 	$section_priority = apply_filters( 'kundoo_section_priority', 11, 'burger_kundoo_slider' );
 	add_action( 'kundoo_sections', 'burger_kundoo_slider', absint( $section_priority ) );
 }
