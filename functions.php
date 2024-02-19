<?php

//Dynamic Title
add_theme_support('title-tag');

//Activate Feature Image
add_theme_support('post-thumbnails');

//Active widgets
add_theme_support('widgets');

//Active Woocommerce Support
add_theme_support( 'woocommerce' );

//Loading stylesheet
require_once('include/stylesheet.php');

//Loading Redux settings
require_once('redux/homeo-config.php');

//Loading Menu Settings
require_once('include/menu.php');

//Loading Custom Post types
require_once('include/custom_post.php');

//Loading Custom Shortcodes
require_once('include/custom_shortcode.php');

//Loading Cart Icon Shortcode
require_once('include/cart_icon.php');


//Products Orderby on Product Page
function homeo_product_view_oreder( $sort_by ) {
	return 'ASC';
}
add_filter( 'woocommerce_default_catalog_orderby', 'homeo_product_view_oreder' );


//Adding Attribute to fetch link in CF7 shorcode 
function custom_shortcode_atts_wpcf7_filter( $out, $pairs, $atts ) {
  $my_attr = 'ebook_link';
 
  if ( isset( $atts[$my_attr] ) ) {
    $out[$my_attr] = $atts[$my_attr];
  }
 
  return $out;
}
add_filter( 'shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3 );

//Floating Book Now Button
function homeo_floating_bknow_button() {
    ?>
       <a href="https://projects.flyonit.com/homeodynamic/appointment-2/" class="flting-btn floating-bknow-btn">Book Now</a>
    <?php
}
add_action( 'wp_footer', 'homeo_floating_bknow_button');


/*function attach_ebook_to_email( $mail ) {
	//$id = $wpcf7->id();
	//if ($id==596){
    $submission = WPCF7_Submission::get_instance();
    if ( $submission ) {
        $posted_data = $submission->get_posted_data();
        $ebook_link = $posted_data['ebook_link'];
        if ( $ebook_link ) {
           // $ebook_path = $_SERVER['DOCUMENT_ROOT'] . $ebook_link;
            $mail['attachments'][] = $ebook_link;
        }
    }
    return $mail;
	
}
add_filter( 'wpcf7_mail_components', 'attach_ebook_to_email' );*/
