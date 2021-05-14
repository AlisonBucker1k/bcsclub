/*---------------------------------------------
Template name:  Listhub
Item Description: Listhub - Directory & Listing HTML Template
Version:        1.0
Author:         TechyDevs
Author Email:   contact@tecydevs.com

[Table of Content]

01: Preloader
02: side-widget-menu
02: Mobile Menu Open Control
03: Mobile Menu Close Control
04: Side user panel menu Open Control
05: Back to Top Button and Navbar Scrolling Effects
06: back to top button click control
07: most-visited-wrap
08: Client logo slider
09: client-testimonial
10: gallery-carousel
11: Fancybox js
12: Daterangepicker
13: Quantity number increment control
14: Quantity number decrement control
15: Tooltip
17: Counter up
----------------------------------------------*/

(function ($) {
    "use strict";

    var $window = $(window);

    $window.on('load', function () {

        var $document = $(document);
        var $dom = $('html, body');
        var preloader = $('.loader-container');
        var dropdownMenu = $('.main-menu-content .dropdown-menu-item');
        var userChosenSelect = $('.user-chosen-select');
        var isMenuOpen = false;
        var numberCounter = $('.counter');
        var userTextEditor = $('.user-text-editor');
        var backToTopBtn = $('#back-to-top');
        var cardCarousel = $('.card-carousel');
        var cardCarouselTwo = $('.card-carousel-2');
        var cardCarouselThree = $('.card-carousel-3');
        var clientLogoCarousel = $('.client-logo');
        var testimonialCarousel = $('.testimonial-carousel');
        var galleryCarousel = $('.gallery-carousel');
        var dateDropperPicker = $('.date-dropper-input');
        var fullScreenSlider = $('.full-screen-slider');
        var onlineUserSlider = $('.online-user-slider');
        var emojiPicker = $('.emoji-picker');
        var scrollLink = $('#sticky-content-nav .scroll-link');
        var singleSlider = $('.single-slider');
        var jsTilt = $('.js-tilt');
        var jsTiltTwo = $('.js-tilt-2');
        var lazyLoading = $('.lazy');


        /* ======= Preloader ======= */
        preloader.delay('500').fadeOut(2000);

        /*====  sidebar menu =====*/
        $document.on('click', '#sidebarToggleTop', function () {
            $('.dashboard-sidebar').addClass('sidebar-is-active');
        });

        /*====  sidebar menu =====*/
        $document.on('click', '#sidebar-close', function () {
            $('.dashboard-sidebar').removeClass('sidebar-is-active');
        });

        /*=========== Mobile Menu Open Control ============*/
        $document.on('click','.menu-toggle', function () {
            $(this).toggleClass('active');
            $('.main-menu-content').slideToggle(200);
        });

        /*=========== Dropdown menu ============*/
        dropdownMenu.parent('li').children('a').append(function() {
            return '<span class="drop-menu-toggle"><i class="la la-plus"></i></span>';
        });

        /*=========== Dropdown menu ============*/
        $document.on('click', '.drop-menu-toggle', function() {
            var Self = $(this);
            Self.toggleClass('active');
            Self.parent().parent().children('.dropdown-menu-item').toggle();
            return false;
        });

        /*=========== When window will resize then this action will work ============*/
        $window.on('resize', function () {
            if ($window.width() > 1200) {
                $('.main-menu-content').show();
                $('.dropdown-menu-item').show();
            }else {
                if (isMenuOpen) {
                    $('.main-menu-content').show();
                    $('.dropdown-menu-item').show();
                }else {
                    $('.main-menu-content').hide();
                    $('.dropdown-menu-item').hide();
                }
            }
        });

        /*=========== Side user panel menu Open Control ============*/
        $document.on('click','.header-search', function () {
            $(this).toggleClass('active');
        });

        $document.on("click", function(event){
            var $trigger = $(".header-search");
            if($trigger !== event.target && !$trigger.has(event.target).length){
                $(".header-search").removeClass("active");
            }
        });

        /*===== Back to Top Button and Navbar Scrolling Effects ======*/
        $window.on('scroll', function() {
            //header fixed animation and control
            if($window.scrollTop() > 10) {
                $('.header-menu-wrapper').addClass('header-fixed');
                $('.header-top-bar').hide(200);
            }else{
                $('.header-menu-wrapper').removeClass('header-fixed');
                $('.header-top-bar').show(200);
            }

            //back to top button control
            if ($window.scrollTop() > 300) {
                $(backToTopBtn).addClass('btn-active');
            } else {
                $(backToTopBtn).removeClass('btn-active');
            }

            //page scroll position
            findPosition();

        });

        /*===== back to top button click control ======*/
        $document.on("click", '#back-to-top', function() {
            $($dom).animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        /*==== card-carousel =====*/
        if ($(cardCarousel).length) {
            $(cardCarousel).owlCarousel({
                loop: true,
                items: 3,
                nav: true,
                dots: true,
                smartSpeed: 700,
                autoplay: false,
                center: true,
                margin: 30,
                navText: ["<i class=\"la la-arrow-left\"></i>", "<i class=\"la la-arrow-right\"></i>"],
                responsive : {
                    // breakpoint from 0 up
                    0 : {
                        items: 1
                    },
                    // breakpoint from 992 up
                    992 : {
                        items: 3
                    }
                }
            });
        }

        /*==== card-carousel-2 =====*/
        if ($(cardCarouselTwo).length) {
            $(cardCarouselTwo).owlCarousel({
                loop: true,
                items: 4,
                nav: false,
                dots: true,
                smartSpeed: 700,
                autoplay: false,
                margin: 30,
                responsive : {
                    // breakpoint from 0 up
                    0 : {
                        items: 1
                    },
                    // breakpoint from 600 up
                    600 : {
                        items: 3
                    },
                    // breakpoint from 1200 up
                    1200 : {
                        items: 4
                    }
                }
            });
        }

        /*==== card-carousel-3 =====*/
        if ($(cardCarouselThree).length) {
            $(cardCarouselThree).owlCarousel({
                loop: true,
                items: 2,
                nav: false,
                dots: true,
                smartSpeed: 700,
                autoplay: false,
                margin: 30,
                responsive : {
                    // breakpoint from 0 up
                    0 : {
                        items: 1
                    },
                    // breakpoint from 600 up
                    600 : {
                        items: 2
                    }
                }
            });
        }

        /*==== Client logo =====*/
        if ($(clientLogoCarousel).length) {
            $(clientLogoCarousel).owlCarousel({
                loop: true,
                items: 6,
                nav: false,
                dots: false,
                smartSpeed: 700,
                autoplay: true,
                responsive : {
                    // breakpoint from 0 up
                    0 : {
                        items: 1
                    },
                    // breakpoint from 425 up
                    425 : {
                        items: 2
                    },
                    // breakpoint from 480 up
                    480 : {
                        items: 2
                    },
                    // breakpoint from 767 up
                    767 : {
                        items: 4
                    },
                    // breakpoint from 992 up
                    992 : {
                        items: 6
                    }
                }
            });
        }

        /*==== testimonial-carousel =====*/
        if ($(testimonialCarousel).length) {
            $(testimonialCarousel).owlCarousel({
                loop: true,
                items: 3,
                center: true,
                nav: true,
                dots: true,
                smartSpeed: 700,
                autoplay: false,
                margin: 10,
                navText: ["<i class=\"la la-arrow-left\"></i>", "<i class=\"la la-arrow-right\"></i>"],
                responsive : {
                    // breakpoint from 0 up
                    0 : {
                        items: 1
                    },
                    // breakpoint from 768 up
                    768 : {
                        items: 2
                    },
                    // breakpoint from 992 up
                    992 : {
                        items: 3
                    }
                }
            });
        }

        /*==== gallery-carousel =====*/
        if ($(galleryCarousel).length) {
            $(galleryCarousel).owlCarousel({
                loop: true,
                items: 1,
                nav: true,
                dots: true,
                smartSpeed: 700,
                autoplay: false,
                dotsData: true,
                navText: ["<span class=\"la la-chevron-left\"></span>", "<span class=\"la la-chevron-right\"></span>"]
            });
        }

        /*==== Date dropper picker =====*/
        if ($(dateDropperPicker).length) {
            $(dateDropperPicker).dateDropper({
                format: 'd-m-Y',
                theme: 'vanilla',
                large: true,
                largeDefault: true,
            })
        }

        /*==== Full screen slider =====*/
        if ($(fullScreenSlider).length) {
            $(fullScreenSlider).owlCarousel({
                loop: false,
                items: 4,
                nav: true,
                dots: false,
                smartSpeed: 700,
                autoplay: false,
                margin: 5,
                navText: ["<span class=\"la la-arrow-left\"></span>", "<span class=\"la la-arrow-right\"></span>"],
                responsive : {
                    // breakpoint from 0 up
                    0 : {
                        items: 1,
                        autoplay: true,
                    },
                    // breakpoint from 768 up
                    768 : {
                        items: 2,
                        autoplay: true,
                    },
                    // breakpoint from 992 up
                    992 : {
                        items: 4
                    }
                }
            });
        }

        /*==== Online user slider =====*/
        if ($(onlineUserSlider).length) {
            $(onlineUserSlider).owlCarousel({
                loop: false,
                items: 4,
                nav: true,
                dots: false,
                smartSpeed: 700,
                autoplay: false,
                margin: 5,
                navText: ["<span class=\"la la-angle-left\"></span>", "<span class=\"la la-angle-right\"></span>"],
            });
        }

        /*==== Single slider =====*/
        if ($(singleSlider).length) {
            $(singleSlider).owlCarousel({
                loop: true,
                items: 1,
                nav: true,
                dots: true,
                smartSpeed: 700,
                autoplay: false,
                navText: ["<span class=\"la la-angle-left\"></span>", "<span class=\"la la-angle-right\"></span>"]
            });
        }

        /*==== Quantity number =====*/
        $('.qtyDec, .qtyInc').on('click', function () {
            var $this = $(this);
            var oldValue = $this.parent().find('input[type="text"]').val();

            if ($this.hasClass('qtyInc')) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            $this.parent().find('input[type="text"]').val(newVal);
        });

        /*==== Chosen select =====*/
        if ($(userChosenSelect).length) {
            $(userChosenSelect).chosen({
                no_results_text: "Oops, nothing found!",
                allow_single_deselect: true
            });
        }

        $(userChosenSelect).on('chosen:showing_dropdown', function(event, params) {
            var chosen_container = $( event.target ).next( '.chosen-container' );
            var dropdown = chosen_container.find( '.chosen-drop' );
            var dropdown_top = dropdown.offset().top - $(window).scrollTop();
            var dropdown_height = dropdown.height();
            var viewport_height = $(window).height();

            if ( dropdown_top + dropdown_height > viewport_height ) {
                chosen_container.addClass( 'chosen-drop-up' );
            }
        });

        $(userChosenSelect).on('chosen:hiding_dropdown', function(event, params) {
            $( event.target ).next( '.chosen-container' ).removeClass( 'chosen-drop-up' );
        });

        /*==== Counter up =====*/
        if ($(numberCounter).length) {
            $(numberCounter).counterUp({
                delay: 10,
                time: 1000
            });
        }

        /*==== jqte text editor =====*/
        if ($(userTextEditor).length) {
            $(userTextEditor).jqte({
                placeholder: "Detail description about of your listing",
                formats: [
                    ["p","Paragraph"],
                    ["h1","Heading 1"],
                    ["h2","Heading 2"],
                    ["h3","Heading 3"],
                    ["h4","Heading 4"],
                    ["h5","Heading 5"],
                    ["h6","Heading 6"],
                    ["pre","Preformatted"]
                ]
            });
        }

        /*==== Open now filter btn =====*/
        $document.on('click', '.open-filter-btn', function (e) {
            e.preventDefault();
            $(this).toggleClass('active');
        });

        /*==== js-tilt =====*/
        if ($(jsTilt).length) {
            $(jsTilt).tilt({
                maxTilt: 1,
            });
        }
        if ($(jsTiltTwo).length) {
            $(jsTiltTwo).tilt({
                maxTilt: 4,
            });
        }

        /*==== data-fancybox =====*/
        $('[data-fancybox]').fancybox();


        /*==== emoji-picker =====*/
        if ($(emojiPicker).length) {
            $(emojiPicker).emojioneArea({
                pickerPosition: "top"
            });
        }

        /*====  Tooltip =====*/
        $('[data-toggle="tooltip"]').tooltip();

        /*======= ui price range slider ========*/
        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 50, 290 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
            " - $" + $( "#slider-range" ).slider( "values", 1 ) );

        /*=========== bookmark btn ============*/
        $document.on('click', '.bookmark-btn', function () {
            $(this).toggleClass('active');
        });

        /*=========== modal ============*/
        $document.on('click', '.login-btn', function () {
            $('.login-form').modal('show');
            $('.signup-form, .message-form').modal('hide');
        });
        $document.on('click', '.signup-btn', function () {
            $('.login-form, .recover-form').modal('hide');
            $('.signup-form').modal('show');
        });
        $document.on('click', '.lost-pass-btn', function () {
            $('.login-form').modal('hide');
            $('.recover-form').modal('show');
        });

        /*=========== Google map ============*/
        if($("#map").length) {
            initMap('map', 40.717499, -74.044113, 'images/map-marker.png');
        }

        /*======== Rating Overview ===========*/
        function ratingOverview(ratingElem) {

            $(ratingElem).each(function() {
                var dataRating = $(this).attr('data-rating');

                // Rules
                if (dataRating >= 4.0) {
                    $(this).addClass('high');
                    $(this).find('.review-bars-review-inner').css({ width: (dataRating/5)*100 + "%", });
                } else if (dataRating >= 3.0) {
                    $(this).addClass('mid');
                    $(this).find('.review-bars-review-inner').css({ width: (dataRating/5)*80 + "%", });
                } else if (dataRating < 3.0) {
                    $(this).addClass('low');
                    $(this).find('.review-bars-review-inner').css({ width: (dataRating/5)*60 + "%", });
                }

            });
        } ratingOverview('.review-bars-review');

        $(window).on('resize', function() {
            ratingOverview('.review-bars-review');
        });

        /*=========== Payment Method Accordion ============*/
        var radios = document.querySelectorAll('.payment-tab-toggle > input');

        for (var i = 0; i < radios.length; i++) {
            radios[i].addEventListener('change', expandAccordion);
        }

        function expandAccordion (event) {
            var allTabs = document.querySelectorAll('.payment-tab');
            for (var i = 0; i < allTabs.length; i++) {
                allTabs[i].classList.remove('is-active');
            }
            event.target.parentNode.parentNode.classList.add('is-active');
        }

        /*========== Page scroll ==========*/
        scrollLink.on('click',function(e){
            var target = $($(this).attr('href'));

            $($dom).animate({
                scrollTop:target.offset().top
            },600);

            $(this).addClass('active');

            e.preventDefault();
        });

        function findPosition (){
            $('.page-scroll').each(function(){
                if(($(this).offset().top - $(window).scrollTop()) < 20){
                    scrollLink.removeClass('active');
                    $('#sticky-content-nav').find('[data-scroll="'+ $(this).attr('id') +'"]').addClass('active');
                }
            });
        }

        /*========== Lazy loading ==========*/
        if ($(lazyLoading).length) {
            $(lazyLoading).Lazy();
        }

    });

})(jQuery);

