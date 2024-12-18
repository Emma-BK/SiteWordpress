<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package decorme
 */

get_header(); 
?>
<section id="post-section" class="post-section st-py-default">
	<div class="container">
		<div class="row g-4">
			<div class="<?php echo esc_attr(decorme_post_layout()); ?>">
				<?php 
					$decorme_paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
					$args = array( 'post_type' => 'post','paged'=>$decorme_paged );	
				?>
				<?php if( have_posts() ): ?>
					<?php while( have_posts() ) : the_post(); ?>
						<div class="col-lg-12 mb-4">
							<?php get_template_part('template-parts/content/content','page'); ?>
						</div>
					<?php endwhile; ?>
				<?php else: ?>
					<?php get_template_part('template-parts/content/content','none'); ?>
				<?php endif; ?>
				
				<div class="row">
					<div class="col-12">
						<div class="paginatoin-area">
							<!--  Pagination Start  -->
								<?php								
								// Previous/next page navigation.
								the_posts_pagination( array(
								'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
								'next_text'          => '<i class="fa fa-angle-double-right"></i>',
								) ); ?>
							<!--  Pagination End  -->
						</div>
					</div>
				</div>
			</div>
			<?php  get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
