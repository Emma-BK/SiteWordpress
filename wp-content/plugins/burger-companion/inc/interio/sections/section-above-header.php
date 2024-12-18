<?php  
if ( ! function_exists( 'interio_hdr_search' ) ) :
	function interio_hdr_search() {
		$hs_hdr_search		=	get_theme_mod('hs_hdr_search','1');
		if($hs_hdr_search == '1'){
			?>
			<li class="search-button">
				<button type="button" id="header-search-toggle" class="header-search-toggle" aria-expanded="false" aria-label="<?php echo esc_attr_e('Search Popup','decorme'); ?>"><i class="fa fa-search"></i></button>
				<!--===// Start: Header Search PopUp
					=================================-->
					<div class="header-search-popup">
						<div class="header-search-flex">
							<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>"  aria-label="<?php echo esc_attr_e('Site Search','decorme'); ?>">
								<input type="search" class="form-control header-search-field" placeholder="<?php echo esc_attr_e('Type To Search','decorme'); ?>" name="s" id="search">
								<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
							</form>
							<button type="button" id="header-search-close" class="close-style header-search-close" aria-label="<?php echo esc_attr_e('Search Popup Close','decorme'); ?>"></button>
						</div>
					</div>
				<!--===// End: Header Search PopUp
					=================================-->
				</li>
			<?php } } 

			add_action( 'interio_hdr_search', 'interio_hdr_search');
		endif;


		if ( ! function_exists( 'interio_hdr_cart' ) ) :
			function interio_hdr_cart() {

				$hs_hdr_cart = get_theme_mod( 'hs_hdr_cart','1'); 

				if($hs_hdr_cart == '1' && class_exists( 'WooCommerce' )) {
					?>
					<li class="cart-wrapper">
						<button type="button" class="header-cart"><i class="fa fa-shopping-cart"></i>
							<?php 
							if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
								$count = WC()->cart->cart_contents_count;
								$cart_url = wc_get_cart_url();

								if ( $count > 0 ) {
									?>
									<span><?php echo esc_html( $count ); ?></span>
									<?php 
								}
								else {
									?>
									<span><?php esc_html_e( '0', 'decorme' ); ?></span>
									<?php 
								}
							}
							?>
						</button>
						<!-- Shopping Cart -->
						<div class="shopping-cart">
							<?php get_template_part('woocommerce/cart/mini','cart'); ?>
						</div>
						<!--end shopping-cart -->
					</li>
					<?php	
				} }

				add_action( 'interio_hdr_cart', 'interio_hdr_cart');
			endif;