<?php 
/**
 * Template Name: Our Services
 * */
get_header();

if(have_posts()) :
	while(have_posts()) : the_post();
?>

<!--#Inner-header Start-->
<?php if( has_post_thumbnail() ) {
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>
<section class="innerheader w-100" style="background-image: url('<?php echo $image[0]; ?>');"></section>
<?php } else { ?>
<section class="innerheader w-100" style="background-image: url('https://projects.flyonit.com/homeodynamic/wp-content/uploads/2023/01/Inner-banner01.jpg');"></section>
<?php } ?>
<!--#Inner-header End-->
<!-- #Page Title Start -->
<section class="contact w-100">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="page-heading"><?php the_title(); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p class="heading-content">
                    <?php 

                        $content = get_the_content();
                        echo $content;
                    
                    ?>
                </p>
			</div>
		</div>
	</div>
</section>
<!-- #Page Title End -->
<!--#Patient Packages Start-->
<section class="packages w-100">
    <div class="container">
        <div class="row">
            <div col-sm-12>
                <h2 class="sub-heading"><?php echo $homeo_chakra['section-headings-1'] ?></h2>
            </div>
        </div>
        <div class="row">
             <?php

                /**
                 * Displaying Testimonials
                 * from Custom Testimonials Post Type
                 */ 

                $args = array(
                    'post_type'         =>  'service',
                    'posts_per_page'    => -1,
                    'order'             => 'ASC',
                );

                $query = new WP_Query($args);

                if($query->have_posts()):
                    while($query->have_posts()) : $query->the_post();
                        $image = get_field('field_service_icon_one');
            ?>
            <div class="packages-box w-100 fadein">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-12 col-sm-12">
                            <div class="packages-icon">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php the_title(); ?>" loading="lazy" >
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12">
                            <div class="packages-content">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="booking">
                                <h3>$<?php the_field('price'); ?></h3>
                                <a href="<?php echo esc_url( get_page_link( 335 ) ); ?>"><button type="button" class="btn btn-login">Book Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                    endwhile;
                endif; 
            ?>
        </div>
    </div>
</section>
<!--#Patient Packages End-->
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
<!-- #Disclaimer Button Start -->
<section class="contact w-100">
    <div class="container fadein services-btm-margin">
        <div class="row">
            <div class="vision-content text-center">
                <a href="<?php echo $homeo_chakra['disclaimer-link'] ?>" class="btn booknow" target="_blank"><?php echo $homeo_chakra['disclaimer-btn-txt'] ?></a>
            </div>
        </div>
    </div>
</section>
<!-- #Disclaimer Button End -->

<?php 

		endwhile;
	endif;

get_footer();
