<?php
/**
 * The template for displaying the ABOUT PAGE
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="page-about">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='aboutpage-hero'>
				<!-- Use what you enter in the content box in the admin to overlay on top of the image instead of hard coding text -->
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	</div>
</section><!-- .page-about -->

	<div id="primary" class="site-content">
		<div id="content" role="main">
				<div class="our-services">
				<!-- use a custom field in your about page to output your h4 and your text -->
						<h4>Our Services</h4>
						<p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>
				</div>
				
		<?php query_posts('posts_per_page=4 & post_type=services & order=ASC'); ?>
			<?php while ( have_posts() ) : the_post();
				$image = get_field('image');
				$services = get_field ('services');
				$size = "medium";  
				?>
				
			<article class="page-about-services">
				
				<div class="page-about-images">
					<a href="<?php the_permalink(); ?>">
					<?php if($image) {
						echo wp_get_attachment_image($image,$size);
					} ?>
					</a>
				</div>		
				
				<aside class="page-about-sidebar">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php echo $services; ?></p>
					<?php the_excerpt(); ?>
						
				</aside>	
								
			</article>			
			<?php endwhile; ?>
		

			<?php wp_reset_query(); ?>
                 
						<section class="contact">
							<!-- Again -you can use a custom field on your About page to generate the text of your h3 -->
							<h3>Interested in working with us?</h3>
								<a class="button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
						</section>
				
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>