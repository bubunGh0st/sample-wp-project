<?php 
/**
 * Template Name: Levels
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
<!--#Membership level Start-->
<section class="contact w-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-heading text-center"><?php the_title(); ?></h1>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="pricing-box">
                    <h2><?php the_field('basic_package'); ?></h2>
                    <h3><?php the_field('basic_price'); ?></h3>
                    <?php the_field('basic_desc'); ?>
                    <a href="<?php esc_attr( the_field('basic_url') ); ?>" class="btn select-button">Select</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="pricing-box">
                    <h2><?php the_field('standard_package'); ?></h2>
                    <div class="pricing">
                        <span class="currency">$</span>
                        <span class="amount"><?php the_field('stander_price'); ?></span> 
                        <small>per Year</small>
                    </div>
                    <?php the_field('stander_desc'); ?>
                    <a href="<?php esc_attr( the_field('standard_url') ); ?>" class="btn select-button">Select</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="pricing-box">
                    <h2><?php the_field('premium_package'); ?></h2>
                    <div class="pricing">
                        <span class="currency">$</span>
                        <span class="amount"><?php the_field('premium_price'); ?></span> 
                        <small>per Year</small>
                    </div>
                    <?php the_field('premium_desc'); ?>
                    <a href="<?php esc_attr( the_field('premium_url') ); ?>" class="btn select-button">Select</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--#Membership level End-->

<?php 

        endwhile;
    endif;

get_footer();