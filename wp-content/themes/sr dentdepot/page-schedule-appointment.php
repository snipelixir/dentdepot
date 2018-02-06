<?php
/*
Template Name: Schelude Appointment
 */
?>

<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
        <!-- Sidebar Page -->
        <div class="sidebar-page">
            <div class="auto-container">
                <!--Map Location-->   
                <section class="map-location" id="map-location">
                
                </section>
                <br><br>
        
                <div class="row clearfix">
                    
                    <!-- Left Content -->
                    <section class="left-content col-lg-9 col-md-8 col-sm-7 col-xs-12">
                        
                        
                        <!-- Contact Form -->
                        <div class="contact-form">
                                
                            <div class="sec-title"><h3 class="skew-lines">Leave a Message</h3></div>
                            <div class="msg-text">Fill out all required fields to send a message, or call us today at <a href="tel:8445004245">(844)500-4245</a> for more information. Thank you!</div>
                            
                            <!--Contact Form-->
                            <?=the_content()?>
                                
                        </div>
                        
                    
                    </section>
                    
                    <!-- Side Bar -->
                    <aside class="side-bar col-lg-3 col-md-4 col-sm-5 col-xs-12">
                        
                        
                        <!-- Contact Info -->
                        <div class="widget cont-info">
                            <div class="sec-title"><h3 class="skew-lines">company info</h3></div>
                            <div class="cont-box">
                                <div class="text">If you are in the middle of something and you don’t want to miss that important call.</div>
                                <ul class="info">
                                    <li><strong>Email</strong> <a href="mailto:info@dentdepot.net">info@dentdepot.net</a></li>
                                    <li><strong>Phone</strong> <a href="tel:8445004245">(844)500-4245</a></li>
                                    <li><strong>Website</strong> <a href="http://www.dentdepot.net/">www.dentdepot.net</a></li>
                                </ul>
                            </div>
                            
                        </div>
                    
                    
                    </aside>
                
                </div>
            </div>
            
        </div>
        
    <?php endwhile;
    else : ?>
        <?php _e('Sorry, no pages matched your criteria.', 'textdomain'); ?>
    <?php endif; ?>

<?php get_footer(); ?>
