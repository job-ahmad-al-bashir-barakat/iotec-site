var APP_IOTec = {

    /*
     * -- owlcarousel2 --
     * https://owlcarousel2.github.io/OwlCarousel2/
     */
    owlCarousel: function () {

        if($.fn.owlCarousel) {
            $('.owl-carousel').owlCarousel({
                // rtl:true,
                items: 1,
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                autoplay:true,
                autoplayTimeout:3000,
                autoplayHoverPause:true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
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

    initApp: function () {
        APP_IOTec.owlCarousel();
        APP_IOTec.scrollToAnchor();
        APP_IOTec.nicescroll();
    },
}

$(function () {

    APP_IOTec.initApp();
});
