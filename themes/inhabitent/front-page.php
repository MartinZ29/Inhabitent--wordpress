<?php get_header(); ?>



<?php 
$taxonomies = get_term( array(
    'taxonomy' => 'product_type',
    'hide_empty' => true,
));

foreach ($taxonomies as $term):?>
    <img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term -> slug ?>.svg">
    <p><?php echo $term -> description; ?></p>
    <a href=""><?php echo $term -> name; ?></a>
    <?php endforeach; wp_reset_postdata(); ?>

