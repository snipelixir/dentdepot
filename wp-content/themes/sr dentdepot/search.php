<?php get_header(); ?>

    <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(<?= get_template_directory_uri() . '/images/background/page-banner-1.jpg' ?>);">
         <div class="auto-container">
            <div class="page-title"><h1>Our Blog</h1></div>
            <div class="bread-crumb text-right">
                <?php if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </div>
        </div>
	</section>

    <!-- Sidebar Page -->
    <div class="sidebar-page">
    	<div class="auto-container">
            <div class="row clearfix">

                <!-- Left Content -->
                <section class="left-content col-lg-9 col-md-8 col-sm-7 col-xs-12">

                <div class="alert alert-info">
                    <h4><?php wp_title(''); ?></h4>
                </div>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                	
                    <!-- Post -->
                    <article class="post wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="post-image">

                        <?php if (the_post_thumbnail()) : ?>

                            <img class="img-responsive" src="<?= the_post_thumbnail('large') ?>" alt="<?= the_post_thumbnail_caption() ?>">
                            
                        <?php endif; ?>

                        <?php

                        /**
                         * retrieve comments count
                         */
                        if (comments_open()) {
                            $num_comments = get_comments_number(); // get_comments_number returns only a numeric value
                        } else {
                            $num_comments = 0;
                        }
                        ?>

                            <div class="caption">
                                <div class="date"><span class="day"><?php echo get_the_date('d'); ?></span><span class="month"><?php echo get_the_date('M'); ?></span></div>
                                
                                <?php if ($num_comments > 0) : ?>
                                    <div class="comments"><span class="fa fa-comments"></span> &ensp; <?= $num_comments; ?></div>
                                <?php endif; ?>
                                
                            </div>
                            <a href="<?= the_permalink(); ?>" class="overlay"><span class="icon flaticon-right11"></span></a>
                        </div>
                        
                        <div class="content-box">
                            <h2 class="post-title"><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h2>
                            <div class="post-info">
                                Posted on <?php echo get_the_date(); ?> <?php if ($num_comments > 0) : ?>/ <a href="<?= the_permalink(); ?>"> <?php comments_number('no responses', $num_comments . ' Comment', $num_comments . ' Comments'); ?> <?php endif; ?> </a> / in <?= the_category(', '); ?>

                            </div>
                            <div class="post-text"><?= the_excerpt(); ?></div>
                            <div class="text-right"><a class="theme-btn dark-btn" href="<?= the_permalink(); ?>">READ MORE</a></div>
                        </div>
                    </article>
                
            <?php endwhile;
            else : ?>
                <?php _e('Sorry, no posts available', 'textdomain'); ?>
            <?php endif; ?>

                    <!-- Pagination -->
                    <?php get_template_part('blog', 'pagination'); ?>
                
                </section>

                <!-- Side Bar -->
                <?= get_sidebar(); ?>

            </div>
        </div>
    </div>

<?php get_footer(); ?>
