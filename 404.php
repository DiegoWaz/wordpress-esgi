<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage foodNight2
 * @since Food by Night
 */


get_header(); ?>


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'foodByNight' ); ?></h1>
			</header>

			<div class="page-content">
				<p><?php _e( 'Page introuvable' ); ?></p>

				<?php get_search_form(); ?>
			</div><!-- .page-content -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
