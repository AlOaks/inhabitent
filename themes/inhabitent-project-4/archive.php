<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="general-wrapper">
		<?php if ( have_posts() ) : ?>
		<div class="blog-post-container">
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>

			
			<?php while ( have_posts() ) : the_post(); ?>
			
				<div class="post-wrapper">
				<?php
					get_template_part( 'template-parts/content' );
				?>
				</div>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>
			
			
		<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
