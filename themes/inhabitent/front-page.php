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
<section class="journal-list container">
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
            <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
            <div class="post-brief-info"><p><?php the_date(); ?> / 
            <?php comments_number(); ?></p>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
            <a href="<?php the_permalink(); ?>" class="post-list-button">Read Entry</a>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>
</section>


<!-- adventure part !!!!!!!!!!-->
<section class="latest-adventure">
    <h1>Latest Adventure</h1>
    <div class="adventure">
        <div class="first-adv">
            <h1><a href="#">Getting Back to Nature in a Canoe </a></h1>
            <div class="button"><a href="#"> read more </a></div> 
        </div>
        <div class="second-adv">
            <h1><a href="#">A Night with Friends at the Beach</a></h1>
            <div class="button"><a href="#"> read more </a></div> 
        </div>
        <div class="third-adv">
            <h1><a href="#">Taking in the view at Big Mountain</a></h1>
            <div class="button"><a href="#"> read more </a></div> 
        </div>
        <div class="fourth-adv">
            <h1><a href="#">Star - Gazing at the Night Sky</a></h1>
            <div class="button"><a href="#"> read more </a></div> 
        </div>
    </div>
    <div><a href = "#">More Adventures</a></div>

</section>

<?php get_footer(); ?>