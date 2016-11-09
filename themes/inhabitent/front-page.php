<?php get_header(); ?>


<!-- hero banner area !!!!!!!-->
<section class="home-hero-banner container">
    <img src=" <?php echo get_template_directory_uri(). '/images/logos/inhabitent-logo-full.svg'; ?>" class = "banner" alt= "inhabitent-logo" />
</section>


<!-- shop stuff area !!!!!!!-->
<section>
    <h1>Shop stuff</h1>
    <div class="shop-items">
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
    </div>
</section>

<!-- journal  area ! !!!!!!!!-->
<section>
</section>


<!-- adventure part !!!!!!!!!!-->
<section>
</section>


<?php get_footer(); ?>