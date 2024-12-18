<?php 
if ( ! function_exists( 'burger_astrocare_horoscope' ) ) :
	function burger_astrocare_horoscope() {
		$hs_horoscope		= get_theme_mod('hs_horoscope','1');
		$horoscope_title    = get_theme_mod('horoscope_title','Zodiac Sign');
		$horoscope_subtitle	= get_theme_mod('horoscope_subtitle','Choose Your Horoscope');
		if($hs_horoscope == '1'){ ?>
			<section class="ast_section astrocare-horoscope ast__astrocare-horoscope-form">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 m-auto">
							<div class="astro_theme_titles">

								<?php if ( ! empty( $horoscope_title ) ) : ?>
									<h5 class="theme_title wow fadeInLeft"><?php do_action('astrocare_title_img_seprator'); ?> <?php echo wp_kses_post($horoscope_title); ?></h5>
								<?php endif; ?>

								<?php if ( ! empty( $horoscope_subtitle ) ) : ?>
									<h2 class="theme_subtitle wow fadeInRight"><?php echo wp_kses_post($horoscope_subtitle); ?></h2>
								<?php endif; ?>

							</div>
						</div>
					</div>
					<div class="row row-cols-xl-1 row-cols-lg-1 row-cols-md-1 row-cols-sm-1 row-cols-1">
						<?php if( in_array( 'vedicastroapi/vedic-astro-api.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { 

							echo do_shortcode('[vedicastro-prediction-shortcode]'); 
						}else{
							echo wp_kses_post("<p class='text-center'>Install and activate <strong>VedicAstroAPI</strong> plugin for Horoscope.</p>");
						} ?>
					</div>    
				</div>
			</section>

			<?php	
		}}
	endif;
	if ( function_exists( 'burger_astrocare_horoscope' ) ) {
		$section_priority = apply_filters( 'astrocare_section_priority', 13, 'burger_astrocare_horoscope' );
		add_action( 'astrocare_sections', 'burger_astrocare_horoscope', absint( $section_priority ) );
	}	