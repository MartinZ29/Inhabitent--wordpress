<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */
?>
<article class = "single-product-content">
    <div class="single-product-img">
	    <?php if ( has_post_thumbnail() ) : ?>
	    <?php the_post_thumbnail( 'large' ); ?>
	    <?php endif; ?>
    </div>

    <div class="single-product-info" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	    <header class="entry-header">
		    <?php the_title( sprintf( '<h1 class="entry-title">', '</h1>' )); ?>
	    </header><!-- .entry-header -->
	    <p class = "single-page-price"><?php echo CFS()->get( 'product_price' ); ?><p>
	    <div class="entry-content">
		    <?php the_content(); ?>
		    <?php
			    wp_link_pages( array(
				    'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				    'after'  => '</div>',) );
                ?>
	    </div><!-- .entry-content -->
        <div class = "social-buttons">
			<button type = "button" class = "social-btn">
				<i class="fa fa-facebook" aria-hidden="true"> like </i>
			</button> 
			<button type = "button" class = "social-btn">
				<i class="fa fa-twitter" aria-hidden="true"> tweet </i>
			</button> 
			<button type = "button" class = "social-btn">
				<i class="fa fa-pinterest" aria-hidden="true"> pin </i>
			</button> 
		</div>
    </div><!-- #post-## -->
</article>