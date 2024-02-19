<?php 

//Load Stylesheet

function homeo_add_style(){

	// Bootstrap
	wp_register_style('homeo-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 1, 'all');
	wp_enqueue_style('homeo-bootstrap');

	// Font Awesome
	wp_register_style('homeo-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css", array(), 1, 'all');
	wp_enqueue_style('homeo-awesome');

	//Animate CDN
	wp_register_style('homeo-animate', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css", array(), 1, 'all');
	wp_enqueue_style('homeo-animate');

	//Owl Carousel
	wp_register_style('homeo-owl', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", array(), 1, 'all');
	wp_enqueue_style('homeo-owl');

	//main styel sheet
	wp_register_style('homeo-main', get_template_directory_uri() . '/style.css', array(), 1, 'all');
	wp_enqueue_style('homeo-main');

	// Custom CSS
	wp_register_style('homeo-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), 1, 'all');
	wp_enqueue_style('homeo-custom');

}
add_action('wp_enqueue_scripts', 'homeo_add_style');


//Load Scripts
function homeo_addscript(){

	//Jquery
	wp_register_script('homeo-jqmain', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), 1, 1, 1);
	wp_enqueue_script('homeo-jqmain');

	//Bootstrap JS
	wp_register_script('homeo-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1, 1, 1);
	wp_enqueue_script('homeo-bootstrapjs');

	//Owl JS
	wp_register_script('homeo-owljs', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", array(), 1, 1, 1);
	wp_enqueue_script('homeo-owljs');

	//Custom JS
	wp_register_script('homeo-customjs', get_template_directory_uri() . '/assets/js/custom.js', array(), 1, 1, 1);
	wp_enqueue_script('homeo-customjs');

}
add_action('wp_enqueue_scripts', 'homeo_addscript');
