<?php if (have_posts()) : ?>

    <!-- Page Banner -->
    <section class="page-banner" 
    <?php if (has_post_thumbnail()) : ?>
        style="background-image:url(<?= the_post_thumbnail_url() ?>);">
    <?php else : ?>
        style="background-image:url(<?= get_template_directory_uri() . '/images/background/page-banner-1.jpg' ?>);">
    <?php endif ?>
        <div class="auto-container">
            <div class="page-title">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="bread-crumb text-right">
                <?php if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </div>
        </div>
    </section>

<?php endif; ?>
