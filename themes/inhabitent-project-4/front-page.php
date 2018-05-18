<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="hero-wrapper"></div>
				<img class="about-hero-image" src="<?php the_post_thumbnail(); ?>
			
		<div class="round-logo"></div>

		<?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3  );
   $products = new WP_Query( $args ); // instantiate our object?>

<div class="latest-news">
<?php if ( $products->have_posts() ) : ?>
   		<?php while ( $products->have_posts() ) : $products->the_post(); ?>
	<?php 
		?>
		<div class="journal-news-preview"> <?php
		echo "<img class='post-image-homepage' src='".the_post_thumbnail('medium')."'/>"; ?>
		<div class='post-date-comments'>
			<?php 
		echo "<p class='post-date-homepage'>".get_the_date()."</p>";
		echo "<p class='post-comments-count'>".comments_number()."</p>"; ?>
		<h3 class="read-entry-button"><a href=" <?php the_permalink(); ?>">Read Entry</a></h3>
		</div> 
			<?php
		echo "<h3 class='post-title-homepage'>".get_the_title()."</h3>"; 
			?>
		</div>
		   <?php endwhile; ?>
		   
	<?php wp_reset_postdata(); ?>
	
	<?php else : ?>

	  <h2>Nothing found!</h2>
	  
<?php endif; ?>
</div>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>