<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<?php $product_image = CFS()->get( 'image' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="shop-main" role="main">

		<?php if ( have_posts() ) : ?>
			
			<header class="page-header">
				<h1 class="shop-title">shop stuff</h1>
				<?php $terms = get_terms('product_type');
				echo '<ul class="product-types">';
					foreach ($terms as $term) {
    					echo '<li class="product-type"><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
				}
				echo '</ul>'; ?>

			</header><!-- .page-header -->
			<div class="product-catalog">
			<?php while ( have_posts() ) : the_post(); ?>
			
				<div class="product-box">
					<div class="product-image"><a href=" <?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail('large') ?></a>
						<div class="product-info">
							<p class='product-titles'><?php the_title(); ?></p>
							<p class='product-price'>$<?php echo CFS()->get( 'price' ); ?>.00</p>
						</div>
					</div>
				</div>
			

				<?php
					// get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>
</div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
