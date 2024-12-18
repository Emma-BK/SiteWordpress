 <!--===// Start: Slider
 	=================================--> 
 	<?php  
 	if ( ! function_exists( 'burger_decorme_slider' ) ) :
 		function burger_decorme_slider() {
 			$slider2_social_ttl				= get_theme_mod('slider2_social_ttl','FOLLOW');
 			$slider2_hs_social_icon			= get_theme_mod('slider2_hs_social_icon','1'); 
 			$slider2_social_icons			= get_theme_mod('slider2_social_icons',decorme_get_social_icon_default()); 
 			$slider2_hs 						= get_theme_mod('slider2_hs','1');
 			$slider 						= get_theme_mod('slider2',decorme_get_slider2_default());
 			if($slider2_hs=='1'):
 				?>	
 				<section id="slider-section" class="slider-section home-slider-two">
 					<div class="home-slider owl-carousel owl-theme">
 						<?php
 						if ( ! empty( $slider ) ) {
 							$allowed_html = array(
 								'br'     => array(),
 								'em'     => array(),
 								'strong' => array(),
 								'span'   => array(
 									'class' => true,
 								),
 								'b'      => array(),
 								'i'      => array(),
 							);
 							$slider = json_decode( $slider );
 							foreach ( $slider as $slide_item ) {

 								$title = ! empty( $slide_item->title ) ? apply_filters( 'decorme_translate_single_string', $slide_item->title, 'slider 2 section' ) : '';
 								$subtitle = ! empty( $slide_item->subtitle ) ? apply_filters( 'decorme_translate_single_string', $slide_item->subtitle, 'slider 2 section' ) : '';

 								$text = ! empty( $slide_item->text ) ? apply_filters( 'decorme_translate_single_string', $slide_item->text, 'slider 2 section' ) : '';
 								$button = ! empty( $slide_item->text2) ? apply_filters( 'decorme_translate_single_string', $slide_item->text2,'slider 2 section' ) : '';
 								$link = ! empty( $slide_item->link ) ? apply_filters( 'decorme_translate_single_string', $slide_item->link, 'slider 2 section' ) : '';
 								$image = ! empty( $slide_item->image_url ) ? apply_filters( 'decorme_translate_single_string', $slide_item->image_url, 'slider 2 section' ) : '';
 								?>
 								<div class="item">
 									<?php if ( ! empty( $image ) ) : ?>
 										<img src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
 									<?php endif; ?>
 									<div class="main-slider">
 										<div class="main-table">
 											<div class="main-table-cell">
 												<div class="main-content text-center">

 													<?php if ( ! empty( $title ) ) : ?>
 														<h5 data-animation="fadeInUp" data-delay="150ms"><?php echo wp_kses(html_entity_decode($title),$allowed_html )?></h5>
 													<?php endif; ?>

 													<?php if ( ! empty( $subtitle ) ) : ?>
 														<h3 data-animation="fadeInUp" data-delay="200ms"><?php echo wp_kses(html_entity_decode($subtitle),$allowed_html )?></h3>
 													<?php endif; ?>

 													<?php if ( ! empty( $text ) ) : ?>
 														<p data-animation="fadeInUp" data-delay="500ms"><?php echo wp_kses(html_entity_decode($text),$allowed_html )?></p>
 													<?php endif; ?>

 													<?php if ( ! empty( $button ) ) : ?>
 														<a data-animation="fadeInUp" data-delay="800ms" href="<?php echo esc_url( $link ); ?>" class="btn btn-primary">
 															<span class="btn-svg-label"><?php echo esc_html($button); ?></span>
 															<svg class="btn-svg-circle" width="190" x="0px" y="0px" viewBox="0 0 60 60" enable-background="new 0 0 60 60">
 																<circle class="js-discover-circle" fill="inherit" cx="30" cy="30" r="28.7"></circle>
 															</svg>
 															<svg class="btn-svg-border" x="0px" y="0px" preserveaspectratio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="190">
 																<g class="btn-svg-border--left js-discover-left-border" id="Calque_2">
 																	<path fill="none" stroke="inherit" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
 																</g>
 																<g class="btn-svg-border--right js-discover-right-border" id="Calque_3">
 																	<path fill="none" stroke="inherit" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
 																</g>
 															</svg>
 														</a>
 													<?php endif; ?>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 							<?php } } ?>
 						</div>
 						<?php if($slider2_hs_social_icon=='1'): ?>
 							<div class="follow-us">
 								<?php if(!empty($slider2_social_ttl)): ?>
 									<div class="title"><?php echo wp_kses_post($slider2_social_ttl); ?></div>
 								<?php endif; ?>
 								<aside class="widget widget_social">
 									<?php
 									$slider2_social_icons = json_decode($slider2_social_icons);
 									if( $slider2_social_icons!='' )
 									{
 										foreach($slider2_social_icons as $social_item){	
 											$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'decorme_translate_single_string', $social_item->icon_value, 'Header section' ) : '';	
 											$social_link = ! empty( $social_item->link ) ? apply_filters( 'decorme_translate_single_string', $social_item->link, 'Header section' ) : '';
 											?>
 											<div class="circle"><a href="<?php echo esc_url( $social_link ); ?>"><i class="fa <?php echo esc_attr( $social_icon ); ?>"></i></a></div>
 										<?php }} ?>
 									</aside>
 								</div>
 							<?php endif; ?>
 						</section>	
 						<?php 
 					endif;  }
 				endif; 
 				if ( function_exists( 'burger_decorme_slider' ) ) {
 					$section_priority = apply_filters( 'decorme_section_priority', 11, 'burger_decorme_slider' );
 					add_action( 'decorme_sections', 'burger_decorme_slider', absint( $section_priority ) );
 				}
