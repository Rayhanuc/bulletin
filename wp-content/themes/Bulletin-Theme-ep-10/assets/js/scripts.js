/* ---------------------------------------------
 common scripts
 --------------------------------------------- */

;(function ($) {

    "use strict"; // use strict to start

    $(document).ready(function () {


        /* ---------------------------------------------
         slider post
         --------------------------------------------- */
        $('.ha-slider').owlCarousel({
            loop:true,
            margin:0,
            autoplay: true,
            nav:true,
            dots: false,
            navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });

        $('.ads-slider').owlCarousel({
            loop:true,
            margin:0,
            autoplay: true,
            autoplayTimeout: 5000,
            nav:false,
            dots: false,
            animateOut: 'fadeOut',
            // navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });

        /* ---------------------------------------------
         lightbox popup
         --------------------------------------------- */
        $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
            disableOn: 300,
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    });

})(jQuery);