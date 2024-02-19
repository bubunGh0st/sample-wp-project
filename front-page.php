<?php get_header(); ?>
<!--#Home video Start-->
<section class="homevideo w-100">
    <div class="container-fluid text-center">
        <div class="row justify-content-md-center">
            <div class="col-sm-12">
                <div class="home-slider">                
                <?php
                    echo do_shortcode('[smartslider3 slider="4"]');
                ?>
                </div>
                <!-- <iframe width="100%" height="567" src="<?php // echo $homeo_chakra['header-video'] ?>" title="YouTube video player" rel="0" frameborder="0" allow="autoplay" allowfullscreen></iframe> -->
            </div>
        </div>
    </div>
</section>
<!--#Home video End-->
<!--#Vision Start-->
<section class="vision w-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 fadein">
                <h2 class="heading center"><?php echo $homeo_chakra['section-headings-4'] ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="vision-content text-center fadein">
               <p><?php echo $homeo_chakra['vision-id'] ?></p>
               <a href="<?php echo $homeo_chakra['vision-btn-link'] ?>" class="btn booknow"><?php echo $homeo_chakra['vision-btn-txt'] ?></a>
            </div>
        </div>
    </div>
</section>
<!--#Vision End-->
<!--#How it works Start-->
<section class="works w-100">
    <h2 class="heading center"><?php echo $homeo_chakra['section-headings-2'] ?></h2>
    <div class="workbg w-100">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="work-outer01 fadein1">
                        <div class="curve01"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/border-curve01.png" title="border01" loading="lazy"></div>
                        <div class="curve03" style="display:none;"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/border-curve03.png" title="border01" loading="lazy" ></div>
                        <div class="work-outer01-circle"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/yellow-circle.png" alt="circle" loading="lazy"></div>
                        <div class="work-outer01-border"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/01bg.png" alt="border" loading="lazy"> </div>
                        <img src="<?php echo $homeo_chakra['wrk-sec-icn1']['url'] ?>" alt="work icon" loading="lazy">
                        <p><?php echo $homeo_chakra['wrk-sec-desc1'] ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="work-outer02 fadein2">
                        <div class="curve02"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/border-curve02.png" title="border01" loading="lazy"></div>
                        <div class="curve04" style="display:none;"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/border-curve04.png" title="border01" loading="lazy"></div>
                        <div class="work-outer02-circle-left"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle02.png" alt="circle" loading="lazy" ></div>
                        <div class="work-outer02-circle-right"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle02.png" alt="circle" loading="lazy" ></div>
                        <div class="work-outer02-border"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/01bg.png" alt="border" loading="lazy" ></div>
                        <div class="work-outer02-left-border"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/01bg.png" alt="border" loading="lazy"></div>
                        <img src="<?php echo $homeo_chakra['wrk-sec-icn2']['url'] ?>" alt="work icon" loading="lazy">
                        <p><?php echo $homeo_chakra['wrk-sec-desc2'] ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="work-outer03 fadein3">
                        <div class="work-outer03-circle-left"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/yellow-circle.png" alt="circle" loading="lazy"></div>
                        <div class="work-outer03-border"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/01bg.png" alt="border" loading="lazy"></div>
                        <img src="<?php echo $homeo_chakra['wrk-sec-icn3']['url'] ?>" alt="work icon" loading="lazy">
                        <p><?php echo $homeo_chakra['wrk-sec-desc3'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--#How it works End-->
<!--#How to Register Start-->
<section class="register w-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 fadein">
                <h2 class="heading center"><?php echo $homeo_chakra['section-headings-3'] ?></h2>
            </div>
        </div>
        <div class="row registermap d-flex justify-content-between">
            <div class="col-lg-4 col-md-6 col-sm-12 fadein1">
                <div class="registerbox-outer-green">
                    <div class="registerbox-green">
                        <img src="<?php echo $homeo_chakra['reg-info-icn1']['url'] ?>" alt="login" loading="lazy">
                        <p><?php echo $homeo_chakra['reg-info-desc1'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 fadein2">
                <div class="registerbox-outer-blue">
                    <div class="registerbox-blue">
                        <img src="<?php echo $homeo_chakra['reg-info-icn2']['url'] ?>" alt="email" loading="lazy" >
                        <p><?php echo $homeo_chakra['reg-info-desc2'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 fadein3">
                <div class="registerbox-outer-red">
                    <div class="registerbox-red">
                        <img src="<?php echo $homeo_chakra['reg-info-icn3']['url'] ?>" alt="Active account" loading="lazy">
                        <p><?php echo $homeo_chakra['reg-info-desc3'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--#How to Register End-->
<!--#What is Homeopathy Start -->
<section class="homeopathy w-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 fadein">
                <h2 class="heading center"><?php echo $homeo_chakra['section-headings-5'] ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <img src="<?php echo $homeo_chakra['homeopathy-img']['url'] ?>" alt="homeopathy" class="homeopathy-img fadein" loading="lazy">
                <p class="services-content-fullwidth homeopathy-tp-margin"><?php echo $homeo_chakra['wt-homeopathy-desc'] ?></p>
            </div>
        </div>
    </div>
</section>
<!--#What is Homeopathy End -->
<!--#Homeopathy Can Help Start -->
<section class="homeopathy-help w-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 fadein">
                <h2 class="heading center"><?php echo $homeo_chakra['section-headings-6'] ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 fadein">
                <p class="services-content-fullwidth"><?php echo $homeo_chakra['help-homeopathy-desc'] ?></p>
            </div>
        </div>
    </div>
</section>
<!--#Homeopathy Can Help End -->
<!-- ====== testimonial 3 starts ====== -->
<section id="testimonial" class="position-relative testimonailbg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 fadein">
                <h2 class="heading center"><?php echo $homeo_chakra['section-headings-7'] ?></h2>
            </div>
        </div>
        <?php echo do_shortcode('[testimonial]'); ?>
    </div>
</section>
<!-- ====== testimonial 3 end ====== -->

<?php 

get_footer(); 