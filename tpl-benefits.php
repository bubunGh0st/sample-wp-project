<?php  
/**
 * Template Name: Benefits
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
    </div>
</section>
<!-- #Page Title End -->
<!--#Services Categories Start-->
<div class="container w-100">
    <?php
 
        //Display categories of custom post types
         
        $terms = get_terms(
                 array(
                        'taxonomy'      => 'service_categories', // Custom Post Type Taxonomy Slug
                        'hide_empty'    => false,
                        'order'         => 'ASC',
                        'orderby'       => 'id',
                    )
                 );

       $i = 0; foreach ($terms as $term){

            $image = get_field('category_image', $term);
            $size = 'full';

            $descr = get_field('category_content', $term);

    ?>
    <?php if( $i%2 == 0 ){ ?>
    <div class="row">
        <div class="col-sm-12"><h2 class="sub-heading"><?php echo $term->name; ?></h2></div>
        <div class="col-sm-8 animate__animated animate__fadeInLeft">
            <p class="services-twoclm"><?php if($descr){ echo $descr; } else{ echo $term->description; } ?></p>
        </div>
        <div class="col-sm-4 animate__animated animate__fadeInRight">
            <img class="services-circle-img" src="<?php echo wp_get_attachment_image_url($image, $size); ?>" alt="<?php echo $term->name; ?>">
        </div>
    </div>
    <?php }else{ ?>
    <div class="row">
        <div class="col-sm-12"><h2 class="sub-heading"><?php echo $term->name; ?></h2></div>
        <div class="col-sm-4 animate__animated animate__fadeInLeft">
            <img class="services-circle-img" src="<?php echo wp_get_attachment_image_url($image, $size); ?>" alt="<?php echo $term->name; ?>">
        </div>
        <div class="col-sm-8 animate__animated animate__fadeInRight">
            <p class="services-twoclm"><?php if($descr){ echo $descr; } else{ echo $term->description; } ?></p>
        </div>
    </div>
    <?php } $i++; } ?>
</div>
<!--#Services Categories End-->
<!--#Testimonial Start-->
<section id="testimonial" class="position-relative testimonailbg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 fadein">
                <h2 class="sub-heading text-center"><?php echo $homeo_chakra['section-headings-7'] ?></h2>
            </div>
        </div>
        <?php echo do_shortcode('[testimonial]'); ?>
    </div>
</section>
<!--#Testimonial End-->
<!-- #Disclaimer Button Start -->
<section class="contact w-100">
    <div class="container fadein services-btm-margin">
        <div class="row">
            <div class="vision-content text-center">
                <a href="<?php echo $homeo_chakra['vision-btn-link'] ?>" class="btn booknow"><?php echo $homeo_chakra['vision-btn-txt'] ?></a>
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
