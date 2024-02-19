<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


get_header(); 

if( has_post_thumbnail() ) {
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');

?>
<section class="innerheader w-100" style="background-image: url('<?php echo $image[0]; ?>');"></section>
    <?php } else { ?>
<section class="innerheader w-100" style="background-image: url('https://projects.flyonit.com/homeodynamic/wp-content/uploads/2023/01/Inner-banner03.jpg');"></section>
<?php } ?>
<!--#Inner-header End-->

<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>

<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>

<section class="single-product w-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-heading"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="product-img-pic"><img src="<?php echo $url; ?>" alt="<?php the_title(); ?>"></div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="product-info">
                    <?php the_content(); ?>
                </div>
                <div class="product-info">
                    <span class="in-stock"><?php echo ucfirst($product->get_stock_status()); ?></span>
                </div>
                <div class="product-info">
                	<?php 
                		$price = $product->get_sale_price();
                		if($price){
                	?>
                    <span class="sale-price">$<span><?php echo $product->get_regular_price(); ?></span></span>
                    <span class="price">$<span><?php echo $price; ?></span></span>
                	<?php }else{ ?>
                	<span class="price">$<span><?php echo $product->get_regular_price(); ?></span></span>
                	<?php } ?>
                </div>
                <!-- <div class="product-info">
                    <div class="product-rating">
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li class="gray"><i class="fa-solid fa-star"></i></li>
                            <li class="gray"><i class="fa-solid fa-star"></i></li>
                            <li class="gray"><i class="fa-solid fa-star"></i></li>
                            <li class="review">(2 customer reviews)</li>
                        </ul>
                    </div>
                </div> -->
                <div class="product-info">
                    <div class="form-group quantity">
                        <form action="<?php echo wc_get_cart_url(); ?>" method="post" class="cart" enctype="multipart/form-data">
                            <label class="control-label">Quantity <span class="form-required" id="quantity" title="This field is required.">*</span></label>
                            <input class="form-control form-text required qty" type="number" id="quantity" name="quantity" value="1" size="5" maxlength="6">
                            <button class="add-to-cart btn btn-success" type="submit" id="<?php echo $product->get_id(); ?>" name="add-to-cart" value="<?php echo $product->get_id(); ?>"><span><i class="fa-solid fa-plus"></i></span> Add to cart</button>
                        </form>
                        
                    </div>
                </div>
                <!-- <div class="product-enquiry toggled-off">
                    <div class="toggle-title">
                        <i class="fa fa-angle-down fa-fw"></i> 
                        <i class="fa fa-angle-up fa-fw"></i> 
                        <h2 class="product-enquiry-title">Product Enquiry</h2>
                    </div>
                    <div class="toggle-content product-enquiry-form">
                        <form action="" method="post" id="product-enquiry" accept-charset="UTF-8">
                            <div class="form-group mb-3">
                                <label class="form-label" for="edit-submitted-name">Name <span class="form-required" title="This field is required.">*</span></label>
                                <input required="required" class="form-control form-text required" type="text" id="edit-submitted-name" name="submitted[name]" value="" size="60" maxlength="128">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="edit-submitted-email-address">Email Address <span class="form-required" title="This field is required.">*</span></label>
                                <input required="required" class="email form-control form-text form-email required" type="email" id="edit-submitted-email-address" name="submitted[email_address]" size="60">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="edit-submitted-message">Message <span class="form-required" title="This field is required.">*</span></label>
                                <textarea required="required" class="form-control form-textarea required" id="edit-submitted-message" name="submitted[message]" cols="60" rows="5"></textarea>
                            </div>
                            <input type="submit" value="Submit Enquiry">
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>