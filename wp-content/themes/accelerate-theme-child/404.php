<?php
/**
 * The template for displaying all pages 
 *
 * This is the template that displays 404 page
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			
			<header>
				<h2 class="page-title"><?php _e( 'Page Not Found', 'accelerate-theme-child' ); ?></h2>
			</header>
			<div class='page-404'>
			</div>
			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'Oops! This is somewhat embarrassing, now you know who does the real work?', 'accelerate-theme-child' ); ?></h2>
					<p><?php _e( 'It looks like you maybe lost. Try a search?', 'accelerate-theme-child' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

