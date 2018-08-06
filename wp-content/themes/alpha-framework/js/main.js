// remove and add class when scroll window
$(function () {
    var myNav = $(".my-nav");
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 75) {
            myNav.addClass("nav-white-background");
        } else {
            myNav.removeClass('nav-white-background');
        }
    });
});
