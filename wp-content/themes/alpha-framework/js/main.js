// remove and add class when scroll window
$(function () {
    var myNav = $(".my-nav");
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
            myNav.addClass("nav-white-background");
        } else {
            myNav.removeClass('nav-white-background');
        }
    });
});

// slick slider
$(document).ready(function () {
    $('.lb-slider-items').slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: false,
        responsive: [{
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 543,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
});