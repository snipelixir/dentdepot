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
                    <span class="initial-text">you are here: </span>
                    <span class="current">Pricing</span>
                </div>
            </div>
        </section>

        <!--page content-->
        <section class="price-plans">
            <div class="auto-container">
                
                <div class="sec-title">
                    <h3 class="skew-lines"><?php the_title(); ?></h3>
                </div>
                
                <div class="row clearfix">
                    
                    <!--Table Column-->
                    <article class="col-md-3 col-sm-6 col-xs-12 table-column wow fadeIn" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="table-inner">
                            <div class="table-header">
                                <h3>BASIC PLAN</h3>
                            </div>
                            <div class="price-column price">
                                <h4 class="amount">79<sup>$</sup></h4>
                                <p>ONE Time</p>
                            </div>
                            <div class="list">
                                <ul>
                                    <li>yearly car inspection</li>
                                    <li>outside car wash</li>
                                    <li>speed drive and test</li>
                                    <li>full polishing</li>
                                </ul>
                            </div>
                            
                            <a href="#" class="read-more hvr-bounce-to-right"><span class="fa fa-angle-right"></span> order now</a>
                        </div>
                    </article>
                    
                    <!--Table Column-->
                    <article class="col-md-3 col-sm-6 col-xs-12 table-column wow fadeIn" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="table-inner">
                            <div class="table-header">
                                <h3>PREMIUM PLAN</h3>
                            </div>
                            <div class="price-column price">
                                <h4 class="amount">99<sup>$</sup></h4>
                                <p>ONE Time</p>
                            </div>
                            <div class="list">
                                <ul>
                                    <li>yearly car inspection</li>
                                    <li>outside car wash</li>
                                    <li>speed drive and test</li>
                                    <li>full polishing</li>
                                </ul>
                            </div>
                            
                            <a href="#" class="read-more hvr-bounce-to-right"><span class="fa fa-angle-right"></span> order now</a>
                        </div>
                    </article>
                    
                    <!--Table Column-->
                    <article class="col-md-3 col-sm-6 col-xs-12 table-column wow fadeIn" data-wow-delay="400ms" data-wow-duration="1000ms">
                        <div class="table-inner">
                            <div class="table-header">
                                <h3>PLATINUM PLAN</h3>
                            </div>
                            <div class="price-column price">
                                <h4 class="amount">269<sup>$</sup></h4>
                                <p>ONE Time</p>
                            </div>
                            <div class="list">
                                <ul>
                                    <li>yearly car inspection</li>
                                    <li>outside car wash</li>
                                    <li>speed drive and test</li>
                                    <li>full polishing</li>
                                </ul>
                            </div>
                            
                            <a href="#" class="read-more hvr-bounce-to-right"><span class="fa fa-angle-right"></span> order now</a>
                        </div>
                    </article>
                    
                    <!--Table Column-->
                    <article class="col-md-3 col-sm-6 col-xs-12 table-column wow fadeIn" data-wow-delay="600ms" data-wow-duration="1000ms">
                        <div class="table-inner">
                            <div class="table-header">
                                <h3>ULTIMATE PLAN</h3>
                            </div>
                            <div class="price-column price">
                                <h4 class="amount">399<sup>$</sup></h4>
                                <p>ONE Time</p>
                            </div>
                            <div class="list">
                                <ul>
                                    <li>yearly car inspection</li>
                                    <li>outside car wash</li>
                                    <li>speed drive and test</li>
                                    <li>full polishing</li>
                                </ul>
                            </div>
                            
                            <a href="#" class="read-more hvr-bounce-to-right"><span class="fa fa-angle-right"></span> order now</a>
                        </div>
                    </article>
                    
                </div>
                
            </div>
        </section>

    <?php endif; ?>

<?php get_footer(); ?>
