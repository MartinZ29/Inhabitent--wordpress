<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/product-archive-single', 'single-product' ); ?>
			<?php endwhile; ?>
			</div>
		</main>
	</div>

<?php get_footer(); ?>
