<?php 
if ( ! function_exists( 'burger_kundoo_design' ) ) :
	function burger_kundoo_design() {
		$hs_design			= get_theme_mod('hs_design','1');	
		$design_title		= get_theme_mod('design_title','About our company');
		$design_subtitle	= get_theme_mod('design_subtitle','We Are Top Business Consultation Agency');
		$design_description	= get_theme_mod('design_description',"This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.");
		$design_left_title	= get_theme_mod('design_left_title','Since <span class="counter">2000</span>');
		$design_left_icon	= get_theme_mod('design_left_icon','fa-flag');
		$design_left_img1	= get_theme_mod('design_left_img1',BURGER_COMPANION_PLUGIN_URL .'inc/kundoo/images/design/design-img-01.jpg');
		$design_left_img2	= get_theme_mod('design_left_img2',BURGER_COMPANION_PLUGIN_URL .'inc/kundoo/images/design/design-img-02.jpg');
		$rig_de_cont_info_title    = get_theme_mod('rig_de_cont_info_title','Get a free Quote');
		$rig_de_cont_info_subtitle = get_theme_mod('rig_de_cont_info_subtitle','+92(8830)36780');
		$rig_de_cont_info_icon     = get_theme_mod('rig_de_cont_info_icon','fa-phone');
		$rig_de_cont_info_iconLink = get_theme_mod('rig_de_cont_info_iconLink','');
		$right_design_btn_label    = get_theme_mod('right_design_btn_label','Discover More');
		$right_design_btn_url      = get_theme_mod('right_design_btn_url','');
		$design_btn_new_tab        = get_theme_mod('design_btn_new_tab','');
		$design_btn_icon           = get_theme_mod('design_btn_icon','fa-globe');
		$design_contents           = get_theme_mod('design_contents',kundoo_get_design_default());
		if($hs_design == '1'){	
			?>
			<section id="design-section" class="design-section st-py-default">
	<div class="container">
		<div class="row g-5 mt-1">
			<div class="col-lg-7 wow fadeInLeft">
				<div class="tilter">
					<div class="tilter__figure">
						<?php if ( ! empty( $design_left_img1 ) ) : ?>
							<div class="design-img">
								<img src="<?php echo esc_url($design_left_img1); ?>" class="img-fluid" alt="design-left-img-1">
							</div>
						<?php endif; ?>
					</div>
					<div class="about-content-wrap">
						<?php if ( ! empty( $design_left_img2 ) ) : ?>
							<img src="<?php echo esc_url($design_left_img2); ?>" alt="design-left-img-2">
						<?php endif; ?>
						<div class="about-summery-content">
							<?php if ( ! empty( $design_left_icon ) ) : ?>
								<div class="about-corn">
									<i class="fa <?php echo esc_attr( $design_left_icon ); ?>"></i>
								</div>
							<?php endif; 
							if ( ! empty( $design_left_title ) ) : ?>
								<p class="about-summery"><?php echo wp_kses_post($design_left_title); ?></p>
							<?php endif; ?>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 wow fadeInRight">
				<div class="row">
					<div class="col-lg-12 col-12 mx-lg-auto mb-4 text-left">
						<div class="heading-default">
							<?php if ( ! empty( $design_title ) ) : ?>
								<span class="badge"><?php echo wp_kses_post($design_title); ?></span>
							<?php endif;
							if ( ! empty( $design_subtitle ) ) : ?>
								<h2><?php echo wp_kses_post($design_subtitle); ?></h2>
							<?php endif;
							if ( ! empty( $design_description ) ) : ?>
								<p><?php echo wp_kses_post($design_description); ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="row row-cols-md-2 row-cols-1 g-4">
					<?php
					if ( ! empty( $design_contents ) ) {
						$allowed_html = array(
							'br'     => array(),
							'em'     => array(),
							'strong' => array(),
							'span'   => array(),
							'b'      => array(),
							'i'      => array(),
						);
						$design_contents = json_decode( $design_contents );
						foreach ( $design_contents as $design_item ) {
							$text = ! empty( $design_item->text ) ? apply_filters( 'kundoo_translate_single_string', $design_item->text, 'Design section' ) : '';
							$icon = ! empty( $design_item->icon_value) ? apply_filters( 'kundoo_translate_single_string', $design_item->icon_value,'Design section' ) : '';
							?>
							<div class="col">
								<div class="design-item">
									<div class="design-icon">
										<?php if ( ! empty( $icon ) ) : ?>
											<div class="design-corn">
												<i class="fa <?php echo esc_attr( $icon ); ?>"></i>
											</div>
										<?php endif; ?>
									</div>
									<?php if ( ! empty( $text ) ) : ?>
										<div class="design-content">
											<p><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></p>
										</div>
									<?php endif; ?>
								</div>
							</div>
						<?php } } ?>
					</div>
					<div class="about-content">
						<?php if ( ! empty( $right_design_btn_label ) ) : ?> 
							<div class="btn-wrap text-left">
								<a href="<?php echo esc_url($right_design_btn_url); ?>" <?php if($design_btn_new_tab) { echo "target='_blank'"; } ?> class="btn btn-primary theme-btn"><i class="fa <?php echo esc_attr( $design_btn_icon ); ?> mr-2"></i><?php echo wp_kses_post($right_design_btn_label); ?>
								</a>
							</div>
						<?php endif; ?>
						<aside class="widget widget-contact">
							<div class="contact-area">
								<?php if ( ! empty( $rig_de_cont_info_title ) ) : ?>
									<div class="contact-icon">
										<a href="<?php echo esc_url($rig_de_cont_info_iconLink); ?>" class="theme-btn">
											<i class="fa <?php echo esc_attr( $rig_de_cont_info_icon ); ?>"></i>
										</a>
									</div>
								<?php endif; ?>
								<div class="contact-info">
									<?php if ( ! empty( $rig_de_cont_info_title ) ) : ?>
										<h6 class="title"><?php echo wp_kses_post($rig_de_cont_info_title); ?></h6>
									<?php endif; ?>
									<?php if ( ! empty( $rig_de_cont_info_subtitle ) ) : ?>
										<p class="text">
											<?php echo wp_kses_post($rig_de_cont_info_subtitle); ?>
										</p>
									<?php endif; ?>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</section>
		<?php }}
	endif;
	if ( function_exists( 'burger_kundoo_design' ) ) {
		$section_priority = apply_filters( 'kundoo_section_priority', 14, 'burger_kundoo_design' );
		add_action( 'kundoo_sections', 'burger_kundoo_design', absint( $section_priority ) );
	}	