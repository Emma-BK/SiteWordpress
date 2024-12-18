<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Kitchen Design
 */
get_header(); 

$hideslide = get_theme_mod('hide_slides', 1);
$secwithcontent = get_theme_mod('hide_home_secwith_content', 1);
$hide_sectiontwo = get_theme_mod('hide_sectiontwo', 1);
$hide_home_third_content = get_theme_mod('hide_home_third_content', 1);
$hide_sectionfour = get_theme_mod('hide_sectionfour', 1);
$hide_home_five_content = get_theme_mod('hide_home_five_content', 1);

if (!is_home() && is_front_page()) { 
if( $hideslide == '') { ?>
<!-- Slider Section -->
<?php 
$slidepages = array();
for($sld=7; $sld<10; $sld++) { 
	$mod = absint( get_theme_mod('page-setting'.$sld));
    if ( 'page-none-selected' != $mod ) {
      $slidepages[] = $mod;
    }	
} 
if( !empty($slidepages) ) :
$args = array(
      'posts_per_page' => 3,
      'post_type' => 'page',
      'post__in' => $slidepages,
      'orderby' => 'post__in'
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :	
	$sld = 7;
?>
<section id="home_slider">
  <div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
		<?php
        $i = 0;
        while ( $query->have_posts() ) : $query->the_post();
          $i++;
          $kitchen_design_slideno[] = $i;
          $kitchen_design_slidetitle[] = get_the_title();
		  $kitchen_design_slidedesc[] = get_the_excerpt();
          $kitchen_design_slidelink[] = esc_url(get_permalink());
          ?>
          <img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $i ); ?>" />
          <?php
        $sld++;
        endwhile;
          ?>
    </div>
        <?php
        $k = 0;
        foreach( $kitchen_design_slideno as $kitchen_design_sln ){ ?>
    <div id="slidecaption<?php echo esc_attr( $kitchen_design_sln ); ?>" class="nivo-html-caption">
      <div class="slide_info">
        <h2><?php echo esc_html($kitchen_design_slidetitle[$k] ); ?></h2>
        <p><?php echo esc_html($kitchen_design_slidedesc[$k] ); ?></p>
        <div class="clear"></div>
        <a class="slide_more" href="<?php echo esc_url($kitchen_design_slidelink[$k] ); ?>">
          <?php esc_html_e('Read More', 'kitchen-design');?>
          </a>
      </div>
    </div>
 	<?php $k++;
       wp_reset_postdata();
      } ?>
<?php endif; endif; ?>
  </div>
  <div class="clear"></div>
</section>
<?php } } 
	if(!is_home() && is_front_page()){ 
	if( $secwithcontent == '') {
?>
<section id="sectionone">
	<div class="center">
        <div class="home_section1_content">
        	<?php
            	$section1_title = get_theme_mod('section1_title');
			?>
            <?php if(!empty($section1_title)){?>
            <div class="section1_title"><h2><?php echo esc_html($section1_title); ?></h2></div>
			<?php } ?>
            <div class="section1-row">
			<div class="designboxrow"> 
			<?php 
                for($l=1; $l<5; $l++) { 
                if( get_theme_mod('sec-column-left'.$l,false)) {
                $section1block = new WP_query('page_id='.get_theme_mod('sec-column-left'.$l,true)); 
                while( $section1block->have_posts() ) : $section1block->the_post(); 
            ?>   
            <div class="designbox">
            	<a href="<?php echo esc_url( get_permalink() ); ?>">
                <div class="designboxbg">
					<?php 
                        if( has_post_thumbnail() ) {
                    ?>
                    <div class="designs-thumb">
                        <?php the_post_thumbnail('full');  ?>
                    </div>
                    <?php } ?>
                    <div class="designbox-content">
                        <h3><?php the_title(); ?></h3>
                    </div>
                </div>
                </a>
            </div>
        <?php endwhile; wp_reset_postdata(); 
           }} 
        ?>       
                    </div>         
            </div>
            <div class="clear"></div>
        </div>
    </div>
</section>
<?php }}  
if (!is_home() && is_front_page()) { 
if( $hide_sectiontwo == '') { ?>
<section class="hometwo_section_area">
    	<div class="center">
             <div class="hometwo-row">
             	 <div class="hometwo-columns">
				<?php
					$sectwotop = new WP_query('page_id='.get_theme_mod('page-column-left',true)); 
					while( $sectwotop->have_posts() ) : $sectwotop->the_post(); 
                ?>
                 	<h2><?php the_title(); ?></h2>
                    <div class="hometwo-columns-desc">
                    	<?php the_content(); ?>
                    </div>
				<?php  endwhile; wp_reset_postdata(); ?>                 
                    <div class="hometwo-column-row">
			<?php 
                for($l=1; $l<4; $l++) { 
                if( get_theme_mod('page-column-left'.$l,false)) {
                $sectwoblocks = new WP_query('page_id='.get_theme_mod('page-column-left'.$l,true)); 
                while( $sectwoblocks->have_posts() ) : $sectwoblocks->the_post(); 
            ?>                       
                    	<div class="hometwo-service-cols">
                        	<h3 class="hometwo-service-column-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php if( has_post_thumbnail() ) { the_post_thumbnail('full'); } ?></a><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
                            <div class="hometwo-service-column-desc">
                            	<p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
						<?php endwhile; wp_reset_postdata(); 
                           }} 
                        ?>
                        <div class="clear"></div>
                        <?php
						$section2_button_title = get_theme_mod('section2_button_title');
						$section2_button_link = get_theme_mod('section2_button_link');
						if(!empty($section2_button_title)){
						if(!empty($section2_button_link)){?>
                        <a class="hometwo-block-button" href="<?php echo esc_url($section2_button_link); ?>">
						<?php }  
							echo esc_html($section2_button_title); ?><?php if(!empty($section2_button_link)){?></a><?php } 
							} 
						?>
                    </div>
                 </div>
                 <div class="hometwo-columns">
                 					<?php 
                        $rightimage = get_theme_mod('image_control_right');
                        $right_img_link = get_theme_mod('right_img_link');
                    ?>   
                 	<div class="hometwo-columns-right-inner <?php if(empty($rightimage)){?>nothmb<?php } ?>">
                        	<div class="hometwopatternbg"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/patternbg.png"></div>
                            <div class="hometwocolumnimage">
                    <?php if(!empty($rightimage)){?> 
                    <img src="<?php echo esc_url($rightimage); ?>">
                    <?php } ?>
					<?php if(!empty($right_img_link)){?>
                    <a href="<?php echo esc_url($right_img_link);?>">
                        <div class="hometwoicon-button"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/video-icon.png"></div>
                    </a>
					<?php } ?>
</div>
                    </div>
                 </div>
                 <div class="clear"></div>
             </div>
        </div>
    </section>
<?php } } ?>
<?php if (!is_home() && is_front_page()) {
	  if( $hide_home_third_content == '' ){	
?>
<section class="home3_section_area">
  <div class="center">
  	<div class="home3-area">
	<?php 
        $section3_title = get_theme_mod('section3_title');
        $section3_button1_link = get_theme_mod('section3_button1_link');
    ?>   
  	<?php if(!empty($section3_button1_link)){?>
 	<a href="<?php echo esc_url($section3_button1_link);?>" class="sec3modal-trigger" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/sec3-video-icon.png"></a>
    <?php } ?>
    <?php if(!empty($section3_title)){?>
 	<div class="sec3-desc">
    	<p><?php echo esc_html($section3_title); ?></p>
    </div>  
    <?php } ?>
    </div>
  </div>
</section>
<?php } } ?>
<div class="clear"></div>
<div class="container">
     <div class="page_content">
      <?php 
	if ( 'posts' == get_option( 'show_on_front' ) ) {
    ?>
    <section class="site-main">
      <div class="blog-post">
        <?php
                    if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) : the_post();
                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
                            get_template_part( 'content', get_post_format() );
                        endwhile;
                        // Previous/next post navigation.
						the_posts_pagination( array(
							'mid_size' => 2,
							'prev_text' => esc_html__( 'Back', 'kitchen-design' ),
							'next_text' => esc_html__( 'Next', 'kitchen-design' ),
						) );
                    else :
                        // If no content, include the "No posts found" template.
                         get_template_part( 'no-results', 'index' );
                    endif;
                    ?>
      </div>
      <!-- blog-post --> 
    </section>
    <?php
} else {
    ?>
	<section class="site-main">
      <div class="blog-post">
        <?php
                    if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) : the_post();
                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
							 ?>
                             <header class="entry-header">           
            				<h1><?php the_title(); ?></h1>
                    		</header>
                             <?php
                            the_content();
                        endwhile;
                        // Previous/next post navigation.
						the_posts_pagination( array(
							'mid_size' => 2,
							'prev_text' => esc_html__( 'Back', 'kitchen-design' ),
							'next_text' => esc_html__( 'Next', 'kitchen-design' ),
						) );
                    else :
                        // If no content, include the "No posts found" template.
                         get_template_part( 'no-results', 'index' );
                    endif;
                    ?>
      </div>
      <!-- blog-post --> 
    </section>
	<?php
}
	?>
    <?php get_sidebar();?>
    <div class="clear"></div>
  </div><!-- site-aligner -->
</div><!-- content -->
<?php get_footer(); ?>