<?php
/**
 * Tamplate Name: About page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="about-hero-banner"></div>

<div class="about-content">
    <?php $props = CFS()->get_field_info('our_story');
    echo $props['label']; ?>
    <?php echo CFS()->get('our_story'); ?>

    <?php $props = CFS()->get_field_info('our_team');
    echo $props['label']; ?>
    <?php echo CFS()->get('our_team'); ?>
    
</div>