<?php
/*
Template Name: Process Page
 */
?>

<?php get_header(); ?>

    <?php 
    if (!have_posts()) _e('Sorry, no pages matched your criteria.', 'textdomain');
    ?>

    <?php if (have_posts()) : ?>

        <?php get_template_part('page', 'banner'); ?>

        <!--page content-->
        <section class="services-section">
    	    <div class="auto-container">
                <?= the_content(); ?>
            </div>
        </section>

    <?php endif; ?>

<?php get_footer(); ?>
