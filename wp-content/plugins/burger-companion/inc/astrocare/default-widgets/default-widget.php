<?php
$theme = wp_get_theme(); // gets the current theme
if( 'Astrocare' == $theme->name){
	$footer_logo = BURGER_COMPANION_PLUGIN_URL .'inc/astrocare/images/general/icon-footer.png';
}	
$activate = array(
	'astrocare-sidebar-primary' => array(
		'search-1',
		'recent-posts-1',
		'archives-1',
	),
	'astrocare-footer-widget-area' => array(
		'text-1',
		'categories-1',
		'archives-1',
		'search-1',
	)
);
/* the default titles will appear */
update_option('widget_text', array(
	1 => array(
		'text'=>'<aside class="footer-widget about-widget">
		<div class="text_widget">
		<div class="ft_mail-icon">
		<a href="'.esc_url('javascript:void(0)').'" class="ft-mail-btn">
		<img src="'.esc_url($footer_logo).'" alt="astrocare">
		</a>
		</div>
		<h5 class="about-title">Free Consultation</h5>
		<p class="about-text">Lorem ipsum dolor sit adipising cumsan lacus facilisis.</p>
		<form class="footer-newsletter">
		<input class="form-control mb-25" type="email" placeholder="email address"> 
		<button type="submit" class="vs-btn mask-style1">
		<i class="fa fa-paper-plane"></i>
		</button>
		</form>
		<p class="about-text">We Are Here To Help You</p>
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
$MediaId = get_option('astrocare_media_id');
set_theme_mod( 'custom_logo', $MediaId[0] );