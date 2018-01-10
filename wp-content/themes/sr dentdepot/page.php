<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        
    <?php endwhile;
    else : ?>
        <?php _e('Sorry, no pages matched your criteria.', 'textdomain'); ?>
    <?php endif; ?>

<?php get_footer(); ?>
