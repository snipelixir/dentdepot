<?php
/*
Template Name: About Page
 */
?>

<?php get_header(); ?>

    <?php 
    if (!have_posts()) _e('Sorry, no pages matched your criteria.', 'textdomain');
    ?>

    <?php if (have_posts()) : ?>

        <?php get_template_part('page', 'banner'); ?>

        <!-- tab section -->
        <section class="tabs-section">
            <div class="auto-container">
                <div class="row">
                    
                    <div class="sec-title">
                        <h3 class="skew-lines">DENT DEPOT’S NO HASSLE CLAIMS PROCESS</h3>
                    </div>

                    <div class="tabs-box clearfix">
                        
                        <!--Buttons Side-->
                        <div class="col-md-4 col-sm-6 col-xs-12 buttons-side">
                            
                            <div class="sec-title">
                                <h3>what we do on our workspace</h3>
                            </div>
                            <!--Tab Buttons-->
                            <ul class="tab-buttons">
                                <li class="wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms"><a href="#tab-one" class="tab-btn active-btn clearfix"><div class="icon"><span class="flaticon-transport100"></span></div><h4>Repair and inspection service</h4><p>Customers car repairing</p></a></li>
                                <li class="wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms"><a href="#tab-two" class="tab-btn clearfix"><div class="icon"><span class="flaticon-wrench1"></span></div><h4>Repair and inspection service</h4><p>Customers car repairing</p></a></li>
                            </ul>
                        </div>
                        
                        <!--Content Side-->
                        <div class="col-md-8 col-sm-6 col-xs-12 tabs-content clearfix">
                            
                            <!--Tab / Active tab-->
                            <div class="tab active-tab" id="tab-one">
                                <div class="tab-title">
                                    <h2>Repair and inspection service</h2>
                                    <h3>Customers car repairing</h3>
                                </div>
                                <div class="text">Our most popular service is our Virtual Receptionist. We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss that important call that could be the start of an exciting new business opportunity, so let us answer it for you. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </div>
                                
                                <div class="row list clearfix">
                                    <ul class="col-md-6 col-sm-12 col-xs-12">
                                        <li>Professional car cleaning</li>
                                        <li>Monthly car inspections</li>
                                        <li>Inner car cleaning</li>
                                        <li>Fast wheels switching</li>
                                    </ul>
                                    <ul class="col-md-6 col-sm-12 col-xs-12">
                                        <li>Car painting assets and service</li>
                                        <li>Selling car materials and stuff</li>
                                        <li>Repair cars and materials</li>
                                        <li>Creating new car assets and wheels</li>
                                    </ul>
                                </div>
                                
                            </div>
                            
                            <!--Tab-->
                            <div class="tab" id="tab-two">
                                <div class="tab-title">
                                    <h2>Yearly car security inspections</h2>
                                    <h3>We care about your car security</h3>
                                </div>
                                <div class="text">Our most popular service is our Virtual Receptionist. We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss that important call that could be the start of an exciting new business opportunity, so let us answer it for you. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </div>
                                
                                <div class="row list clearfix">
                                    <ul class="col-md-6 col-sm-12 col-xs-12">
                                        <li>Professional car cleaning</li>
                                        <li>Monthly car inspections</li>
                                        <li>Inner car cleaning</li>
                                        <li>Fast wheels switching</li>
                                    </ul>
                                    <ul class="col-md-6 col-sm-12 col-xs-12">
                                        <li>Car painting assets and service</li>
                                        <li>Selling car materials and stuff</li>
                                        <li>Repair cars and materials</li>
                                        <li>Creating new car assets and wheels</li>
                                    </ul>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section>

        <?=the_content();?>

    <?php endif; ?>

<?php get_footer(); ?>

