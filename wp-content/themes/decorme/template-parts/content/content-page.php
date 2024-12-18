<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DecorMe
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-items'); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<figure class="post-image">
			<a href="javascript:void(0);"><?php the_post_thumbnail(); ?></a>
			<div class="post-list">
				<a href="<?php esc_url(the_permalink()); ?>" rel="category tag"><?php the_category(', '); ?></a>
			</div>
		</figure>
	<?php endif; ?>	
	<div class="post-content">
		<div class="post-content-bottom">
			<?php
				if ( is_single() ) :

					the_title('<h5 class="post-title">', '</h5>' );
					
				else:
					
					the_title( sprintf( '<h5 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' );
					
				endif; 
				
				the_content( 
						sprintf( 
							__( 'Read More', 'decorme' ), 
							'<span class="screen-reader-text">  '.esc_html(get_the_title()).'</span>' 
						) 
					);
			?>
		</div>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="post-meta">
				<div class="post-author">
					<?php  $user = wp_get_current_user(); ?>
					<img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" alt="<?php  esc_attr(the_author()); ?>"><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><?php esc_html(the_author()); ?></a>
				</div>
			</div>
		<?php endif; ?>	
	</div>
</article>