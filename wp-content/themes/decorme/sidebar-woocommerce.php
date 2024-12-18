<?php
/**
 * side bar template
 */
?>
<?php if ( ! is_active_sidebar( 'decorme-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 col-md-12 col-12">
	<div class="sidebar">
		<?php dynamic_sidebar('decorme-woocommerce-sidebar'); ?>
	</div>
</div>