<?php
get_header();
	if(have_posts()) :
		while (have_posts()) : the_post();
?>
	<?php if( has_post_thumbnail() ) {
		$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
	?>
	<section class="innerheader w-100" style="background-image: url('<?php echo $image[0]; ?>');"></section>
	<?php } else { ?>
	<section class="innerheader w-100" style="background-image: url('https://projects.flyonit.com/homeodynamic/wp-content/uploads/2023/01/Inner-banner01.jpg');"></section>
	<?php } ?>
	<!--#Inner-header End-->
	<!--#Main Body Start-->
	<?php

		$img = get_field('upload_image');
		$size = 'full';
		 if($img){

	?>
	<section class="contact w-100">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="page-heading"><?php the_title(); ?></h1>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="bdy-img">
						<img src="<?php echo wp_get_attachment_image_url( $img, $size ); ?>">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="inner-content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php } else { ?>
	<section class="contact w-100">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="page-heading"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</section>
	<section class="about-outer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="inner-content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>

<?php 
		endwhile;
	endif;

get_footer(); 

?>