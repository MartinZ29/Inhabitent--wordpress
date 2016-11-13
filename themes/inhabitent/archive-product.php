<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="content-container">
			<?php if ( have_posts() ) : ?>
			<header class="archive">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			
			<!-- .page-header -->
				<?php $terms = get_terms('product_type'); ?>
				<div class="shop-stuff-list"> 
				<?php foreach ($terms as $term) : ?> 
				<div class='shop-stuff'>
					<?php $url = get_term_link ($term->slug , 'product_type'); ?>
					<a href='<?php echo $url ?>' class='button'>
						<?php  echo $term->name ?>
					</a>
				</div> <!-- shop stuff -->
			<?php endforeach; ?>
				</div> <!--  shop stuff list -->
			</header>

			<div id="primary" class="archive-area">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php
					get_template_part( 'template-parts/content' );
				?>
					<?php endwhile; ?>
					<?php the_posts_navigation(); ?>
					<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
			</div>
			</div>
		</main>
		<!-- #main -->
		</div>
		
		<!-- #primary -->

<?php get_footer(); ?>
