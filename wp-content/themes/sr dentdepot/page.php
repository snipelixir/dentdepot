<?php get_header(); ?>

    <?php 
        if (!have_posts()) _e('Sorry, no pages matched your criteria.', 'textdomain');
    ?>

    <?php if (have_posts()) : ?>

        <?php get_template_part('page', 'banner'); ?>

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
