var APP_IOTec = {

    /*
     * -- owlcarousel2 --
     * https://owlcarousel2.github.io/OwlCarousel2/
     */
    owlCarousel: function () {

        if($.fn.owlCarousel) {
            $('.owl-carousel').each(function () {

                var responsive = $(this).data('responsive') != undefined
                    ? $(this).data('responsive')
                    : true;
                var nav  = $(this).data('nav') || false,
                    dots = $(this).data('dots') || false,
                    loop = $(this).data('loop') != undefined
                        ? $(this).data('loop')
                        : false,
                    autoplay = $(this).data('autoplay') != undefined
                        ? $(this).data('autoplay')
                        : true,
                    autoplayTimeout = $(this).data('autoplay-timeout') || 3000;

                var options = {
                    // rtl:true,
                    items: 1,
                    loop: loop,
                    margin: 10,
                    nav: nav,
                    navContainerClass: "owl-nav text-center",
                    navText: ["<i class='material-icons'>navigate_before</i>","<i class='material-icons'>navigate_next</i>"],
                    dots: dots,
                    center:false,
                    autoplay: autoplay,
                    autoplayTimeout: autoplayTimeout,
                    autoplayHoverPause:true,
                };

                if(responsive)
                    options.responsive = {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 5
                        }
                    };

                $(this).owlCarousel(options);
            })
        }
    },

    scrollToAnchor: function (aid) {

       $('#navigation a.nav-link, .carousel-inner .buttons a').click(function () {
           var Tag = $($(this).attr('href'));
           $('html,body').animate({ scrollTop: Tag.offset().top }, 'slow');
        })
    },

    /*
     * -- nicescroll --
     * https://nicescroll.areaaperta.com/
     */
    nicescroll: function() {

        if($.fn.niceScroll) {

            $('.nicescroll').niceScroll({
                // cursorwidth: '10px',
                cursorcolor:"#9c27b0",
                scrollspeed: 40,
                autohidemode: true,
                zindex: 999
            });

            $('body').on('mouseenter','.nicescroll', function () {
                $(this).getNiceScroll().resize();
            });
        }
    },

    /*
     * -- bootstrap --
     * https://getbootstrap.com/docs/4.0/components/dropdowns/
     */
    dropdownMenu: function() {

        $('.dropdown-menu-prevent-close').click(function(e) {
            e.stopPropagation();
        });
    },

    initApp: function () {
        APP_IOTec.owlCarousel();
        APP_IOTec.scrollToAnchor();
        APP_IOTec.nicescroll();
        APP_IOTec.dropdownMenu();
    },
}

$(function () {

    APP_IOTec.initApp();
});
