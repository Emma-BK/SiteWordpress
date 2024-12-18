<?php 
if ( ! function_exists( 'maxtech_above_left_header' ) ) :
	function maxtech_above_left_header() {
		$hs_above_hiring		=	get_theme_mod('hs_above_hiring','1');
		$abv_hdr_hiring_ttl		=	get_theme_mod('abv_hdr_hiring_ttl','Now Hiring:');
		$abv_hdr_hiring_content	=	get_theme_mod('abv_hdr_hiring_content','"Are you a driven 1st Line IT Support?","Are you a driven 1st Line IT Support?","Are you a driven 1st Line IT Support?"');

		$hide_show_social_icon		=	get_theme_mod('hide_show_social_icon','1');
		$social_icons				=	get_theme_mod('social_icons',spintech_get_social_icon_default());

		if($hide_show_social_icon == '1') { ?>
			<aside class="widget widget_social_widget">
				<ul>
					<?php
					$social_icons = json_decode($social_icons);
					if( $social_icons!='' )
					{
						foreach($social_icons as $social_item){	
							$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'spintech_translate_single_string', $social_item->icon_value, 'Header section' ) : '';	
							$social_link = ! empty( $social_item->link ) ? apply_filters( 'spintech_translate_single_string', $social_item->link, 'Header section' ) : '';
							?>
							<li><a href="<?php echo esc_url( $social_link ); ?>"><i class="fa <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
						<?php }} ?>
					</ul>
				<?php } ?>
			</aside>
			<?php if($hs_above_hiring == '1') { ?>
				<div class="text-animation hiring">
					<div class="text-heading"><strong><?php echo esc_html( $abv_hdr_hiring_ttl ); ?></strong>
						<div class="text-sliding">            
							<span class="typewrite" data-period="2000" data-type='[ <?php echo wp_kses_post( $abv_hdr_hiring_content ); ?>]'></span><span class="wrap"></span>
						</div>
					</div>
				</div>
				<?php 
			} } endif;
			add_action('maxtech_above_left_header', 'maxtech_above_left_header'); 

            // Above right header
			if ( ! function_exists( 'maxtech_above_right_header' ) ) :
				function maxtech_above_right_header() {
					$hide_show_cntct_info		=	get_theme_mod('hide_show_cntct_info','1');
					$th_contct_icon				=	get_theme_mod('th_contct_icon','fa-clock-o');
					$th_contact_text			=	get_theme_mod('th_contact_text','Office Hours 8:00AM - 6:00PM');
					if($hide_show_cntct_info == '1') { ?>

						<aside class="widget widget-contact">
							<div class="contact-area">
								<div class="contact-icon">
									<div class="contact-corn"><i class="fa <?php echo esc_attr( $th_contct_icon ); ?>"></i></div>
								</div>
								<div class="contact-info">
									<p class="text"><a href="javascript:void(0);"><?php echo esc_html( $th_contact_text ); ?></a></p>
								</div>
							</div>
						</aside>
						<?php 
					} } endif;
					add_action('maxtech_above_right_header', 'maxtech_above_right_header'); 