<?php

get_header();

	if ( is_home() && ! is_front_page() ){

		$myposts = get_page_by_title( 'blog', '', 'page' );
		$image = wp_get_attachment_image_src(get_post_thumbnail_id($myposts->ID), 'full');

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
	<!--#blog Start-->
	<section class="blog w-100">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="page-heading"><?php single_post_title(); ?></h1>
				</div>
				<?php } ?>
			</div>
			<div class="row">
				<?php
					if (have_posts()) :
						while (have_posts()) : the_post();
				?>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<article class="blog-item">
						<div class="blog-pic">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="blog-content">
							<h4><?php the_title(); ?></h4>
							<h6><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date('d-m-Y') ?></h6>
							<p><?php echo substr(get_the_excerpt(), 0, 120); ?></p>
							<a href="<?php the_permalink(); ?>" class="readmore">Read More <span class="more">»</span></a>
						</div>
					</article>
				</div>
				<?php

						endwhile;
					endif; 

				?>
				<div class="col-lg-12 col-md-12 col-sm-12">

					<?php homeo_blog_pagination(); ?>

				</div>
			</div>
		</div>
	</section>
	<!--#blog End-->

<?php get_footer(); ?>