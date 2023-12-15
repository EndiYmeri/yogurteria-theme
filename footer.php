    
        <footer>
                <div class="grid-container">
                    <div class="grid-x align-middle">
                        <div class="cell large-5">
                            <div class="footer-logo">
                                <a href="<?php echo site_url() ?>">
									<img src="<?php bloginfo('template_url'); ?>/assets/images/logo-yogurteria.png" alt="">
								</a>
                            </div>
                            <p>
                                Bëhuni dhe ju pjesë e fushatave tona promocionale
                                duke vendosur adresën tuaj të emailit.
                            <p>
                            <div class="contact-footer">
                                <?php echo do_shortcode('[contact-form-7 id="69" title="Footer Form"]'); ?>
                            </div>
                        </div>
                        <div class="cell large-3">
                            <div class="footer-menu">
                                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
                            </div>
                        </div>
                        <div class="cell large-4">
                            <div class="follow-us">
                                <h1>Follow us</h1>
                                <div class="social-icons">
                                    <a href="https://www.instagram.com/yogurteria.albania/" target="_blank">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/images/instagram-logo.svg" alt="">
                                    </a>
                                    <a href="https://www.facebook.com/yogurteri" target="_blank">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/images/facebook-logo.svg" alt="">
                                    </a>
                                    <a href="https://www.tiktok.com/@yogurteria.albania" target="_blank">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/images/tiktok-logo.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
        <script src="<?php bloginfo('template_url'); ?>/node_modules/jquery/dist/jquery.js"></script>
		<script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/node_modules/foundation-sites/dist/js/foundation.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/node_modules/slick-1.8.1/slick/slick.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDB63CSNJRcYHZQj7DlygHP6FfHDNLqm5Q"></script>
	    <script src="https://cdn.jsdelivr.net/gmap3/7.2.0/gmap3.min.js"></script>
        <script src="<?php bloginfo("template_url"); ?>/js/app.js"></script>
        <?php wp_footer(); ?>  
    </body>
</html>

