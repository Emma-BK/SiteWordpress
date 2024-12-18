<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package DecorMe
 */

get_header();
?>
<section id="section-404" class="section-404 page404_one st-py-default shapes-section">
	<div class="container">
		<div class="row wow fadeInUp">
			<div class="col-lg-9 col-12 text-center mx-auto">
				<div class="card-404">	
						<h1><?php echo esc_html_e('4','decorme'); ?><span class="circle"></span><?php echo esc_html_e('4','decorme'); ?></h1>
						
						<h2><?php echo esc_html_e('Oops..!','decorme'); ?></h2>
							
						<p><?php echo esc_html_e("We're sorry,<br>The page you were looking for doesn't exist anymore.",'decorme'); ?></p>
							
						<div class="card-404-btn mt-5">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary"><?php echo esc_html_e('Back to Home','decorme'); ?></a>
						</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="lg-shape pot"><img src="<?php echo esc_url(get_template_directory_uri() .'/assets/images/clipArt/pot.png'); ?>"></div>
	<div class="lg-shape chair"><img src="<?php echo esc_url(get_template_directory_uri() .'/assets/images/clipArt/chair.png'); ?>"></div>
</section>
<?php get_footer(); ?>
