<?php decorme_header_image();  ?>
<!--===// Start: Main Header
=================================-->
<header id="main-header" class="main-header header-four">
	<!--===// Start: Navigation Wrapper
	=================================-->
	<div class="navigation-wrapper">
		<!--===// Start: Main Desktop Navigation
		=================================-->
		<div class="main-navigation-area d-none d-lg-block">
			<div class="main-navigation <?php echo esc_attr(decorme_sticky_menu()); ?>">
				<div class="row-top">
					<div class="container">
						<div class="row">
							<div class="col-5 my-auto">
								<div class="main-menu-right main-left">
									<?php do_action('decorme_hdr_contact_info'); ?>
								</div>
							</div>
							<div class="col-2 my-auto logo-middle">
								<div class="logo">
									<?php decorme_logo_site_ttl_description(); ?>
								</div>
							</div>
							<div class="col-5 my-auto">
								<div class="main-menu-right main-right">
									<?php do_action('decorme_hdr_social'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row-bottom">
					<div class="container">
						<div class="row">
							<nav class="navbar-area">
								<div class="main-navbar">
									<?php decorme_header_menu_navigation(); ?>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--===// End:  Main Desktop Navigation
		=================================-->
		<!--===// Start: Main Mobile Navigation
		=================================-->
		<div class="main-mobile-nav <?php echo esc_attr(decorme_sticky_menu()); ?>">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="main-mobile-menu">
							<div class="mobile-logo">
								<div class="logo">
									<?php decorme_logo_site_ttl_description(); ?>
								</div>
							</div>
							<div class="menu-collapse-wrap">
								<div class="hamburger-menu">
									<button type="button" class="menu-collapsed" aria-label="<?php esc_attr_e( 'Menu Collaped', 'decorme' ); ?>">
									<div class="top-bun"></div>
									<div class="meat"></div>
									<div class="bottom-bun"></div>
									</button>
								</div>
							</div>
							<div class="main-mobile-wrapper">
								<div id="mobile-menu-build" class="main-mobile-build">
									<button type="button" class="header-close-menu close-style" aria-label="<?php esc_attr_e( 'Header Close Menu', 'decorme' ); ?>"></button>
								</div>
								<div class="main-mobile-overlay" tabindex="-1"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--===// End: Main Mobile Navigation
		=================================-->
	</div>
	<!--===// End: Navigation Wrapper
	=================================-->
</header>
<!-- End: Main Header
=================================-->