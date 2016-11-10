<?php
/**
 * The template for displaying single post pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="content-area">
    <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('template-part/content','single'); ?>
    <?php if (comments_open() || get_comments_number()) : comments_template(); endif; ?>
    <?php endwhile; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>