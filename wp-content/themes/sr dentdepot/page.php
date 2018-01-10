<?php get_header(); ?>

    <?php 
        if (!have_posts()) _e('Sorry, no pages matched your criteria.', 'textdomain');
    ?>

    <?php if (have_posts()) : ?>

        <!-- Page Banner -->
        <section class="page-banner" 
        <?php if(has_post_thumbnail()): ?>
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

        <!--page content-->
        <section class="tabs-section">
    	    <div class="auto-container">
        	    <div class="row">
                    <div class="tabs-box clearfix">
                        <!--Content Side-->
                        <div class="col-md-12 col-sm-12 col-xs-12 tabs-content clearfix">
                            <?=the_content();?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endif; ?>

<?php get_footer(); ?>
