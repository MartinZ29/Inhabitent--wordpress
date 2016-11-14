
<?php
/**
* Template part for displaying product archive posts
*
* @package RED_Starter_Theme
*/
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
		<div class="product-thumbnail"><a href = '<?php the_permalink();?>'> <?php the_post_thumbnail( 'large' ); ?> </a></div>
		<?php endif; ?>
		<div class = "item-price">
			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		  	<span><?php echo CFS()->get( 'product_price' ); ?></span>
		</div>	 
		 
		 <?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div>
		<?php endif; ?> 
</article>
