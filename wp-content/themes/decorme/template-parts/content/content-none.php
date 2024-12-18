<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DecorMe
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-items'); ?>>
	<div class="blog-wrapup">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p class="pt-5"><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'decorme' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
		<?php elseif ( is_search() ) : ?>
			<p class="pt-5"><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'decorme' ); ?></p>
		<?php else : ?>
			<p class="pt-5"><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'decorme' ); ?></p>
		<?php endif; ?>
	</div>
</article>
