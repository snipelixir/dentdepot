<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        
        <h2><?=the_title()?></h2>
        <p><?=the_content()?></p>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
