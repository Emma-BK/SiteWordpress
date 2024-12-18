<?php  
	$decorme_blog_hs 			= get_theme_mod('blog_hs','1');
	$decorme_blog_title			= get_theme_mod('blog_title'); 
	$decorme_blog_subtitle		= get_theme_mod('blog_subtitle'); 
	$decorme_blog_description	= get_theme_mod('blog_description'); 
	$decorme_blog_display_num	= get_theme_mod('blog_display_num','3'); 
	if($decorme_blog_hs=='1'):
?>		
<section id="post-section" class="post-section post-home st-py-default">
	<div class="container">
		<?php if(!empty($decorme_blog_title) || !empty($decorme_blog_subtitle) || !empty($decorme_blog_description)): ?>
			<div class="row">
				<div class="col-lg-10 col-12 mx-lg-auto mb-5 text-center">
					<div class="theme-heading wow fadeInUp">
						<?php if(!empty($decorme_blog_title)): ?>
							<span class="placeholder"><?php echo wp_kses_post($decorme_blog_title); ?></span>
						<?php endif; ?>
						
						<?php if(!empty($decorme_blog_subtitle)): ?>
							<h5 class="text-primary"><?php echo wp_kses_post($decorme_blog_subtitle); ?></h5>
						<?php endif; ?>
						
						<?php if(!empty($decorme_blog_description)): ?>
							<h2 class="mb-0"><span class="font-weight-normal"><?php echo wp_kses_post($decorme_blog_description); ?></h2>
						<?php endif; ?>
						
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="row g-4">
			<?php 	
				$decorme_blogs_args = array( 'post_type' => 'post', 'posts_per_page' => $decorme_blog_display_num,'post__not_in'=>get_option("sticky_posts")) ; 	
				$decorme_blog_wp_query = new WP_Query($decorme_blogs_args);
					if($decorme_blog_wp_query)
					{	
					while($decorme_blog_wp_query->have_posts()):$decorme_blog_wp_query->the_post();
			?>
				<div class="col-lg-4 col-md-6 col-12">
					<?php get_template_part('template-parts/content/content','page');	?>
				</div>
			<?php	endwhile; }	wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<?php endif; ?>