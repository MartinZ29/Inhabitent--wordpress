
<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		    <?php if ( have_posts() ) : ?>
            <div class="container">
			    <header class="archive">
				    <?php
					    the_archive_title( '<h1 class="page-title">', '</h1>' );
					    the_archive_description( '<div class="taxonomy-description">', '</div>' );
				    ?>
			    </header><!-- .page-header -->

                <div id="primary" class="archive-area">
                    <?php while ( have_posts() ) : the_post(); ?>				    
				        <div class = "product-item">
                        <article class= id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
            		        <div class = "product-thumbnail">
						        <a href="<?php the_permalink() ; ?> "><?php the_post_thumbnail( 'large' ); ?></a>
					        </div>
         				    <div class = "item-price">        				        
							    <?php the_title('<h3 class="entry-title">'); ?> 
              				    <span><?php echo CFS()->get( 'product_price' ); ?></span>
        			        </div>
                        </article><!-- #post-## -->
				        </div> <!-- product-item -->
					    <?php endwhile ?>     
                </div> <!-- archive-area -->
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
            </div><!-- container -->
        </main>
	</div><!-- content-area -->
<?php get_footer(); ?>