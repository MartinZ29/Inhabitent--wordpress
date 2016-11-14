<?php
/**
 * Template Name: About page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
        <div class="about_image">
            
        </div>
        <h1>About</h1>
        <div class="container">
            <div class="about-content">
                <h2><?php
                $props = CFS()->get_field_info('our_story');
                echo $props['label'];
                ?></h2>
                <?php echo CFS()->get( 'our_story'); ?>

                <h2><?php
                $props = CFS()-> get_field_info('our_team');
                echo $props['label'];
                ?></h2>
                <?php echo CFS()->get( 'our_team'); ?>
           </div>
        </div>
    
<?php get_footer(); ?>