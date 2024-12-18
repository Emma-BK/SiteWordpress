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
		<div class="row g-5">
			<div class="<?php echo esc_attr(decorme_post_layout()); ?> mx-auto">
					<?php if( have_posts() ): ?>
						<?php while( have_posts() ): the_post(); ?>
							<?php get_template_part('template-parts/content/content','page'); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				<?php comments_template( '', true ); // show comments  ?>
			</div>
			<?php  get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
