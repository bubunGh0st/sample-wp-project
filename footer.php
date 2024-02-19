<?php global $homeo_chakra ?>

<!--#Footer Start-->
<footer class="pt54 w-100">
    <section class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center">
                    <a href="<?php echo get_site_url(); ?>"><img src="<?php echo $homeo_chakra['footer-logo']['url'] ?>" alt="Homeochakra" class="img-responsive logo"></a>
                    <!-- <a href="<?php //echo $homeo_chakra['disclaimer-link'] ?>" target="_blank"><img src="<?php //echo $homeo_chakra['disclaimer-logo']['url'] ?>" alt="disclaimer" class="ft-disclaimer"></a> -->
                    <!-- <p class="footertext"><?php //echo $homeo_chakra['footer-text'] ?></p> -->
                </div>
                <div class="col-lg-3 col-md-2 col-sm-12 col-12">
                    <h3>Useful Links</h3>

                    <?php
                        /**
                         * Display Footer Menu 
                         */

                        $args = array(
                            'theme_location' => 'ft-menu',
                            'menu' => 'ft-menu',
                            'container' => '',
                            'container_class' => '', 
                            'items_wrap' => '<ul id="%1$s" class="">%3$s</ul>',
                        );
                    
                        wp_nav_menu( $args );
                    ?>

                </div>
                <div class="col-lg-3 col-md-2 col-sm-12 col-12">
                    <h3>Our Products</h3>

                    <?php
                        /**
                         * Display Footer Services Menu
                         */

                        $args = array(
                            'theme_location' => 'ft-srvmenu',
                            'menu' => 'ft-srvmenu',
                            'container' => '',
                            'container_class' => '',
                            'items_wrap' => '<ul id="%1$s" class="">%3$s</ul>',
                        );
                    
                        wp_nav_menu( $args );
                    ?>
                    
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                    <h3>Contact Details</h3>
                    <ul>
                        <li class="address"><img src="<?php echo $homeo_chakra['address-icon']['url'] ?>" alt="Location"/><?php echo $homeo_chakra['address-details'] ?> </li>
                        <!-- <li class="phone"><img src="<?php echo $homeo_chakra['phone-icon']['url'] ?>" alt="Location"/><a href="tel:<?php echo $homeo_chakra['phone-number'] ?>"><?php echo $homeo_chakra['phone-number'] ?></a></li> -->
                        <li class="email"><img src="<?php echo $homeo_chakra['email-icon']['url'] ?>" alt="Location"/><a href="mailto:<?php echo $homeo_chakra['email-address'] ?>"><?php echo $homeo_chakra['email-address'] ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="copyright">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p><?php echo $homeo_chakra['copyright-txt'] ?></p>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-end">
                        <ul class="social">
                            <li><p>Follow Us on:</p></li>
                            <li><a href="<?php echo $homeo_chakra['fb-link'] ?>"><span><?php echo $homeo_chakra['fb-icn'] ?></span></a></li>
                            <li><a href="<?php echo $homeo_chakra['twit-link'] ?>"><span><?php echo $homeo_chakra['twit-icn'] ?></span></a></li>
                            <li><a href="<?php echo $homeo_chakra['yt-link'] ?>"><span><?php echo $homeo_chakra['yt-icn'] ?></span></a></li>
                            <li><a href="<?php echo $homeo_chakra['insta-link'] ?>"><span><?php echo $homeo_chakra['insta-icn'] ?></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</footer>
<!--#Footer End-->
 
<!--#Script Load-->
<?php wp_footer(); ?>    
</body>
</html>