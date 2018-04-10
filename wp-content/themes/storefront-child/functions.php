<?php

/*------ Storefront Product Search ------*/

function storefront_product_search()
{
	if ( storefront_is_woocommerce_activated() ) { ?>
			<div class="site-search">
				<?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
			</div>
		<?php
	}
}



/*------ Primary Nav ------*/

	function storefront_primary_navigation() {
		?>
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'storefront' ); ?>">
		<button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span><?php echo esc_attr( apply_filters( 'storefront_menu_toggle_text', __( 'Menu', 'storefront' ) ) ); ?></span></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location'	=> 'primary',
					'container_class'	=> 'primary-navigation',
					)
			);

			wp_nav_menu(
				array(
					'theme_location'	=> 'handheld',
					'container_class'	=> 'handheld-navigation',
					)
			);
			
			?>

		</nav><!-- #site-navigation -->
		<?php
	}

/*------ Footer ------*/
add_action('init', 'custom_remove_footer_credit', 10);

function custom_remove_footer_credit () {
	remove_action('storefront_footer', 'storefront_credit', 20 );
	add_action('storefront_footer', 'custom_storefront_credit', 20);
}

function custom_storefront_credit() {
	?>
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<div class="social-links">
		<div class="title">
			Social Links:
		</div>
		<div class="icons">
			<a href="#">
				<i class="fab fa-facebook-square fa-5x"></i>
			</a>
			<a href="#">
				<i class="fab fa-instagram fa-5x"></i>
			</a>
			<a href="#">
				<i class="fab fa-twitter-square fa-5x"></i>
			</a>	
		</div>	
	</div>
	<div class="site-info">
	Web design by &copy; nowwerecooking.io <?php echo get_the_date("Y"); ?>
	</div><!-- .site-info -->
	<?php
}


