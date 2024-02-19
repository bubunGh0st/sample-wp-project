<?php
get_header();
$description = get_the_archive_description();

$shop_page_id = wc_get_page_id('shop');
	
 if( has_post_thumbnail($shop_page_id) ) {
		$image = get_the_post_thumbnail_url($shop_page_id,'full');
	?>
	<section class="innerheader w-100" style="background-image: url('<?php echo $image; ?>');"></section>
	<?php } else { ?>
	<section class="innerheader w-100" style="background-image: url('https://projects.flyonit.com/homeodynamic/wp-content/uploads/2023/01/Inner-banner03.jpg');"></section>
	<?php } ?>
	<!--#Inner-header End-->
	<!--#Contact Us Start-->

	


	<section class="team w-100">
	    <div class="container">
	    	<div class="row">
	            <div class="col-sm-12 text-center">
	            	<?php 
            			$page = get_page_by_title( 'Products' );
						//echo get_the_title($page->ID); 
					?>	
	                <h1 class="page-heading"><?php echo str_replace('Product Category:', '', get_the_title($page->ID)); ?></h1>
	                <span class="cart-icon"><?php echo do_shortcode('[woo_cart_but]'); ?></span>
	            </div>
	            <div class="col-lg-12 col-md-12 col-sm-12">
	                <div class="inner-content text-center">
	                    <p><?php echo $description; ?></p>
	                </div>
	            </div>
	        </div>

	        <div class="row">
	        	
	        	<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<?php 

						get_template_part( 'template-parts/content/content-product');
						//wc_get_template_part( 'content', 'product' );
					 ?>
				<?php endwhile; ?>
				
				
	        </div>
	    </div>
	</section>


	




<?php 
	

get_footer(); 
