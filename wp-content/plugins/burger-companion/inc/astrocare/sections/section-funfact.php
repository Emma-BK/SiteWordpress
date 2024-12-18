<?php 
if ( ! function_exists( 'burger_astrocare_funfact' ) ) :
	function burger_astrocare_funfact() {
		$hs_funfact			= get_theme_mod('hs_funfact','1');	
		$funfact_contents	= get_theme_mod('funfact_contents',astrocare_get_funfact_default());
		if($hs_funfact == '1'){	
			?>
			<section class="ast_section funfact-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12 m-auto wow zoomIn">
							<div class="funfact-overlay">
								<div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 g-4">
									<?php
									if ( ! empty( $funfact_contents ) ) {
										$allowed_html = array(
											'br'     => array(),
											'em'     => array(),
											'strong' => array(),
											'span'   => array(),
											'b'      => array(),
											'i'      => array(),
										);
										$funfact_contents = json_decode( $funfact_contents );
										foreach ( $funfact_contents as $funfact_item ) {
											$astrocare_fun_title = ! empty( $funfact_item->title ) ? apply_filters( 'astrocare_translate_single_string', $funfact_item->title, 'Funfact section' ) : '';
											$astrocare_fun_subtitle = ! empty( $funfact_item->subtitle ) ? apply_filters( 'astrocare_translate_single_string', $funfact_item->subtitle, 'Funfact section' ) : '';
											?>
											<div class="col">
												<div class="count-box">

													<?php if ( ! empty( $astrocare_fun_title) ) : ?>
														<div class="value" akhi="<?php echo esc_attr($astrocare_fun_title); ?>"><?php esc_html_e( '0', 'astrocare-pro' ); ?></div>
													<?php endif; ?> 

													<?php if ( ! empty( $astrocare_fun_subtitle) ) : ?>
														<span class="count-title"><?php echo wp_kses( html_entity_decode( $astrocare_fun_subtitle ), $allowed_html ); ?></span>
													<?php endif; ?> 
												</div>
											</div>
										<?php } } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php	
			}}
		endif;
		if ( function_exists( 'burger_astrocare_funfact' ) ) {
			$section_priority = apply_filters( 'astrocare_section_priority', 15, 'burger_astrocare_funfact' );
			add_action( 'astrocare_sections', 'burger_astrocare_funfact', absint( $section_priority ) );
		}	