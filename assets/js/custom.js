"use strict";

/*==================
    Menu
===================*/
jQuery(function(jQuery) {
    jQuery('.hamburger-box').on('click', function() {
        jQuery(this).parent().toggleClass('is-active');
        jQuery('.homeochakra-nav__sup.homeochakra-mobile-menu').slideToggle();
        //jQuery('.homeochakra__sup').toggleClass('is-active');
    });
    jQuery('.homeochakra-nav__sup ul > li > ul').parent().prepend('');

    function subMenu() {
        jQuery(this).parent('li').find('> ul').stop(true, true).slideToggle();
        jQuery(this).parents('li').siblings().find('ul').stop(true, true).slideUp();
        jQuery(this).toggleClass('actv');
        jQuery(this).parent().siblings().find('.arw-nav').removeClass('actv');
    }
    jQuery('.homeochakra-nav__sup ul > li > .arw-nav').on('click', subMenu);

});


(function(jQuery) {
    jQuery(function() {
        jQuery('nav ul li a:not(:only-child)').click(function(e) {
            jQuery(this).siblings('.nav-dropdown').toggle();
            jQuery('.dropdown').not(jQuery(this).siblings()).hide();
            e.stopPropagation();
        });
        jQuery('html').click(function() {
            jQuery('.nav-dropdown').hide();
        });
        jQuery('#nav-toggle').click(function() {
            jQuery('nav ul').slideToggle();
        });
        jQuery('#nav-toggle').on('click', function() {
            this.classList.toggle('active');
        });
    });
})(jQuery);


var nav = jQuery('.homeochakra-main-header');
var scrolled = false;

jQuery(window).scroll(function() {

    if (300 < jQuery(window).scrollTop() && !scrolled) {
        nav.addClass('visible').animate({
            top: '0px'
        });
        scrolled = true;
    }

    if (300 > jQuery(window).scrollTop() && scrolled) {
        //animates it out of view
        nav.animate({
            top: '-150px'
        });
        //sets it back to default style
        setTimeout(function() {
            nav.removeClass('visible');
        }, 500);
        scrolled = false;
    }
});(jQuery);

// toggle class show hide text section
$(document).on('click', '.toggle-title', function() {
    $(this).parent()
        .toggleClass('toggled-on')
        .toggleClass('toggled-off');
});(jQuery);

jQuery(document).ready(function($) {
        $(window).scroll( function(){
            $('.fadein').each( function(i){                
                var bottom_of_element = $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                
                if( bottom_of_window > bottom_of_element ){
                    $(this).animate({'opacity':'1'},250);
                }
                
            }); 
        });
    });

    jQuery(document).ready(function($) {
        $(window).scroll( function(){
            $('.fadein1').each( function(i){                
                var bottom_of_element = $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                
                if( bottom_of_window > bottom_of_element ){
                    $(this).animate({'opacity':'1'},200);
                }
                
            }); 
        });
    });

    jQuery(document).ready(function($) {
        $(window).scroll( function(){
            $('.fadein2').each( function(i){                
                var bottom_of_element = $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                
                if( bottom_of_window > bottom_of_element ){
                    $(this).animate({'opacity':'1'},600);
                }
                
            }); 
        });
    });

    jQuery(document).ready(function($) {
        $(window).scroll( function(){
            $('.fadein3').each( function(i){                
                var bottom_of_element = $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                
                if( bottom_of_window > bottom_of_element ){
                    $(this).animate({'opacity':'1'},1000);
                }
                
            }); 
        });
    });
    
 /*--- Testimonial Slick Carousel ----*/
    var testimonial = $('.testimonial-three');
    testimonial.owlCarousel({
        loop : true,
        margin : 30,
        nav : false,
        dots : false,
        center : false,
        autoplay : true,
        autoplayTimeout : 3000,
        autoplayHoverPause : true,
        navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
        responsive : {
            0 : {
                items : 1
            },
            767 : {
                items : 1
            },
            992 : {
                items : 1
            },
            1200 : {
                items : 1
            }
        }
    });
    /*--- Testimonial Slick Carousel ----*/

/*--- Team Members Content ---*/

function toggleText(clicked){

    var exprtxt = document.getElementById("expr-con"+clicked);
    var fulltxt = document.getElementById("full-con"+clicked);
    var btntxt = document.getElementById(""+clicked);

    if(exprtxt.style.display === "none"){

        fulltxt.style.display = "none";
        exprtxt.style.display = "block";
        btntxt.innerHTML = "Read More";

    }
    else{

        fulltxt.style.display = "block";
        exprtxt.style.display = "none";
        btntxt.innerHTML = "Read Less";

    }

}
/*--- Team Members Content ---*/