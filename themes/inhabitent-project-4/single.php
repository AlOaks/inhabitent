<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<button type="button" id="close-comments">Close Comments</button>
			<div class="general-wrapper">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="blog-post-container">
				<div class="post-wrapper">
			<?php get_template_part( 'template-parts/content', 'single' ); ?>
				<div class="social-buttons">
					<a href="facebook"><i class="fab fa-facebook-f"></i>  Like</a> 
					<a href="facebook"><i class="fab fa-twitter"></i>  Tweet</a> 
					<a href="facebook"><i class="fab fa-pinterest"></i>  Pin</a>
				</div>
			</div>
			
				

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif; ?>
			
			</div>
		<?php endwhile; // End of the loop. ?>
		<?php get_sidebar(); ?>
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
