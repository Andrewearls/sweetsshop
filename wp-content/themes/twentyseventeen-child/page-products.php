<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php 
				$product = wc_get_product( $post->ID );
				echo $product;
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<!--php get_sidebar(); -->
</div><!-- .wrap -->
<?php get_footer();