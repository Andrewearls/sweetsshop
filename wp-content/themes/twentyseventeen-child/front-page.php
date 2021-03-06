<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php foreach (get_pages(['sort_column' => 'menu_order']) as $post) {
			get_template_part( 'template-parts/page/content', 'front-page-panels');
		} ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
