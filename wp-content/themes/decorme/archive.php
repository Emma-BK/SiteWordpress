<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DecorMe
 */

get_header();
?>
<section id="post-section" class="post-section st-py-default">
	<div class="container">
		<div class="row g-4">
			<div class="<?php echo esc_attr(decorme_post_layout()); ?>">
				
				<?php if( have_posts() ): ?>
				
					<?php while( have_posts() ) : the_post(); ?>
					
						<div class="col-lg-12 mb-4">
							<?php get_template_part('template-parts/content/content','page');	?>
						</div>

					<?php endwhile; ?>
					
				<?php else: ?>
				
					<?php get_template_part('template-parts/content/content','none'); ?>
					
				<?php endif; ?>
			</div>
			<?php  get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
