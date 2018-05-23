<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<div class="general-wrapper">
			<?php /* Start the Loop */ ?>
				<div class="blog-post-container">
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php $check_excerpt = get_the_excerpt();
				if($check_excerpt != null): ?>
				<div class="post-wrapper">
					<h1 class="result-title"><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h1>
					<?php echo "<p class='entry-description'>".get_the_excerpt()."</p>" ?>
					<a class="read-more-btn" href="<?php the_permalink(); ?>">Read More</a>
				</div>

			<?php endif;
				  endwhile; ?>
				
			<?php red_starter_numbered_pagination(); ?>

		<?php endif; ?>
		</div>
			<?php get_sidebar(); ?>
</div>
		
		</main><!-- #main -->
	</section><!-- #primary -->


<?php get_footer(); ?>
