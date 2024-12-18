<?php 
if ( ! function_exists( 'burger_kundoo_cta' ) ) :
	function burger_kundoo_cta() {
		$hs_cta					    = get_theme_mod('hs_cta','1');	
		$cta_title				    = get_theme_mod('cta_title',"Don't hesitate to say hello");
		$cta_subtitle			    = get_theme_mod('cta_subtitle','Have a Project in Your Mind');
		$cta_description		    = get_theme_mod('cta_description','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
		$cta_btn				    = get_theme_mod('cta_btn',"LET'S TALK WITH US");
		$cta_btn_url				= get_theme_mod('cta_btn_url','');
		$cta_btn_open_new_tab       = get_theme_mod('cta_btn_open_new_tab','');
		$cta_img			        = get_theme_mod('cta_img',BURGER_COMPANION_PLUGIN_URL .'inc/kundoo/images/cta/cta-01.jpg');
		if($hs_cta == '1'){	
			?>
			<section id="cta-section-01" class="cta-section home-cta home-cta-01" style="background:url(<?php echo esc_url($cta_img); ?>) no-repeat fixed center center / cover rgba(0,0,0,0.7);background-blend-mode:multiply;">
				<div class="container">
					<div class="row wow fadeInUp">
						<div class="col-lg-9 col-12 m-auto ">
							<div class="cta-wrapper text-center">
								<div class="cta-content">
									<?php if ( ! empty( $cta_title ) ) : ?>
										<h5><?php echo wp_kses_post($cta_title); ?></h5>
									<?php endif; ?>
									<?php if ( ! empty( $cta_subtitle ) ) : ?>
										<h3><?php echo wp_kses_post($cta_subtitle); ?></h3>
									<?php endif; ?>
									<?php if ( ! empty( $cta_description ) ) : ?>
										<p><?php echo wp_kses_post($cta_description); ?></p>
									<?php endif; ?>
								</div>
								<div class="cta-btn-wrap text-center">
									<?php if ( ! empty( $cta_btn ) ) : ?> 
										<a href="<?php echo esc_url($cta_btn_url); ?>" <?php if($cta_btn_open_new_tab) { echo "target='_blank'"; } ?> class="btn btn-round-icon btn-white theme-btn"><?php echo wp_kses_post($cta_btn); ?> <i class="fa fa-check-circle-o"></i>
										</a>
									<?php endif; ?> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php }}
	endif;
	if ( function_exists( 'burger_kundoo_cta' ) ) {
		$section_priority = apply_filters( 'kundoo_section_priority', 13, 'burger_kundoo_cta' );
		add_action( 'kundoo_sections', 'burger_kundoo_cta', absint( $section_priority ) );
	}	