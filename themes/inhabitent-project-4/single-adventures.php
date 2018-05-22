<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="general-wrapper">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="blog-post-container">
				<div class="post-wrapper">
                <img class="about-hero-image" src=<?php the_post_thumbnail(); ?>
                <h1 class="adventure-title"><?php the_title(); ?></h1>
                <p class"adventure-author">by <?php the_author(); ?></p>
                <p class="adventure-content"><?php the_content(); ?></p>
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
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
