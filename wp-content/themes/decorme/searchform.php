<?php
/**
 * The template for displaying search form.
 *
 * @package     DecorMe
 * @since       1.0
 */
?>
<form class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" placeholder="<?php esc_attr_e( 'Search …', 'decorme' ); ?>" name="s" class="search-field">
	<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
</form>