<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Kitchen Design
 */

if ( is_active_sidebar( 'fc-1' ) || is_active_sidebar( 'fc-2' ) || is_active_sidebar( 'fc-3' ) ) : 
?>
<div id="footer-wrapper">
		<div class="footerarea">
    	<div class="container footer">
        	<div class="footer-row">
            <?php if ( is_active_sidebar( 'fc-1' ) ) : ?>
            <div class="cols-3 widget-column-1">  
              <?php dynamic_sidebar( 'fc-1' ); ?>
            </div><!--end .widget-column-1-->                  
    		<?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-2' ) ) : ?>
            <div class="cols-3 widget-column-2">  
            <?php dynamic_sidebar( 'fc-2' ); ?>
            </div><!--end .widget-column-2-->
            <?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-3' ) ) : ?>    
            <div class="cols-3 widget-column-3">  
            <?php dynamic_sidebar( 'fc-3' ); ?>
            </div><!--end .widget-column-3-->
			<?php endif; ?> 	
			<?php if ( is_active_sidebar( 'fc-4' ) ) : ?>    
            <div class="cols-3 widget-column-4">  
            <?php dynamic_sidebar( 'fc-4' ); ?>
            </div><!--end .widget-column-3-->
			<?php endif; ?>             	         
            <div class="clear"></div>
            </div>
        </div><!--end .container--> 
        </div><!--end .footer-wrapper-->
         <?php endif; ?>
<div id="copyright-area">
<div class="copyright-wrapper">
<div class="container">
     <div class="copyright-txt"><?php echo esc_html('&copy; Copyright '.date('Y').' Kitchen Design All Rights Reserved.');?> <?php bloginfo('name'); ?> <?php esc_html_e('Theme By ','kitchen-design');?><?php if( is_home() && is_front_page()) {?>
        <a href="<?php echo esc_url('https://www.sktthemes.org/');?>" target="_blank"><?php esc_html_e('SKT Themes','kitchen-design'); ?></a>
        <?php } else {?>
          <?php esc_html_e('SKT Themes','kitchen-design'); ?>
        <?php } ?></div>
     <div class="clear"></div>
</div>           
</div>
</div><!--end .footer-wrapper-->
<?php wp_footer(); ?>
</body>
</html>