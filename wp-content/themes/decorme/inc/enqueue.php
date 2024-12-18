<?php
 /**
 * Enqueue scripts and styles.
 */
function decorme_scripts() {
	
	// Styles	
	wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/assets/css/bootstrap.min.css');
	
	wp_enqueue_style('owl-carousel-min',get_template_directory_uri().'/assets/css/owl.carousel.min.css');
	
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/fonts/font-awesome/css/font-awesome.min.css');
	
	wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.min.css');
	
	wp_enqueue_style('decorme-editor-style',get_template_directory_uri().'/assets/css/editor-style.css');

	wp_enqueue_style('decorme-menus', get_template_directory_uri() . '/assets/css/classic-menu.css');

	wp_enqueue_style('decorme-widgets',get_template_directory_uri().'/assets/css/widgets.css');

	wp_enqueue_style('decorme-main', get_template_directory_uri() . '/assets/css/main.css');

	wp_enqueue_style('decorme-woo', get_template_directory_uri() . '/assets/css/woo.css');
	
	wp_enqueue_style('decorme-media-query', get_template_directory_uri() . '/assets/css/responsive.css');
	
	wp_enqueue_style( 'decorme-style', get_stylesheet_uri() );
	
	// Scripts
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), false, true);
	
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
	
	wp_enqueue_script('mo', get_template_directory_uri() . '/assets/js/mo.min.js', array('jquery'), false, true);

	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), false, true);
	
	wp_enqueue_script('wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), false, false, true);

	wp_enqueue_script('decorme-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true);
	
	wp_enqueue_script('decorme-theme-js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), false, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'decorme_scripts' );

//Admin Enqueue for Admin
function decorme_admin_enqueue_scripts(){
	wp_enqueue_style('decorme-admin-style', get_template_directory_uri() . '/inc/customizer/assets/css/admin.css');
	wp_enqueue_script( 'decorme-admin-script', get_template_directory_uri() . '/inc/customizer/assets/js/decorme-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'decorme-admin-script', 'decorme_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'decorme_admin_enqueue_scripts' );