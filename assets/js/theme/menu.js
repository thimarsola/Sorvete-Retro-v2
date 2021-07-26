$(function () {
    // $('.header__navbar__section__toggle').click(function () {
    //     const clicks = $(this).data('clicks');
    //     const header = $('.header');
    //
    //     if (clicks) {
    //         $('body').css('overflow', 'auto');
    //     } else {
    //         $('body').css('overflow', 'hidden');
    //     }
    //     $(this).data("clicks", !clicks);
    //
    //     header.toggleClass('header--active');
    //
    //     if( header.hasClass('header--active')){
    //         $('.menu li a[href]').on('click', function(){
    //             $('.header').removeClass('header--active');
    //         });
    //     }
    // });

    $('.header__navbar__section__toggle').on('click', function(){
        const clicks = $(this).data('clicks');
        const header = $('.header');

        if (clicks) {
            $('body').css('overflow', 'auto');
        } else {
            $('body').css('overflow', 'hidden');
        }
        $(this).not('a').data("clicks", !clicks);

        header.toggleClass('header--active');

        if( header.hasClass('header--active')){
            $('body').css('overflow', 'hidden');

            $('.menu li a[href]').on('click', function(){
                $('.header').removeClass('header--active');
                $('body').css('overflow', 'auto');
            });
        }
    });
});