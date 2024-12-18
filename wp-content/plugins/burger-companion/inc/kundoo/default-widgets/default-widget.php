<?php
$theme = wp_get_theme(); // gets the current theme
if( 'Kundoo' == $theme->name){
	$footer_logo = BURGER_COMPANION_PLUGIN_URL .'inc/kundoo/images/logo.png';
}	
$activate = array(
	'kundoo-sidebar-primary' => array(
		'search-1',
		'recent-posts-1',
		'archives-1',
	),
	'kundoo-footer-widget-area' => array(
		'text-1',
		'categories-1',
		'archives-1',
		'search-1',
	)
);
/* the default titles will appear */
update_option('widget_text', array(
	1 => array('title' => 'About Company',
		'text'=>'<aside class="widget widget_text">
		<div class="textwidget">
		<div class="logo"><a><img src="'.$footer_logo.'" alt="kundoo" /></a></div>
		The future fast approaching, and the industry is on the precipice of dramatic change
		<aside class="widget widget-contact">
		<div class="contact-area">
		<div class="contact-icon">
		<div class="contact-corn"></div>
		</div>
		<div class="contact-info">
		<p class="text"><a href="tel:+123 888 9999">+123 888 9999</a></p>
		</div>
		</div>
		<div class="contact-area">
		<div class="contact-icon">
		<div class="contact-corn"></div>
		</div>
		<div class="contact-info">
		<p class="text"><a href="mailto:Support@rstheme.com">Support@rstheme.com</a></p>
		</div>
		</div>
		<div class="contact-area">
		<div class="contact-icon">
		<div class="contact-corn"></div>
		</div>
		<div class="contact-info">
		<p class="text"><a>374 William S Canning Blvd, USA</a></p>
		</div>
		</div>
		</aside><a class="btn btn-primary theme-btn">Live Chat <i class="fa fa-headphones"></i>
		</a>
		</div>
		</aside>'),        
	2 => array('title' => 'Recent Posts'),
	3 => array('title' => 'Categories'), 
));

update_option('widget_categories', array(
	1 => array('title' => 'Categories'), 
	2 => array('title' => 'Categories')));

update_option('widget_archives', array(
	1 => array('title' => 'Archives'), 
	2 => array('title' => 'Archives')));

update_option('widget_search', array(
	1 => array('title' => 'Search'), 
	2 => array('title' => 'Search')));	

update_option('sidebars_widgets',  $activate);
$MediaId = get_option('kundoo_media_id');
set_theme_mod( 'custom_logo', $MediaId[0] );