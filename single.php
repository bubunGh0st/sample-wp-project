<?php 

get_header(); 

	if(have_posts()) :
		while(have_posts()) : the_post();

?>

		<section class="blog w-100">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-12 col-md-12 col-sm-12">
		                <article class="blog-single">
		                    <div class="blog-banner">
		                    	<?php the_post_thumbnail(); ?>
		                    	<!-- <img src="<?php //echo the_post_thumbnail_url('singlepost-thumb'); ?>" alt="<?php //the_title(); ?>"> -->
		                        <!-- <img src="./assets/images/blog01-banner.jpg" alt="How Does Homeopathy Work?"> -->
		                    </div>
		                    <div class="blog-content-details">
		                        <h1><?php the_title(); ?></h1>
		                        <p><?php the_content(); ?></p>
		                    </div>
		                </article>
		            </div>
		        </div>
		    </div>
		</section>

<?php 

		endwhile;
	endif;


get_footer();