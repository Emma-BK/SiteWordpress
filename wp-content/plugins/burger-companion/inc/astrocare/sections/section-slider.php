<?php  
if ( ! function_exists( 'burger_astrocare_slider' ) ) :
	function burger_astrocare_slider() {
		$hs_slider = get_theme_mod('hs_slider','1');	
		$slider   = get_theme_mod('slider',astrocare_get_slider_default());
		$slider_title_img  = get_theme_mod('slider_title_img',get_template_directory_uri() .'/assets/images/general/earth.png');
		$hs_slider_ticon  = get_theme_mod('hs_slider_ticon','1');
		if($hs_slider == '1'){		
		?>
		<section class="ast_slider_section">
			<div class="ast_home_slider owl-carousel owl-theme">
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
						$astrocare_slide_title = ! empty( $slide_item->title ) ? apply_filters( 'astrocare_translate_single_string', $slide_item->title, 'slider section' ) : '';
						$subtitle = ! empty( $slide_item->subtitle ) ? apply_filters( 'astrocare_translate_single_string', $slide_item->subtitle, 'slider section' ) : '';
						$text = ! empty( $slide_item->text ) ? apply_filters( 'astrocare_translate_single_string', $slide_item->text, 'slider section' ) : '';
						$button = ! empty( $slide_item->text2) ? apply_filters( 'astrocare_translate_single_string', $slide_item->text2,'slider section' ) : '';
						$astrocare_slide_link = ! empty( $slide_item->link ) ? apply_filters( 'astrocare_translate_single_string', $slide_item->link, 'slider section' ) : '';
						$image = ! empty( $slide_item->image_url ) ? apply_filters( 'astrocare_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
						$image2 = ! empty( $slide_item->image_url2 ) ? apply_filters( 'astrocare_translate_single_string', $slide_item->image_url2, 'slider section' ) : '';
						$open_new_tab = ! empty( $slide_item->open_new_tab ) ? apply_filters( 'astrocare_translate_single_string', $slide_item->open_new_tab, 'slider section' ) : '';
						?>
						<div class="item">
							<?php if ( ! empty( $image ) ) : ?>
								<img src="<?php echo esc_url( $image ); ?>" data-img-url="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $astrocare_slide_title ) ) : ?> alt="<?php echo esc_attr( $astrocare_slide_title ); ?>" title="<?php echo esc_attr( $astrocare_slide_title ); ?>" <?php endif; ?> />
							<?php endif; ?>
							<div class="astro-main-slider astro-main-slider01">
								<div class="main-table">
									<div class="main-table-cell">
										<div class="container">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-12">
													<div class="main-content ast_slider_content01">

														<?php if ( ! empty( $astrocare_slide_title ) ) : ?>
															<h4 class="ast_sub_title"> 

																<?php if($hs_slider_ticon == '1') : ?>
																	<span class="ast_slider_earth">
																		<img src="<?php echo esc_url($slider_title_img); ?>" alt="Astrocare">
																	</span> 
																<?php endif; ?>

																<?php echo wp_kses(html_entity_decode($astrocare_slide_title), $allowed_html )?></h4>
															<?php endif; ?>	

															<?php if ( ! empty( $subtitle ) ) : ?>
																<h2 class="ast_title">
																	<?php echo wp_kses(html_entity_decode($subtitle), $allowed_html )?>
																</h2>
															<?php endif; ?>

															<?php if ( ! empty( $text ) ) : ?>
																<p class="ast_description"><?php echo wp_kses(html_entity_decode($text), $allowed_html )?></p>
															<?php endif; ?>	

															<div class="ast_slider_btn">
																<?php if ( ! empty( $button ) ) : ?>
																	<a href="<?php echo esc_url($astrocare_slide_link); ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== '1') { echo "target='_blank'"; } ?> class="astro_btn mr-3"><span><?php echo wp_kses_post($button); ?></span></a>
																<?php endif; ?>
															</div>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-12 d-none d-md-block">
														<div class="astro_pandit">
															<?php if ( ! empty( $image2 ) ) : ?>
																<img src="<?php echo esc_url( $image2 ); ?>" data-img-url="<?php echo esc_url( $image2 ); ?>" <?php if ( ! empty( $astrocare_slide_title ) ) : ?> alt="<?php echo esc_attr( $astrocare_slide_title ); ?>" title="<?php echo esc_attr( $astrocare_slide_title ); ?>" <?php endif; ?> />

															<?php endif; ?>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>	
						<?php } } ?>	
					</div>
				</section>
				
			<?php }}
		endif;
		if ( function_exists( 'burger_astrocare_slider' ) ) {
			$section_priority = apply_filters( 'astrocare_section_priority', 11, 'burger_astrocare_slider' );
			add_action( 'astrocare_sections', 'burger_astrocare_slider', absint( $section_priority ) );
		}