<?php
/**
 * Template Name: Login
 *
 * See documentation for how to override the PMPro templates.
 * @link https://www.paidmembershipspro.com/documentation/templates/
 *
 * @version 2.0
 *
 * @author Paid Memberships Pro
 */

get_header();

    if(have_posts()) :
        while (have_posts()) : the_post();

?>
<!-- <section class="w-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if( has_post_thumbnail() ) {
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                ?>
                <img src="<?php echo $image[0]; ?>" class="img-responsive inner-header" title="<?php the_title(); ?>">
                <?php } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-story-inner-banner.jpg" title="Our Story" class="img-responsive inner-header">
                <?php } ?>
            </div>
        </div>
    </div>
</section> -->
<?php if( has_post_thumbnail() ) {
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    ?>
    <section class="innerheader w-100" style="background-image: url('<?php echo $image[0]; ?>');"></section>
    <?php } else { ?>
    <section class="innerheader w-100" style="background-image: url('https://projects.flyonit.com/homeodynamic/wp-content/uploads/2023/01/Inner-banner01.jpg');"></section>
    <?php } ?>
<section class="contact w-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-heading text-center"><?php the_title(); ?></h1>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="inner-content">
                    <?php //echo pmpro_shortcode_login(''); ?>
                    <?php //echo do_shortcode('[pmpro_login]'); ?>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 

        endwhile;
    endif;

get_footer();