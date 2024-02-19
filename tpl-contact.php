<?php 
/**
 * Template Name: Contact Us
 * 
 * */

get_header();

	if(have_posts()) :
		while (have_posts()) : the_post();

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
		<!--#Contact Us Start-->
		<section class="contact w-100">
		    <div class="container">
		        <div class="row">
		            <div class="col-sm-12">
		                <h1 class="page-heading"><?php the_title(); ?></h1>
		            </div>
		            <div class="col-lg-6 col-md-6 col-sm-12">
		                <div class="contact-content">
		                    <?php the_content(); ?>
		                </div>
		                <div class="contact-address">
		                    <div class="row">
		                        <div class="col-lg-6 col-md-6 col-sm-12">
		                            <p><!-- <strong>Telephone:</strong> <a href="tel:<?php //the_field('phone_number'); ?>"><?php //the_field('phone_number'); ?></a><br> --><strong>Email:</strong> <a href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a></p>
		                        </div>
		                        <div class="col-lg-6 col-md-6 col-sm-12">
		                            <p><strong>Address:</strong><br> <?php the_field('contact_address'); ?></p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="col-lg-6 col-md-6 col-sm-12">
		                <div class="contactform">
		                   <?php echo do_shortcode('[contact-form-7 id="136" title="Contact-us"]'); ?>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>
		<!--#Contact Us End-->
		<section class="contact w-100">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12">
	                    <h1 class="page-heading"><?php the_field('faq_title'); ?></h1>
	                </div>
	            </div>
	            <div class="row">
	            	<?php echo do_shortcode('[faqs]'); ?>
	            </div>
	        </div>
    	</section>



<?php 

		endwhile;
	endif;
get_footer();