<?php
//about theme info
add_action( 'admin_menu', 'kitchen_design_abouttheme' );
function kitchen_design_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'kitchen-design'), esc_html__('About Theme', 'kitchen-design'), 'edit_theme_options', 'kitchen_design_guide', 'kitchen_design_mostrar_guide');   
} 
//guidline for about theme
function kitchen_design_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_attr_e('Theme Information', 'kitchen-design'); ?>
		   </div>
          <p><?php esc_html_e('Kitchen Design template deals with interior design, utensils, modular, furniture, interior, carpenter, handyman, gas, stoves, microwave, architect, home services, construction and contractor consulting, dining Room, exterior, living room, master bedroom, residential, commercial, hospital, cottage, pent house, bungalow, false ceiling, vitrified tiles, wall hangings, decoration, gift shop, cards, flowers and novelty items. It is multipurpose template and comes with a ready to import Elementor template plugin as add on which allows to import 150+ design templates for making use in home and other inner pages. Use it to create any type of business, personal, blog and eCommerce website. It is fast, flexible, simple and fully customizable. WooCommerce ready designs.','kitchen-design'); ?></p>
		  <a href="<?php echo esc_url(KITCHEN_DESIGN_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(KITCHEN_DESIGN_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'kitchen-design'); ?></a> | 
				<a href="<?php echo esc_url(KITCHEN_DESIGN_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'kitchen-design'); ?></a> | 
				<a href="<?php echo esc_url(KITCHEN_DESIGN_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'kitchen-design'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(KTCHEN_DESIGN_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>