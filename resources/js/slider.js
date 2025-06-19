$(document).ready(function () {
    $(".feedback__slide__list.owl-carousel").owlCarousel({
        items: 3,
        loop: false,
        margin: 30,
        nav: true,
        dots: true,
        stagePadding: 3,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsiveRefreshRate: true,
        navText: [
            "<i class='fal fa-angle-left'></i>",
            "<i class='fal fa-angle-right'></i>",
        ],
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            768: {
                items: 2,
                nav: false,
            },
            992: {
                items: 3,
                nav: false,
            },
            1200: {
                items: 3,
                nav: false,
            },
        },
    });
});
