<?php
/**
 * The template for displaying archive pages.
 * 
 * Template Name: Adventures
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="main-wrapper">
		<?php if ( have_posts() ) : ?>
		<div class="adventure-page-container">
			<header class="page-header">
				<h1 class="adventures-page-title">Latest Adventures</h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>

			<div class="adventure-catalog-container">
			<?php while ( have_posts() ) : the_post(); ?>
			
				<div class="adventure-wrapper">
                        <?php  echo "<img class='adventure-image' src='".the_post_thumbnail(' ')."'/>" ?>
                        <a href=""><h1 class="adventure-title"><?php the_title();?></h1></a>
                        <h3 class="read-entry-button2"><a href="<?php the_permalink(); ?>">Read More</a></h3>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		        </div>
            </div>
        </div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
