$(function () {
    var scrollLink = $('nav a[href^="#"], .hero a[href^="#"]');

    scrollLink.click(function (e) {
        e.preventDefault();
        var id = $(this).attr('href'),
            targetOffset = $(id).offset().top,
            menuHeight = $('.header').innerHeight();

        $('html, body').animate({
            scrollTop: targetOffset - menuHeight
        }, 1000);
    });
});