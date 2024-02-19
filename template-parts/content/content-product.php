<?php 
    global $post;
    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' );

    $id = $post->ID;
    $product = get_product($id);
    $price = $product->get_sale_price();

    //echo $price;

?>

<div class="col-lg-4 col-md-4 col-sm-12">
    <div class="team-member">
        <div class="team-image">
            <?php if($price){ ?>
            <span class="onsale">Sale!</span>
            <img src="<?php echo $url; ?>" alt="Team">
            <?php } else{ ?>
            <img src="<?php echo $url; ?>" alt="Team">
            <?php } ?> 
        </div>
        <h4><?php echo $post->post_title; ?></h4>
        <div class="team-content vision-content">
            <p><?php echo substr($post->post_excerpt, 0,70) . '...'; ?></p>
            <a href="<?php the_permalink() ?>" class="btn booknow">Read More</a>
            <?php echo do_shortcode( '[add_to_cart id='.$id.']' ); ?>
            <!-- <a href="<?php echo $add_to_cart; ?>" class="btn booknow"><i class="fa fa-cart-shopping"></i></a> -->
        </div>
    </div>
</div>