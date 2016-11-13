<?php get_header(); ?>


<!-- hero banner area !!!!!!!-->
<section class="home-hero-banner">
    <img src=" <?php echo get_template_directory_uri(). '/images/logos/inhabitent-logo-full.svg'; ?>" class = "banner" alt= "inhabitent-logo" />
</section>


<!-- shop stuff area !!!!!!!-->
<section class="shop-list container">
    <h1>Shop stuff</h1>
    <div class="shop-items">
        <?php 
$terms = get_terms('product_type');

 foreach ($terms as $term):?>
    <?php $url = get_term_link($term->slug,'product_type'); ?>
    <div class="product-type">
     <img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug ?>.svg">
     <p><?php echo $term->description; ?></p>
     <p><a href="<?php echo $url ?>" class="shop-botton"><?php echo $term->name.' Stuff'; ?></a></p>
     </div>
     <?php endforeach; wp_reset_postdata(); ?>
    </div>
</section>

<!-- journal  area ! !!!!!!!!-->
<section class="journal-list">
    <h1>Inhabitent Journal</h1>
    <div class="post-list">
        <?php 
            $args = array('post_type' => 'post',
                          'order' => 'DESC',
                          'posts_per_page' => 3);
            $posts = get_posts($args);
        ?>
        <?php foreach ($posts as $post ): setup_postdata( $post ); ?>
        <div class="post-list-info">
            <?php the_post_thumbnail(); ?>
            <p><?php the_date(); ?>
            <?php comments_number(); ?></p>
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            <a href="<?php the_permalink(); ?>" class="post-list-bottom">Read Entry</a>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>
</section>


<!-- adventure part !!!!!!!!!!-->
<section>
</section>


<?php get_footer(); ?>