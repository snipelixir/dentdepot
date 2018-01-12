	<!--Contact Options-->
    <section class="contact-options">
    	<div class="clearfix">
        	<ul class="info-box clearfix wow bounceInRight">
            	<li><a href="<?=bloginfo('url') . '/schedule-appointment/'?>"><span class="fa fa-calendar"></span> Make an appointment</a></li>
                <li><a href="tel:8445004245"><span class="fa fa-phone"></span> Call Us Today</a> </li>
            </ul>
        </div>
    </section>
	
	<!--Main Footer-->
    <footer class="main-footer">
    	<!--Footer Upper-->
    	<div class="footer-upper">
        	<div class="auto-container">
            	<div class="row clearfix">
                	
                    <!--Footer Widget-->
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    	<div class="footer-widget contact-widget">
                        	<h3>Contact Us</h3>
                        	<div class="text">Our customers receive the highest quality service with no money out of pocket and zero time off the road. Contact us today.</div>
                            <ul class="info">
                            	<li><strong>Email</strong> <a href="mailto:info@dentdepot.net">info@dentdepot.net</a></li>
                                <li><strong>Phone</strong> <a href="tel:8445004245"> (844)500-4245</a></li>
                                <li>2327 S. Broadway Denver CO, 80210</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!--Footer Widget-->

                    <!-- widget area -->
                    <?php if (!dynamic_sidebar('footer1')) : ?>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                    	<div class="footer-widget services-widget">
                        	<h3>Set a widget here</h3>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!--Footer Widget-->
                    <?php if (!dynamic_sidebar('footer2')) : ?>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                    	<div class="footer-widget services-widget">
                        	<h3>Set a widget here</h3>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!--Footer Widget-->
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    	<div class="footer-widget newsletter-widget">
                        	<h3>Quick Contact</h3>
                        	<form action="#" class="clearfix">
                        		<p><input type="text" placeholder="Your Name"></p>
                        		<p><input type="text" placeholder="Your Email"></p>
                        		<p><textarea placeholder="Your Message"></textarea></p>
                        		<p><button class="hvr-bounce-to-right" type="submit">Send Message</button></p>
                        	</form>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
        	<div class="auto-container">

            	<div class="row clearfix">
                    <div class="col-md-6 col-sm-12 col-xs-12"><div class="copyright">Copryright &copy; <?=date('Y')?> by <a href="<?=bloginfo('url')?>"> <?= bloginfo('name') ?></a> | All rights reserved</div></div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="social-links">
                            <a href="#" class="fa fa-facebook-f"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-instagram"></a>
                            <a href="#" class="fa fa-google"></a>
                            <a href="#" class="fa fa-pinterest-p"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"></div>

<?php wp_footer(); ?>

</body>
</html>
