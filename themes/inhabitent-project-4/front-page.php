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
				<div class="about-hero-image"><?php the_post_thumbnail(); ?></div>		
		<div class="round-logo"></div>
		<div class="shop-frontpage">
			<h1 class="shop-title-front">Shop Stuff</h1>
				<?php
					$terms = get_terms( array(
						'taxonomy' => 'product_type',
						'object_ID' => 'id',
						'hide_empty' => true,
					));

					foreach ($terms as $term) :
					?>
						<div class="category-container">
							<img class="category-icon" src=<?php echo get_template_directory_uri(). '/images/product-type-icons/'.$term->slug.'.svg'; ?> ></img>
							<p class="category-description"><?php echo $term->description; ?></p>
							<a href="<?php get_term_link($terms); ?>"><div class="shop-category do"><?php echo $term->name; ?> Stuff</div></a>
						</div>
					<?php

					endforeach;

				?>
		</div>
		<?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3  );
   $args2 = array( 'post_type' => 'adventures', 'order' => 'DSC', 'posts_per_page' => 4  );
   $products = new WP_Query( $args ); // instantiate our object
   $adventures = new WP_Query( $args2 );
   ?>

<!-- NEWS -->

<div class="latest-news">
<h1 class="journal-title-front">Inhabitent journal</h1>
<?php if ( $products->have_posts() ) : ?>
   		<?php while ( $products->have_posts() ) : $products->the_post(); ?>
	<?php 
		?>
		<div class="journal-news-preview"> <?php
		echo "<img class='post-image-homepage' src='".the_post_thumbnail('')."'/>"; ?>
		<div class='post-date-comments'>
			<p class='post-date-homepage'><?php echo get_the_date(); ?> / </p>
			<p class='post-comments-count'><?php comments_number(); ?></p>
		</div> 
			<?php
		echo "<h3 class='post-title-homepage'>".get_the_title()."</h3>"; 
			?>
		<h3 class="read-entry-button2"><a href=" <?php the_permalink(); ?>">Read Entry</a></h3>
		</div>
		   <?php endwhile; ?>
		   
	<?php wp_reset_postdata(); ?>
	
	<?php else : ?>

	  <h2>Nothing found!</h2>
	  
<?php endif; ?>
</div>

<!-- ADVENTURES -->
<h1 class="adventures-title-front">Latest Adventures</h1>
<div class="adventures-container">
<?php if ( $adventures->have_posts() ) : ?>
   		<?php while ( $adventures->have_posts() ) : $adventures->the_post(); ?>
	<?php 
		?>
		<div class="adventures-preview"> <?php
		echo "<img class='adventure-image-homepage' src='".the_post_thumbnail('')."'/>"; ?>
		<h1 class="title-link"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<h3 class="read-entry-button2"><a href="<?php the_permalink(); ?>">Read More</a></h3>
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