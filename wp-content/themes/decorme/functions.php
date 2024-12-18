<?php
if ( ! function_exists( 'decorme_setup' ) ) :
function decorme_setup() {

// Root path/URI.
define( 'DECORME_PARENT_DIR', get_template_directory() );
define( 'DECORME_PARENT_URI', get_template_directory_uri() );

// Root path/URI.
define( 'DECORME_PARENT_INC_DIR', DECORME_PARENT_DIR . '/inc');
define( 'DECORME_PARENT_INC_URI', DECORME_PARENT_URI . '/inc');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'custom-header' );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'decorme' );
		
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'decorme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	
	add_theme_support('custom-logo');

	/*
	 * WooCommerce Plugin Support
	 */
	add_theme_support( 'woocommerce' );
	
	// Gutenberg wide images.
	add_theme_support( 'align-wide' );
	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/css/editor-style.css', decorme_google_font() ) );
	
	//Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'decorme_custom_background_args', array(
		'default-color' => '161422',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'decorme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function decorme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'decorme_content_width', 1170 );
}
add_action( 'after_setup_theme', 'decorme_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function decorme_widgets_init() {
	
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'decorme' ),
		'id' => 'decorme-sidebar-primary',
		'description' => __( 'The Primary Widget Area', 'decorme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );

	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area 1', 'decorme' ),
		'id' => 'decorme-footer-widget-area1',
		'description' => __( 'The Footer Widget Area', 'decorme' ),
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area 2', 'decorme' ),
		'id' => 'decorme-footer-widget-area2',
		'description' => __( 'The Footer Widget Area', 'decorme' ),
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area 3', 'decorme' ),
		'id' => 'decorme-footer-widget-area3',
		'description' => __( 'The Footer Widget Area', 'decorme' ),
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => __( 'WooCommerce Widget Area', 'decorme' ),
		'id' => 'decorme-woocommerce-sidebar',
		'description' => __( 'This Widget area for WooCommerce Widget', 'decorme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
}
add_action( 'widgets_init', 'decorme_widgets_init' );

/**
 * All Styles & Scripts.
 */
require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Nav Walker fo Bootstrap Dropdown Menu.
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';


/**
 * Customizer additions.
 */
 require_once get_template_directory() . '/inc/decorme-customizer.php';