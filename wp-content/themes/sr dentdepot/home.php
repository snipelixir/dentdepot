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

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                	
                    <!-- Post -->
                    <article class="post wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="post-image">

                        <?php if(the_post_thumbnail()): ?>

                            <img class="img-responsive" src="<?= the_post_thumbnail('large') ?>" alt="<?=the_post_thumbnail_caption()?>">
                            
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
                                
                                <?php if($num_comments > 0): ?>
                                    <div class="comments"><span class="fa fa-comments"></span> &ensp; <?=$num_comments;?></div>
                                <?php endif; ?>
                                
                            </div>
                            <a href="<?= the_permalink(); ?>" class="overlay"><span class="icon flaticon-right11"></span></a>
                        </div>
                        
                        <div class="content-box">
                            <h2 class="post-title"><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h2>
                            <div class="post-info">
                                Posted on <?php echo get_the_date(); ?> <?php if($num_comments > 0): ?>/ <a href="<?= the_permalink(); ?>"> <?php comments_number('no responses', $num_comments. ' Comment', $num_comments. ' Comments'); ?> <?php endif; ?> </a> / in <?= the_category(', '); ?>

                            </div>
                            <div class="post-text"><?=the_excerpt();?></div>
                            <div class="text-right"><a class="theme-btn dark-btn" href="<?= the_permalink(); ?>">READ MORE</a></div>
                        </div>
                    </article>
                
            <?php endwhile;
            else : ?>
                <?php _e('Sorry, no posts available', 'textdomain'); ?>
            <?php endif; ?>

                    <!-- Pagination -->
                    <ul class="pagination wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<li><a class="active" href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#">05</a></li>
                    </ul>
                
                </section>

                <!-- Side Bar -->
                <aside class="side-bar col-lg-3 col-md-4 col-sm-5 col-xs-12">
                	
                    <!-- Search Form -->
                	<div class="widget search-form">
                        
                        <form method="post" action="http://world5.commonsupport.com/html/carshire/blog.html">
                        	<div class="form-group">
                                <input type="search" name="search" value="" placeholder="search for something">
                                <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                            </div>
                        </form>
                        
                    </div>
                    
                    <!-- Latest Comments -->
                    <div class="widget latest-comments">
                    	<div class="sec-title"><h3>Latest Comments</h3></div>
                        
                        <div class="comment">
                        	<div class="comment-info"><a href="#">March 13, 2015</a> / by <a href="#">Jonathan Doe</a> </div>
                            <div class="comm-box">
                            	<p><a href="#">“At vero eos et accusam et justo duo dolores et ea rebum.”</a></p>
                                <div class="text-right"><a href="#" class="read-more"></a></div>
                            </div>
                        </div>
                        
                        <div class="comment">
                        	<div class="comment-info"><a href="#">March 11, 2015</a> / by <a href="#">Marvin Grass</a> </div>
                            <div class="comm-box">
                            	<p><a href="#">“Sed diam nonumy eirmod tempor invidunt ut labore et.”</a></p>
                                <div class="text-right"><a href="#" class="read-more"></a></div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Latest Posts -->
                    <div class="widget latest-posts">
                    	<div class="sec-title"><h3>Latest Blog Posts</h3></div>
                        
                        <div class="post">
                        	<div class="post-thumb"><a href="#"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                            <h4><a href="#">New car arrivals...</a></h4>
                            <div class="post-info"><a href="#">March 13, 2015</a>  / &nbsp;<a href="#"><span class="fa fa-comments"></span> &nbsp; 33</a></div>
                        </div>
                        
                         <div class="post">
                        	<div class="post-thumb"><a href="#"><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
                            <h4><a href="#">Our full servicelist</a></h4>
                            <div class="post-info"><a href="#">March 11, 2015</a>  / &nbsp;<a href="#"><span class="fa fa-comments"></span> &nbsp; 12</a></div>
                        </div>
                        
                         <div class="post">
                        	<div class="post-thumb"><a href="#"><img src="images/resource/post-thumb-3.jpg" alt=""></a></div>
                            <h4><a href="#">Repaired cars</a></h4>
                            <div class="post-info"><a href="#">March 10, 2015</a>  / &nbsp;<a href="#"><span class="fa fa-comments"></span> &nbsp; 52</a></div>
                        </div>
                        
                    </div>
                    
                    <!-- Popular Tags -->
                    <div class="widget tags">
                    	<div class="sec-title"><h3>Popular tags</h3></div>
                        
                        <a href="#">REPAIR</a> <a href="#">Cars</a> <a href="#">Gm</a> <a href="#">Industry</a> <a href="#">Garage</a> <a href="#">Car Wash</a> <a href="#">Polishing</a>
                        
                    </div>
                    
                    <!-- Latest Updates -->
                    <div class="widget latest-updates">
                    	<div class="sec-title"><h3>Latest Updates</h3></div>
                        <div class="update-box">
                        	<h4>Text Area</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores.</p>
                        </div>
                        
                    </div>
                
                
                </aside>

            </div>
        </div>
    </div>

<?php get_footer(); ?>
