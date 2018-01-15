<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'twentyseventeen' );
		?>
	</button>

	<ul id="top-menu" class="menu">
		<li class="menu-item"><a href="http://sweetsshop.andrewearls.net/">Home</a></li>
		<li class="menu-item"><a href="http://sweetsshop.andrewearls.net/menu/">Menu</a></li>
		<li class="menu-item"><a href="http://sweetsshop.andrewearls.net/about/">About</a></li>
		<li class="menu-item"><a href="http://sweetsshop.andrewearls.net/contact/">Contact</a></li>
	</ul>
	
	<?php
	/**
	--- Original Nav menu ---
		wp_nav_menu( array(
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
		) ); 
	*/
	?>


	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
