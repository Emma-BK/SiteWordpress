<?php 
if ( ! function_exists( 'burger_astrocare_astroform' ) ) :
	function burger_astrocare_astroform() {
		$hs_astroform	= get_theme_mod('hs_astroform','1');	
		$astroform_title = get_theme_mod('astroform_title','Know Your Moon Sign');
		if($hs_astroform == '1'){	
			?>	
			<section class="ast_searchbox_section ast_astro-slider-form">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="ast_search_box ast_form_box">
								<div class="astro_theme_titles">
									<?php if ( ! empty( $astroform_title ) ) : ?>
										<h5 class="theme_title"><?php do_action('astrocare_title_img_seprator'); ?> <?php echo wp_kses_post($astroform_title); ?></h5>
									<?php endif; ?>
								</div>
								<?php if( in_array( 'vedicastroapi/vedic-astro-api.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { 

									echo do_shortcode('[vedicastro-sade-sati-shortcode]');
								}else{
									echo wp_kses_post("<p class='text-center'>Install and activate <strong>VedicAstroAPI</strong> plugin for Sade Sati Form.</p>");
								} ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php	
		} } 
	endif;
	if ( function_exists( 'burger_astrocare_astroform' ) ) {
		$section_priority = apply_filters( 'astrocare_section_priority', 12, 'burger_astrocare_astroform' );
		add_action( 'astrocare_sections', 'burger_astrocare_astroform', absint( $section_priority ) );
	}