let footer = gsap.timeline({
    scrollTrigger: {
        trigger: '.footer',
        start: 'left bottom'
    }
});

gsap.from('.header', {
    opacity: 0,
    duration: 1.5,
    delay: .5,
    y: -50,
    ease: 'Bouce.easeInOut'
});

gsap.from('.whatsapp', {
    opacity: 0,
    duration: 1.5,
    delay: 1.5,
    x: 0,
    ease: 'Bouce.easeInOut'
});

footer.from('.footer', {
    opacity: 0,
    duration: 1.5,
    y: 100,
    ease: 'Bouce.easeInOut',
});