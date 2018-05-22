<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="general-wrapper">
		<?php if ( have_posts() ) : ?>
		<div class="blog-post-container">
			<?php if ( is_home() && ! is_front_page() ) : ?>
			
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="post-wrapper">
				<?php get_template_part( 'template-parts/content' ); ?>
			</div>	
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		</div>
		<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
