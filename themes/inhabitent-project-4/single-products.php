<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<?php $price = CFS()->get( 'price' ); ?>
<?php $excerpt = CFS()->get(' excerpt' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main product-wrapper" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="image-wrapper">
			<?php echo get_the_post_thumbnail(); ?>
			</div>
			<div class="product-information">
            <?php the_title( '<h1 class="product-title">', '</h1>' ); ?>
        
            <?php echo "<p class='price'>\${$price}.00</p>" ?>

            	<div class="product-description">
		        <?php the_content(); ?>
		        <?php
			        wp_link_pages( array(
				                        'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				                        'after'  => '</div>',
			    ) );
		        ?>
				</div>
			</div>
				
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
				
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
