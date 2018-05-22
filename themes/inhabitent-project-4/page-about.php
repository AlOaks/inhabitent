<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: About
 * 
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<h1 class="about-main-title"><?php the_title(); ?></h1>
				<div class="hero-wrapper"></div>
				<img class="about-hero-image" src=<?php the_post_thumbnail(); ?>
				
				<div class="the-content">
				<?php the_content(); ?>
				</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
