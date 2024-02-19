<?php get_header(); ?>

<?php
	/**
	 * Displaying ebooks
	 * from Custom eBook Post Type
	 */ 

	if(have_posts()) :
		while(have_posts()) : the_post();

			$file = get_field('upload_ebooks');
            $url = wp_get_attachment_url( $file );

?>

<section class="ebook-single-bg w-100" style="background-image: url('https://projects.flyonit.com/homeodynamic/wp-content/uploads/2023/01/Inner-banner01.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="page-heading text-center"><?php the_title(); ?></h1>
			</div>
			<div class="col-lg-5 col-md-6 col-sm-12">
				<div class="bdy-img">
					<img src="<?php the_post_thumbnail_url(); ?>">
				</div>
			</div>
			<?php if(is_user_logged_in()){ ?>
			<div class="col-lg-7 col-md-6 col-sm-12">
				<!-- <div class="inner-content">
					<?php //the_content(); ?>
				</div> -->
				<div class="inner-content thankyou-msg text-center">
					<?php the_field('thank_you_message'); ?>
				</div>
				<a id="downloadLink" href="<?php echo esc_html($url); ?>" target="_blank"></a>
			</div>
			<?php } else{ ?>
			<div class="col-lg-7 col-md-6 col-sm-12">
				<div class="contactform subs-form">
					<div class="inner-content subs-content">
						<?php the_content(); ?>
					</div>
					<?php // echo do_shortcode('[contact-form-7 id="596" title="News Test"]'); ?>
					<?php echo do_shortcode('[contact-form-7 id="596" title="Subscription Form" ebook_link="'.$url.'"]'); ?>					
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>

<?php 

		endwhile;
	endif;

get_footer();
?>
<script> 
    window.onload = function() {
        document.getElementById('downloadLink').click();
    }
</script>