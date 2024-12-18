<?php 
	$decorme_hs_breadcrumb			= get_theme_mod('hs_breadcrumb','1');
	$decorme_breadcrumb_img1		= get_theme_mod('breadcrumb_img1',esc_url(get_template_directory_uri() .'/assets/images/light_1.png')); 
	$decorme_breadcrumb_img2		= get_theme_mod('breadcrumb_img2',esc_url(get_template_directory_uri() .'/assets/images/light_2.png')); 
	$decorme_breadcrumb_img3		= get_theme_mod('breadcrumb_img3',esc_url(get_template_directory_uri() .'/assets/images/light_3.png')); 
	$decorme_breadcrumb_img4		= get_theme_mod('breadcrumb_img4',esc_url(get_template_directory_uri() .'/assets/images/light_4.png')); 
	$decorme_breadcrumb_img5		= get_theme_mod('breadcrumb_img5',esc_url(get_template_directory_uri() .'/assets/images/light_5.png')); 
	$decorme_breadcrumb_img6		= get_theme_mod('breadcrumb_img6',esc_url(get_template_directory_uri() .'/assets/images/light_6.png')); 

if($decorme_hs_breadcrumb == '1') {	
?>
<section id="breadcrumb-section" class="breadcrumb-section">
	<div class="breadcrumb-shapes">
		<div class="breadcrumb-shapes-left">
			<?php if(!empty($decorme_breadcrumb_img1)): ?>
				<img src="<?php echo esc_url($decorme_breadcrumb_img1); ?>" alt="<?php echo esc_attr_e('Decor Me','decorme'); ?>">
			<?php endif; ?>
			<?php if(!empty($decorme_breadcrumb_img2)): ?>
				<img src="<?php echo esc_url($decorme_breadcrumb_img2); ?>" alt="<?php echo esc_attr_e('Decor Me','decorme'); ?>">
			<?php endif; ?>
			<?php if(!empty($decorme_breadcrumb_img3)): ?>
				<img src="<?php echo esc_url($decorme_breadcrumb_img3); ?>" alt="<?php echo esc_attr_e('Decor Me','decorme'); ?>">
			<?php endif; ?>
		</div>
		<div class="breadcrumb-shapes-right">
			<?php if(!empty($decorme_breadcrumb_img4)): ?>
				<img src="<?php echo esc_url($decorme_breadcrumb_img4); ?>" alt="<?php echo esc_attr_e('Decor Me','decorme'); ?>">
			<?php endif; ?>
			<?php if(!empty($decorme_breadcrumb_img5)): ?>
				<img src="<?php echo esc_url($decorme_breadcrumb_img5); ?>" alt="<?php echo esc_attr_e('Decor Me','decorme'); ?>">
			<?php endif; ?>
			<?php if(!empty($decorme_breadcrumb_img6)): ?>
				<img src="<?php echo esc_url($decorme_breadcrumb_img6); ?>" alt="<?php echo esc_attr_e('Decor Me','decorme'); ?>">
			<?php endif; ?>
		</div>
	</div>
	<div class="breadcrumb-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-12 mx-auto">
					<div class="breadcrumb-inner">
						<div class="row align-items-center">
							<div class="col-md-6 col-12 text-md-left text-center">
								<div class="breadcrumb-title">
									<h5 class="mb-0"><i class="fa fa-home"></i> <?php decorme_breadcrumb_title();?></h5>
								</div>
							</div>
							<div class="col-md-6 col-12 text-md-right text-center">
								<ol class="breadcrumb-list">
									<?php decorme_breadcrumbs();?>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }else{ ?>
<section id="breadcrumb-section" class="breadcrumb-section" style="padding-bottom: 200px;">
</section>
<?php } ?>	