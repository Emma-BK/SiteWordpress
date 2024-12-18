<?php 
if ( ! function_exists( 'burger_astrocare_kundli' ) ) :
	function burger_astrocare_kundli() {
		$hs_kundli			= get_theme_mod('hs_kundli','1');	
		$hs_clipart			= get_theme_mod('hs_clipart','1');	
		$kundli_title		= get_theme_mod('kundli_title','Free Kundali');	
		$kundli_subtitle	= get_theme_mod('kundli_subtitle','Get Free Kundali');	
		$kundli_wave_title	= get_theme_mod('kundli_wave_title','Astro');	
		$kundli_wave_url	= get_theme_mod('kundli_wave_url','');	
		if($hs_kundli == '1'){	
			?>
			<section class="ast_section ast_kundli-section ast_bg_primary_lite">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12 m-auto wow zoomIn">
							<div class="ast_free_Kundali">
								<div class="row">
									<div class="col-lg-6">
										<div class="ast_form_box">
											<div class="astro_theme_titles">

												<?php if ( ! empty( $kundli_title ) ) : ?>
													<h5 class="theme_title"><?php do_action('astrocare_title_img_seprator'); ?><?php echo wp_kses_post($kundli_title); ?></h5>
												<?php endif; ?>

												<?php if ( ! empty( $kundli_subtitle ) ) : ?>
													<h2 class="theme_subtitle"><?php echo wp_kses_post($kundli_subtitle); ?></h2>
												<?php endif; ?>
											</div>
											<div class="row">
												<?php if( in_array( 'vedicastroapi/vedic-astro-api.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { 

													echo do_shortcode('[vedicastro-kundali-shortcode]');
												}else{
													echo wp_kses_post("<p class='text-center'>Install and activate <strong>VedicAstroAPI</strong> plugin for Kundali Form.</p>");
												} ?>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="ast_free_Kundali_img ">
											<div class="hs_waves2">
												<div class="hs_wave"></div>
												<div class="hs_wave"></div>
												<div class="hs_wave"></div>
												<div class="hs_wave"></div>
												<?php if ( ! empty( $kundli_wave_title ) ) : ?>
													<div class="ast_img_title">
														<h4><a href="<?php echo esc_url( $kundli_wave_url ); ?>"><?php echo wp_kses_post($kundli_wave_title); ?></a></h4>
													</div>
												<?php endif; ?>

												<?php if($hs_clipart == '1') : ?>
													<span class="ring1 animate-v2">
														<img src="<?php echo esc_url(BURGER_COMPANION_PLUGIN_URL .'inc/astrocare/images/kundli/shape-01.png'); ?>" alt="shape-01">
													</span>
													<span class="ring2 animate-v3">
														<img src="<?php echo esc_url(BURGER_COMPANION_PLUGIN_URL .'inc/astrocare/images/kundli/shape-02.png'); ?>" alt="shape-02">
													</span>
													<span class="ring3 animate-v2">
														<img src="<?php echo esc_url(BURGER_COMPANION_PLUGIN_URL .'inc/astrocare/images/kundli/shape-03.png'); ?>" alt="shape-03">
													</span>
													<span class="ring4 animate-v3">
														<img src="<?php echo esc_url(BURGER_COMPANION_PLUGIN_URL .'inc/astrocare/images/kundli/shape-04.png'); ?>" alt="shape-04">
													</span>
													<span class="ring5 animate-v2">
														<img src="<?php echo esc_url(BURGER_COMPANION_PLUGIN_URL .'inc/astrocare/images/kundli/shape-05.png'); ?>" alt="shape-05">
													</span>
													<span class="ring6 animate-v3">
														<img src="<?php echo esc_url(BURGER_COMPANION_PLUGIN_URL .'inc/astrocare/images/kundli/shape-06.png'); ?>" alt="shape-06">
													</span>
													<span class="ring7 animate-v2">
														<img src="<?php echo esc_url(BURGER_COMPANION_PLUGIN_URL .'inc/astrocare/images/kundli/shape-07.png'); ?>" alt="shape-07">
													</span>
													<span class="ring8 animate-v3">
														<img src="<?php echo esc_url(BURGER_COMPANION_PLUGIN_URL .'inc/astrocare/images/kundli/shape-08.png'); ?>" alt="shape-08">
													</span>
													<span class="ring9 animate-v2">
														<img src="<?php echo esc_url(BURGER_COMPANION_PLUGIN_URL .'inc/astrocare/images/kundli/shape-09.png'); ?>" alt="shape-09">
													</span>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php	
		}}
	endif;
	if ( function_exists( 'burger_astrocare_kundli' ) ) {
		$section_priority = apply_filters( 'astrocare_section_priority', 16, 'burger_astrocare_kundli' );
		add_action( 'astrocare_sections', 'burger_astrocare_kundli', absint( $section_priority ) );
	}