const screenPosition = window.innerHeight / 1.25;

//about
function animationAbout(){
    const about = document.querySelector('.about__content');
    const aboutPosition = about.getBoundingClientRect().top;

    if(aboutPosition < screenPosition){
        about.classList.add('about__content--animation');
    }
}
window.addEventListener('scroll', animationAbout);

//simulator
function animationSimulador(){
    const simulador = document.querySelector('.simulator__row__content__body');
    const simuladorPosition = simulador.getBoundingClientRect().top;

    if(simuladorPosition < screenPosition){
       simulador.classList.add('simulator__row__content__body--animation');
    }
}
window.addEventListener('scroll', animationSimulador);

//blog
function animationBlog(){
    const blog = document.querySelector('.blog__content__container__body');
    const blogPosition = blog.getBoundingClientRect().top;

    if(blogPosition < screenPosition){
       blog.classList.add('blog__content__container__body--animation');
    }
}
window.addEventListener('scroll', animationBlog);