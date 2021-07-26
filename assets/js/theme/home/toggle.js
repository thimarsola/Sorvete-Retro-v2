$(function (){
    const speed = 1000;

    $('.faq__row__container__content__item__header').on("click", function (){

       $('.faq__row__container__content__item__body').stop().slideUp(speed);
       $(this).parent().find('.faq__row__container__content__item__body').slideToggle();

       $('.faq__row__container__content__item__header span').text('+');
       $(this).children('.faq__row__container__content__item__header span').text('-');
    });
});