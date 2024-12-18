</div>
<!--===// Start: Footer
=================================-->
<?php 
$footer_bg_img	    = get_theme_mod('footer_bg_img',esc_url(get_template_directory_uri() .'/assets/images/footer_pattern.png'));
?>
<footer id="footer-section" class="footer-section" style="background: url(<?php echo esc_url($footer_bg_img); ?>) no-repeat center center / cover, var(--bs-secondarytwo);">
<?php
	 if ( is_active_sidebar( 'decorme-footer-widget-area1' ) || is_active_sidebar( 'decorme-footer-widget-area2' )  || is_active_sidebar( 'decorme-footer-widget-area3' )) {
?>
	<div class="footer-main">
		<div class="container">
			<div class="row g-5">				 
				<?php if ( is_active_sidebar( 'decorme-footer-widget-area1' ) ) : ?>
					<div class="col-lg-3 col-md-6 col-12 wow fadeIn">
						 <?php dynamic_sidebar( 'decorme-footer-widget-area1'); ?>
					</div>
				<?php endif; ?>	
				
				<?php if ( is_active_sidebar( 'decorme-footer-widget-area2' ) ) : ?>
					<div class="col-lg-6 col-md-6 col-12 wow fadeIn">
						 <?php dynamic_sidebar( 'decorme-footer-widget-area2'); ?>
					</div>
				<?php endif; ?>
				
				<?php if ( is_active_sidebar( 'decorme-footer-widget-area3' ) ) : ?>
					<div class="col-lg-3 col-md-6 col-12 wow fadeIn">
						 <?php dynamic_sidebar( 'decorme-footer-widget-area3'); ?>
					</div>
				<?php endif; ?>	
			</div>
		</div>
	</div>
	<?php } 
	$footer_copyright		= get_theme_mod('footer_copyright','Copyright &copy; [current_year] [site_title] | Powered by [theme_author]');
	$hs_footer_payment  	= get_theme_mod('hs_footer_payment','1');
	if(!empty($footer_copyright) || $hs_footer_payment=='1'):
	?>
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12 text-lg-left text-md-left text-center">
						 <?php if ( ! empty( $footer_copyright ) ){ 				
								$decorme_copyright_allowed_tags = array(
									'[current_year]' => date_i18n('Y'),
									'[site_title]'   => get_bloginfo('name'),
									'[theme_author]' => sprintf(__('<a href="#">DecorMe</a>', 'decorme')),
								);
							?>                          
							<div class="copyright-text">
								<?php
									echo apply_filters('decorme_footer_copyright', wp_kses_post(decorme_str_replace_assoc($decorme_copyright_allowed_tags, $footer_copyright)));
								?>
							</div>
						<?php } ?>
					</div>
					<div class="col-lg-6 col-md-6 col-12 text-lg-right text-md-right text-center">
						<aside class="widget widget_block">
							<?php do_action('decorme_footer_payment_icons'); ?>
						</aside>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</footer>
<!-- End: Footer
=================================-->
<!-- Scrolling Up -->
<button type="button" class="scrollingUp scrolling-btn" aria-label="scrollingUp"><i class="fa fa-angle-up"></i></button>
</div>		
<?php wp_footer(); ?>
</body>
</html>
