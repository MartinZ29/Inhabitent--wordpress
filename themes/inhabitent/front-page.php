<?php get_header(); ?>


<!-- hero banner area !!!!!!!-->
<section class="home-hero-banner">
    <img src=" <?php echo get_template_directory_uri(). '/images/logos/inhabitent-logo-full.svg'; ?>" class = "banner" alt= "inhabitent-logo" />
</section>


<!-- shop stuff area !!!!!!!-->
<section>
    <h1>Shop stuff</h1>
    <div class="shop-items">
        <?php 
$terms = get_terms('product_type');

 foreach ($terms as $term):?>
    <?php $url = get_term_link($term->slug,'product_type'); ?>
     <img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug ?>.svg">
     <p><?php echo $term->description; ?></p>
     <a href="<?php echo $url ?>"><?php echo $term->name.'Stuff'; ?></a>
     <?php endforeach; wp_reset_postdata(); ?>
    </div>
</section>

<!-- journal  area ! !!!!!!!!-->
<section>
    <h1>Inhabitent Journal</h1>
    <div class="post-list">
        <?php 
            $args = array('post_type' => 'post',
                          'order' => 'ASC',
                          'posts_per_page' => 3);
            $posts = get_posts($args);
        ?>
        <?php foreach ($posts as $post ): setup_postdata( $post ); ?>
        <div class="post-list-info">
            <?php the_post_thumbnail(["365px, 250px"]); ?>
            <?php the_date(); ?>
            <?php comments_number(); ?>
            <?php the_permalink(); ?>
            <h2><?php the_title(); ?></h2>
            <a class="post-list-bottom" href="">Read Entry</a>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>
</section>


<!-- adventure part !!!!!!!!!!-->
<section>
</section>


<?php get_footer(); ?>