<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
	<div class="product">
		<div class="product-single">
			<div class="product-img">
				<?php
				/**
				 * Hook: woocommerce_before_shop_loop_item.
				 *
				 * @hooked woocommerce_template_loop_product_link_open - 10
				 */
				do_action( 'woocommerce_before_shop_loop_item' );
				?>
				<a href="<?php esc_url(the_permalink()); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
				
				<?php if ( $product->is_on_sale() ) : ?>

				<?php echo apply_filters( 'woocommerce_sale_flash', '<div class="sale-ribbon"><span class="tag-line">' . esc_html__( 'Sale', 'decorme' ) . '</span></div>', $post, $product ); ?>
				<?php endif; ?>
				<div class="product-action">			
					<?php

					/**
					 * Hook: woocommerce_after_shop_loop_item.
					 *
					 * @hooked woocommerce_template_loop_product_link_close - 5
					 * @hooked woocommerce_template_loop_add_to_cart - 10
					 */
					do_action( 'woocommerce_after_shop_loop_item' );
					?>
				</div>
			</div>
			<div class="product-content-outer">
				<div class="product-content">
					<div class="pro-rating">
						<?php if ($average = $product->get_average_rating()) : ?>
						<?php echo '<div class="star-rating" title="'.sprintf(__( 'Rated %s out of 5', 'decorme' ), $average).'"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'decorme' ).'</span></div>'; ?>
						<?php endif; ?>
					</div>
					<h3><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h3>
					<div class="price">
						<?php echo $product->get_price_html(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</li>
