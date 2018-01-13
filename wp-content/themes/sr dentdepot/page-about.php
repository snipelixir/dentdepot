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
                                <li class="wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms"><a href="#tab-one" class="tab-btn active-btn clearfix"><div class="icon"><span class="flaticon-transport100"></span></div><h4>Qualified Professionals</h4><p>Customers car repairing</p></a></li>
                                <li class="wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms"><a href="#tab-two" class="tab-btn clearfix"><div class="icon"><span class="flaticon-wrench1"></span></div><h4>Our Commitment to You</h4><p>Customers car repairing</p></a></li>
                            </ul>
                        </div>

                        <!--Content Side-->
                        <div class="col-md-8 col-sm-6 col-xs-12 tabs-content clearfix">

                            <!--Tab / Active tab-->
                            <div class="tab active-tab" id="tab-one">
                                <div class="tab-title">

                                    <h2>Professional Dent Repairing Service in Denver</h2>

                                    <h3>100% Customer Satisfaction</h3>

                                </div>
                                <div class="text">With 30 years combined experience, Dent Depot has revolved around a single mission: Customer Satisfaction. No matter the damage, make or model of your vehicle, dents can harm its value and appeal. Every customer who enters our dent removal shop receives expert assistance outstanding customer service during the repair process; that’s our promise to you.</div>

                                <div class="row list clearfix">
                                    <ul class="col-md-6 col-sm-12 col-xs-12">

                                        <li>Professional Hail Damage Repair</li>

                                        <li>Paintless Dent Repair Service</li>

                                        <li>Dent Removal Shop in Denver</li>

                                    </ul>

                                    <ul class="col-md-6 col-sm-12 col-xs-12">

                                        <li>30 Years Combined Experience</li>

                                        <li>Outstanding Customer Service</li>

                                        <li>Pocket Friendly Cost</li>

                                    </ul>

                                </div>
                            </div>

                            <!--Tab-->

                            <div class="tab" id="tab-two">

                                <div class="tab-title">

                                    <h2>Denver Dent Removal Shop</h2>

                                    <h3>We Care About Your Cars</h3>

                                </div>

                                <div class="text">
                                <li><strong>Quality –</strong> There’s a reason Dent Depot is one of the Best dent repair shops in Denver. Our technicians set industry standards with innovative methods, quality work and customer satisfaction.</li><br>
                                <li><strong>Cost –</strong> Most dents are accidents, so you shouldn’t put a dent in your wallet to fix them. That’s why we pay your entire deductible, so there is absolutely no out of pocket cost to you.</li><br>
                                <li><strong>Value –</strong> Chances are you love your vehicle and want it to look its best. Dent Repair from Dent Depot will leave that dent in the dust and restore your vehicle’s factory finish.</li><br>
                                <li><strong>Time –</strong> Our highly skilled team will have your car back to you in 1 to 4 days.</li><br>
                                <li><strong>Convenience –</strong> Want us to pick up your car? Do you need a rental car? We’ve got you covered.</li>
                                </div>

                                <div class="row list clearfix">

                                    <ul class="col-md-6 col-sm-12 col-xs-12">

                                        <li>Professional Hail Damage Repair</li>

                                        <li>Paintless Dent Repair Service</li>

                                        <li>Dent Removal Shop in Denver</li>

                                    </ul>

                                    <ul class="col-md-6 col-sm-12 col-xs-12">

                                        <li>30 Years Combined Experience</li>

                                        <li>Outstanding Customer Service</li>

                                        <li>Pocket Friendly Cost</li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <?= the_content(); ?>

    <?php endif; ?>

<?php get_footer(); ?>
