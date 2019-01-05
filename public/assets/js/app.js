var APP_IOTec = {
    owlCarousel: function () {

        $('.owl-carousel').owlCarousel({
            // rtl:true,
            items: 1,
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
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
    },

    scrollToAnchor: function (aid) {
       $('#navigation a.nav-link, .carousel-inner .buttons a').click(function () {
           var Tag = $($(this).attr('href'));
           $('html,body').animate({ scrollTop: Tag.offset().top }, 'slow');
        })
    },

    initApp: function () {
        APP_IOTec.owlCarousel();
        APP_IOTec.scrollToAnchor();
    }
}

$(function () {

    APP_IOTec.initApp();
});
